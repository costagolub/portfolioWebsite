<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['name']) === '') {
		$nameError =  'Вы забыли указать свое имя!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	
	// require a subject 
	if(trim($_POST['subject']) === '') {
		$subjectError =  'Вы не указали тему письма!'; 
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}
	
	// security code 
	if(trim($_POST['anti-spam']) !== '86') {
		$antiError =  'Не правильный анти-спам код!'; 
		$hasError = true;
	} else {
		$antiSpam = trim($_POST['anti-spam']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Вы не заполнили поле с email адресом.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Вы допустили ошибку в графе "email".';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['areaText']) === '') {
		$messageError = 'Вы забыли главное - написать письмо!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['areaText']));
		} else {
			$message = trim($_POST['areaText']);
		}
	}
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'copymaker@yandex.ru';
		$subject = $subject;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Имя: $name <br />\n\nEmail: $email <br />\n\nIp-Address: $ipaddress <br />\n\nДата и время: $date и $time <br />\n\nСообщение: $message";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		$headers .= "MIME-Version: 1.0" . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n";

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>