<?php

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];

$email = htmlspecialchars($email);
$name = htmlspecialchars($name);
$message = htmlspecialchars($message);
$mobile = htmlspecialchars($mobile);
$subject = htmlspecialchars($subject);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$mobile = urldecode($mobile);
$subject = urldecode($subject);

$name = trim($name);
$email = trim($email);
$message = trim($message);
$mobile = trim($mobile);
$subject = trim($subject);

$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную


if (mail("infosantorinilviv@gmail.com", "Заявка <звязатись з нами>", "Ім'я: ".$name.". E-mail: ".$email. " Телефон: ".$mobile. " Заголовок: ".$subject. " Повідомлення: ".$message  ,"From: infosantorinilviv@gmail.com \r\n"))
 {    
	echo "<script type='text/javascript'>alert('Ваше повідомлення було відправлено');</script>";
	echo "<html><head><meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'></head></html>";

} else { 
    echo "при відправлені повідомлення виникла помилка";
	

	
	
	
}?>

