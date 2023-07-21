// import "./style.css"
import "./src/scss/styles.scss"

const phoneInputField = document.querySelector("#phone")

const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: ["ru", "ua", "by", "kz"],

  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
})
