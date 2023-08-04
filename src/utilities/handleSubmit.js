import sendRequest from "./sendRequest"
export default function () {
  const phoneInputField = document.querySelector("#phone")

  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["ru", "ua", "by", "kz"],

    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  })

  const error = document.querySelector(".alert-error")
  const info = document.querySelector(".alert-info")

  function process(event) {
    event.preventDefault()

    const phoneNumber = phoneInput.getNumber()

    error.style.display = "none"
    info.style.display = "none"

    if (phoneInput.isValidNumber()) {
      sendRequest()
      this.reset()
      info.style.display = ""
      info.innerHTML = "Благодарим вас! Мы скоро с вами свяжемся."
    } else {
      error.style.display = ""
      error.innerHTML = `Неверный формат телефона.`
    }
  }

  document.querySelector("#leadForm").addEventListener("submit", process)
}
