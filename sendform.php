<?php
/* https://api.telegram.org/bot5818336472:AAFDqYbBEFn40HrNxqaN-VWcoN6Znr1YGNw/getUpdates,
https://api.telegram.org/bot818336472:AAFDqYbBEFn40HrNxqaN-VWcoN6Znr1YGNw/getUpdates
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$message = $_POST['message']; // Берём данные из input c атрибутом name="message"

$token = "5818336472:AAFDqYbBEFn40HrNxqaN-VWcoN6Znr1YGNw"; // Тут пишем токен
$chat_id = "-926598190"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "vadimbelyakov.ru"; //Указываем название сайта

$arr = array(

  'Обращение с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value.";"." ";
};

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
