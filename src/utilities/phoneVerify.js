export default function () {
  const phoneInputField = document.querySelector("#phone")

  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["ru", "ua", "by", "kz"],

    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  })

  const error = document.querySelector(".alert-error")

  function process(event) {
    event.preventDefault()

    const phoneNumber = phoneInput.getNumber()

    error.style.display = "none"

    if (phoneInput.isValidNumber()) {
      // this.submit()
    } else {
      error.style.display = ""
      error.innerHTML = `Неверный формат телефона.`
    }
  }

  document.querySelector("#leadForm").addEventListener("submit", process)
}
