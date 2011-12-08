<?php @session_start();


  $_SESSION['id']= 0;


?>
<html>
<head>
</head>
 <meta http-equiv=”refresh” content=”0" url="localhost/fusion/project/part/part/index1.php">
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE); 
  mysql_connect("localhost","root","")or die("cannot connect");
mysql_select_db("qa")or die("cannot select DB");
$myusername= $_POST['email_id'];
$mypassword= $_POST['password'];
           echo  $myusername;
           echo $mypassword;
          $pass = sha1("$mypassword");
// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($pass);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($pass);
$sql= "SELECT * FROM users WHERE email='".$myusername."' and password='".$mypassword."'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1 ){
echo "Login successful";
$sql=mysql_query("select uid from users where email='".$myusername."' and password='".$mypassword."'");
while($row=mysql_fetch_array($sql))
$uid=$row['uid'];
     $_SESSION['id']=$uid;
       $_SESSION['flag']=0;

      echo'<script>
window.location="index1.php";</script>';

}
else {
echo'<script>
window.location="login.php";</script>';
}
?>
</body>
</html>
