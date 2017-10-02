<?php
$email = $_POST['email'];
$name = $_POST['name'];
$email = htmlspecialchars($email);
$name = htmlspecialchars($name);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("infosantorinilviv@gmail.com", "Заявка на підписку з сайта", "Ім'я:".$name.". E-mail: ".$email ,"From: infosantorinilviv@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>