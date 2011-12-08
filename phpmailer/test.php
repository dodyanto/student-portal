<?php

require_once 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer ();

$mail -> From = "foo@gmail.com";
$mail -> FromName = "Foo";
$mail -> AddAddress ("bar@domain.com");
$mail -> Subject = "Test";
$mail -> Body = "<h3>From GMail!</h3>";
$mail -> IsHTML (true);

$mail->IsSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'foo@gmail.com';
$mail->Password = '******';

if(!$mail->Send()) {
	echo 'Error: ' . $mail->ErrorInfo;
}
else {
{	echo 'Mail enviado!'.
}
?>
