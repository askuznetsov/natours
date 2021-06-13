<?php

$name = $_POST['name'];
$email = $_POST['email'];

// security power

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

// lets decode

$name = urldecode($name);
$email = urldecode($email);


// remove empty spaces

$name = trim($name);
$email = trim($email);

//example@mail.ru - where to send
//example2@mail.ru - from where


if (mail("example@mail.ru", "Заказ с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
{
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

?>