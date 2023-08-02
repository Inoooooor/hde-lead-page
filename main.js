import "./src/scss/styles.scss"
import phoneVerify from "./src/utilities/phoneVerify"
import axios from "axios"

const form = document.querySelector("#leadForm")

form.onsubmit = async (event) => {
  try {
    alert(document.querySelector("#email").value)
    return

    event.preventDefault()
    const options = {
      method: "POST",
      // url: "https://api.telegram.org/bot6588888987:AAEg_Ke9HA6gRP7vGmw8nouBc8o84FhBYc8/sendMessage",
      url: "https://webhook.site/ecf50f3a-b50b-479a-b13b-b15f5d2ab902",
      headers: {
        accept: "application/json",
        "content-type": "application/json",
      },
      data: {
        text: new FormData(form),
        disable_web_page_preview: false,
        disable_notification: false,
        parse_mode: "HTML",
        reply_to_message_id: null,
        chat_id: "602753868",
      },
    }
    const response = await axios.request(options)
    console.log(response)
  } catch (error) {}
}

phoneVerify()

console.log(form)
