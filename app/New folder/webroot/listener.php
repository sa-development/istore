<?php
$to      = 'satish.ashilwar@gmail.com,sarangpthk@gmail.com,sanjitcdacmca@gmail.com';
$subject = 'REMOTE POS DATA -- '.mktime(). '-PUSHED  FROM IP-'.$_SERVER['REMOTE_ADDR'];
//$message = 'Hi';
//$message .= '#########################################################START###############################################################';
/*$message .= print_r($_REQUEST, true);
$message .= print_r($_SERVER, true);
$message .= print_r($_GET, true);
$message .= print_r($_FILES, true);
$message .= print_r($_POST, true);*/
$message .= file_get_contents('php://input');
//$message .= '#########################################################END###############################################################';

$headers = 'From: satish.ashilwar@gmail.com' . "\r\n" . 'Reply-To: satish.ashilwar@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
