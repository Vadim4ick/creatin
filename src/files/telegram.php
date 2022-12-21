<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$token = "5831052266:AAEBsFTI6YTzvrfnDeRYRdJfY_IlkxZfFVs";
$chat_id = "-1001841443401";
$arr = array(
  'Ваше имя: ' => $name,
  'Ваш телефон: ' => $phone,
  'Почта:' => $email,
  'Комментарий:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  return false;
} else {
  return true;
}
?>
