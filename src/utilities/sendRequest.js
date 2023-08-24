import axios from "axios"
export default async function () {
  const requestUrl = "/tour-form"

  try {
    const email = document.querySelector("#email").value
    const phone = document.querySelector("#phone").value
    const jobPosition = document.querySelector("#jobPosition").value
    const employeesAmount = document.querySelector("#employeesAmount").value
    const region = document.querySelector(".iti__selected-flag").title

    const options = {
      method: "POST",
      url: requestUrl,
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
      },
    }
    await axios.request(options)
  } catch (error) {
    console.log(error)
  }
}
