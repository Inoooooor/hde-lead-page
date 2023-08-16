import axios from "axios"
export default async function () {
  const workingAddress = "-1001962937315"
  // const testAddress = "602753868"

  try {
    const email = document.querySelector("#email").value
    const phone = document.querySelector("#phone").value
    const jobPosition = document.querySelector("#jobPosition").value
    const employeesAmount = document.querySelector("#employeesAmount").value
    const region = document.querySelector(".iti__selected-flag").title
    const chatIdAddress = workingAddress

    const options = {
      method: "POST",
      url: "https://api.telegram.org/bot6077891821:AAEtvTMyHL5VMhvyUmg8Ktnd4GZ9YPcb4qs/sendMessage",
      headers: {
        accept: "application/json",
        "content-type": "application/json",
      },
      data: {
        text:
          `<b>Почта:</b>\n${email}` +
          `\n<b>Номер телефона:</b>\n${phone}` +
          `\n<b>Должность:</b>\n${jobPosition}` +
          `\n<b>Количество сотрудников:</b>\n${employeesAmount}` +
          `\n<b>Регион:</b>\n${region}`,
        disable_web_page_preview: false,
        disable_notification: false,
        parse_mode: "HTML",
        reply_to_message_id: null,
        chat_id: chatIdAddress,
      },
    }
    await axios.request(options)
  } catch (error) {
    console.log(error)
  }
}
