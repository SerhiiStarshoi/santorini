<?php

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$email = htmlspecialchars($email);
$name = htmlspecialchars($name);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную


if (mail("infosantorinilviv@gmail.com", "Заявка <звязатись з нами>", "Ім'я: ".$name.". E-mail: ".$email. " Повідомлення: ".$message  ,"From: infosantorinilviv@gmail.com \r\n"))
 {    
	echo "<script type='text/javascript'>alert('Ваше повідомлення було відправлено');</script>";
	echo "<html><head><meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'></head></html>";

} else { 
    echo "при відправлені повідомлення виникла помилка";
	

	
	
	
}?>

