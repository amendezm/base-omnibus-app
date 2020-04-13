window.onload = () => {
  const busTab = document.getElementById("bus-tab");
  const graphicTab = document.getElementById("graphic-tab");
  const busNumberInput = document.getElementById("busNumberFilter");
  const minKilometersFilter = document.getElementById("minKilometersFilter");
  const maxKilometersFilter = document.getElementById("maxKilometersFilter");
  const busContainer = document.querySelector(".bus-container");
  const graphicsContainer = document.querySelector(".graphics-container");
  const busListContainer = document.querySelector(".bus-list-container");

  graphicTab.onclick = () => {
    busTab.classList.remove("active");
    graphicTab.classList.add("active");
    graphicsContainer.classList.remove("hide-element");
    busListContainer.classList.add("hide-element");
  };

  busTab.onclick = () => {
    graphicTab.classList.remove("active");
    busTab.classList.add("active");
    graphicsContainer.classList.add("hide-element");
    busListContainer.classList.remove("hide-element");
  };

  let busNumber = "";
  let minKilometers = 0;
  let maxKilometers = Number.MAX_VALUE;

  busNumberInput.onkeyup = event => {
    handleChange(event.target.value);
  };

  minKilometersFilter.onchange = event => {
    minKilometers = event.target.value || 0;
    handleChange(busNumber);
  };

  minKilometersFilter.onkeyup = event => {
    minKilometers = event.target.value || 0;
    handleChange(busNumber);
  };

  const maxFilterHandler = event => {
    maxKilometers =
      Number.parseInt(event.target.value) > minKilometers
        ? Number.parseInt(event.target.value)
        : Number.MAX_VALUE;
    handleChange(busNumber);
  };

  maxKilometersFilter.onchange = maxFilterHandler;

  maxKilometersFilter.onkeyup = maxFilterHandler;

  const handleChange = numberFilterValue => {
    busNumber = numberFilterValue;
    const hidenElements = document.getElementsByClassName(
      "bus-item hide-element"
    );
    const message = document.getElementsByClassName("empty-bus-message")[0];
    const size = busContainer.children.length;

    for (let i = 0; i < size; i++) {
      const node = busContainer.children.item(i);
      const busNumber = node.getAttribute("data-number");
      const busKilometers = node.getAttribute("data-kilometers");
      if (
        !busNumber.includes(numberFilterValue) ||
        Number.parseInt(busKilometers) < minKilometers ||
        Number.parseInt(busKilometers) > maxKilometers
      ) {
        node.classList.add("hide-element");
      } else {
        node.classList.remove("hide-element");
      }
    }
    if (hidenElements.length === size) {
      message.classList.remove("hide-element");
    } else {
      message.classList.add("hide-element");
    }
  };
};
