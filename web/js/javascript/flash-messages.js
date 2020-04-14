window.onload = () => {
  const flash = document.getElementsByClassName("alert")[0];

  setTimeout(() => {
    flash.classList.add("hide-element");
  }, 4000);
};
