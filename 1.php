     <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("qa", $con);

                           $p=$_GET["p"];
                           $q=$_GET["q"];
                           $s=$_GET["s"];
                           
                           $sql = "select email from users where uid_fk='".$_SESSION['id']."'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$mm=$row['email'];
}


$sql = "select * from messages where msg_id='".$p."'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{

$body1.="TITLE : ";
$body1.=$row['message'];
$body1.="DESCRIPTION : ";
$body1.=$row['message_dis'];
}

//echo "$row[0]";

require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP

$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = "tarun.196@gmail.com";
	$mail->Password = "saplabsitis";
$webmaster_email = "$mm"; //Reply to this email ID
$email= "$s";// Recipients email ID
$name="$q"; // Recipient's name
//$email= "tarun.196@gmail.com";// Recipients email ID
//$name="rahul"; // Recipient's name
$name1="tarun";
$mail->From = $webmaster_email;
$mail->FromName = "QA PORTAL";
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
mysql_close($con);
?>




