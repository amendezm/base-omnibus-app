window.onload = () => {
  const cardNumberInput = document.getElementById("cardNumberFilter");
  const minMoneyFilter = document.getElementById("minMoneyFilter");
  const maxMoneyFilter = document.getElementById("maxMoneyFilter");
  const fuelTypeFilter = document.getElementById("fuelTypeFilter");
  const cardContainer = document.querySelector(".card-container");

  let cardNumber = "";
  let minMoney = 0;
  let maxMoney = Number.MAX_VALUE;
  let fuelType = "Todos";

  cardNumberInput.onkeyup = (event) => {
    handleChange(event.target.value);
  };

  minMoneyFilter.onchange = (event) => {
    minMoney = event.target.value || 0;
    handleChange(cardNumber);
  };

  minMoneyFilter.onkeyup = (event) => {
    minMoney = event.target.value || 0;
    handleChange(cardNumber);
  };

  const maxFilterHandler = (event) => {
    maxMoney =
      Number.parseInt(event.target.value) > minMoney
        ? Number.parseInt(event.target.value)
        : Number.MAX_VALUE;
    handleChange(cardNumber);
  };

  maxMoneyFilter.onchange = maxFilterHandler;

  maxMoneyFilter.onkeyup = maxFilterHandler;

  fuelTypeFilter.onchange = (event) => {
    console.info(event.target.value);
    fuelType = event.target.value;
    handleChange(cardNumber);
  };

  const handleChange = (numberFilterValue) => {
    cardNumber = numberFilterValue;
    const hidenElements = document.getElementsByClassName(
      "card-item hide-element"
    );
    const message = document.getElementsByClassName("empty-message")[0];
    const size = cardContainer.children.length;

    for (let i = 1; i < size; i++) {
      const node = cardContainer.children.item(i);
      const cardNumber = node.getAttribute("data-number");
      const cardMoney = node.getAttribute("data-money");
      const cardFuel = node.getAttribute("data-fuel");

      if (
        (cardNumber &&
          cardNumber.length &&
          !cardNumber.includes(numberFilterValue)) ||
        Number.parseInt(cardMoney) < minMoney ||
        Number.parseInt(cardMoney) > maxMoney ||
        (fuelType !== "Todos" && cardFuel !== fuelType)
      ) {
        if (!node.classList.contains("card-add")) {
          node.classList.add("hide-element");
        }
      } else {
        node.classList.remove("hide-element");
      }
    }
    if (hidenElements.length === size - 1) {
      message.classList.remove("hide-element");
    } else {
      message.classList.add("hide-element");
    }
  };
};
