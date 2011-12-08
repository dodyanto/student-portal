<html>
<head>
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE); 

session_start(); 

mysql_connect("localhost","root","")or die("cannot connect");
mysql_select_db("qa")or die("cannot select DB");
$myusername= $_POST['email_id'];
$mypassword= $_POST['password'];

$sessuser = $_SESSION['$myusername'];
$pass = sha1("$mypassword");
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($pass);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($pass);
$sql= "SELECT * FROM user WHERE email_id='$myusername' and password='$pass'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
echo "Login successful";
header("location:index1.php");
}
else {
echo "Wrong Username or Password";
}
?>
</body>
</html>
