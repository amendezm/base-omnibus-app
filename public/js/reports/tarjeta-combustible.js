window.onload = () => {
  const cardNumberInput = document.getElementById("cardNumberFilter");
  const cardContainer = document.querySelector(".card-container");

  cardNumberInput.onkeyup = (event) => {
    handleChange(event.target.value);
  };

  const handleChange = (numberFilterValue) => {
    console.info("locura mi gente");
    cardNumber = numberFilterValue;
    const hidenElements = document.getElementsByClassName(
      "card-item hide-element"
    );
    const message = document.getElementsByClassName("empty-message")[0];
    const size = cardContainer.children.length;

    for (let i = 0; i < size; i++) {
      const node = cardContainer.children.item(i);
      const cardNumber = node.getAttribute("data-number");
      if (
        cardNumber &&
        cardNumber.length &&
        !cardNumber.includes(numberFilterValue)
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
