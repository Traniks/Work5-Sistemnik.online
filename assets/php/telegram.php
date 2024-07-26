<?php

/* https://api.telegram.org/bot6638605033:AAE_xBbjaUWorCD51kUQHxClvD1GMWXRkcM/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['user__phone'];
$address = $_POST['user__address'];
$user__problem = $_POST['user__problem'];
$token = "6745137592:AAFh_30OFsT0pUEICcYqhhyNorKxXMo3BYM";
$chat_id = "-1002133618474";
$arr = array(
  '<strong>Новая заявка!</strong>',
  'Телефон пользователя: ' => $phone,
  'Адрес пользователя: ' => $address,
  'Проблема:' => $user__problem
); 
$txt = '<strong>Новая заявка!</strong>%0A';
foreach($arr as $key => $value) {
  if ($key !== 0) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  }
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: https://sistemnik.online/order.html');
} else {
  echo "Error";
}
?>