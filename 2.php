     <?php
     @session_start();
     ?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("qa", $con);


                           $sql = "select * from messages where uid_fk='1' and tid = '6' order by msg_id desc limit 0,1";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$msg=$row['message'];
$dis=$row['message_dis'];
}
  require("phpmailer/class.phpmailer.php");

$body1="$msg    ";
$body1.="      $dis";

$sql = "select email,username from users where uid!='1'";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{
$emailid=$row['email'];
$n=$row['username'];
//echo "$row[0]";

   $mail = new PHPMailer();

$mail->IsSMTP(); // send via SMTP

$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = "tarun.196@gmail.com";
	$mail->Password = "saplabsitis";
$webmaster_email = "$emailid"; //Reply to this email ID
$email= "$emailid";// Recipients email ID
$name="$n"; // Recipient's name
//$email= "tarun.196@gmail.com";// Recipients email ID
//$name="rahul"; // Recipient's name
$name1="tarun";
$mail->From = $webmaster_email;
$mail->FromName = "QA PORTAL--ADMIN MESSAGE--DONT REPLY";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is mail is sent to u by QA Portal....";
$mail->Body = "Hi $name.... your friend '$name1' is liking to share this question with you...."."$body1"; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Registration done succefully";
}
}
echo'<script>
window.location="index1.php";</script>';
mysql_close($con);
?>




