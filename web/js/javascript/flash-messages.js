window.onload = () => {
  const flash = document.getElementsByClassName("notice-flash")[0];
  const notifier = new Notifier();

  if (flash && flash.textContent) {
    const notification = notifier.notify("success", flash.textContent);
    notification.push();
  }
};
