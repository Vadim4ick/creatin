/* Маски для полей (в работе) */

// Подключение функционала "Чертогов Фрилансера"
// Подключение списка активных модулей
import { flsModules } from "../modules.js";

// Подключение модуля
import "inputmask/dist/inputmask.min.js";

// const inputMasks = document.querySelectorAll('input');
// if (inputMasks.length) {
// 	flsModules.inputmask = Inputmask().mask(inputMasks);
// }

const phone = document.querySelector("#phone");

if (phone) {
  Inputmask({
    mask: "9-(999)-999-99-99",
    placeholder: " ",
    showMaskOnHover: false,
    showMaskOnFocus: false,
  }).mask(phone);
}

// mask: '9999 9999 9999 9999',
// placeholder: ' ',
// showMaskOnHover: false,
