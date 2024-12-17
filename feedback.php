<?php
	//print_r($_POST);
	$email = $_POST['subscribe-email'];
	$message = $_POST['message'];
	
	$error = '';
	if(trim($email)=='')
		$error = 'Введите ваш email';
	else if(trim($message)<10)
		$error = 'Сообщение должно быть больше 10 символов';
	
	if ($error != '')
	{
		echo $error;
		exit;
	} 
	
	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
	
	mail('testacc1935@mail.ru',$subject,$message,$headers);
	
	header('Location: /contacts.php');
?>