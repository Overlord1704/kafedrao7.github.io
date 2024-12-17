<?php
	//print_r($_POST);
	$email = $_POST['subscribe-email'];
	
	$error = '';
	if(trim($email)=='')
		$error = 'Введите ваш email';
	
	if ($error != '')
	{
		echo $error;
		exit;
	}
	
	
?>