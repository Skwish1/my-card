<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
if (mail("batin_efim@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email,"From: ".$email." \r\n"))
 {  
    header("Location:http://"); //Нужно указать путь к исходной странице
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>