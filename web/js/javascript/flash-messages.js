window.onload = () => {
  const flashNotice = document.getElementsByClassName("notice-flash")[0];
  const flashDanger = document.getElementsByClassName("error-flash")[0];
  const notifier = new Notifier();

  if (flashNotice && flashNotice.textContent) {
    const notification = notifier.notify("success", flashNotice.textContent);
    notification.push();
  }

  if (flashDanger && flashDanger.textContent) {
    const notification = notifier.notify("error", flashDanger.textContent);
    notification.push();
  }
};
