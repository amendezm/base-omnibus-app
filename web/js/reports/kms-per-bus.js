window.onload = () => {
  const busNumberInput = document.getElementById("busNumberFilter");
  const busContainer = document.querySelector(".bus-container");

  busNumberInput.onkeyup = event => {
    const size = busContainer.children.length;
    for (let i = 0; i < size; i++) {
      const node = busContainer.children.item(i);
      console.info(node.getAttribute("id"));
      if (!node.getAttribute("id").includes(event.target.value)) {
        node.classList.add("hide-element");
      } else {
        node.classList.remove("hide-element");
      }
    }
  };
};
