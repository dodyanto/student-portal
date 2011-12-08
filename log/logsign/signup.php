<html>
<head>

</head>
<body>
<?php
error_reporting(E_ALL ^ E_NOTICE); 
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect:' .mysql_error());
}
mysql_select_db("portal", $con);
$f_name=$_POST ['f_name'];
$l_name=$_POST ['l_name'];
$password=$_POST ['password'];
$email_id=$_POST ['email_id'];
$phone_no=$_POST ['phone_no'];
$dob=$_POST ['dob'];
$semester=$_POST ['semester'];
$department=$_POST ['department'];
$college=$_POST ['college'];

$pass = sha1("$password");
if(!filter_var("$f_name", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+$/"))))
  {
echo " first name is invalid";

  die('Error ' . mysql_error());
  }

if(!filter_var("$l_name", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+$/"))))
  {
echo " Last Name is invalid";

  die('Error ' . mysql_error());
  }

if(!filter_var("$email_id", FILTER_VALIDATE_EMAIL))
  {
echo "E-mail is invalid";
}

if(!filter_var("$phone_no", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[0-9]+$/"))))
  {
echo " Phone is invalid";

  die('Error ' . mysql_error());
  }

if(!filter_var("$dob", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/"))))
  {
echo " Date of Birth Field is invalid";

  die('Error ' . mysql_error());
  }

if(!filter_var("$semester", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[0-9]$/"))))
  {
echo " Semester is invalid";

  die('Error ' . mysql_error());
  }
if(!filter_var("$department", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+$/"))))
  {
echo " Department is invalid";

  die('Error ' . mysql_error());
  }
if(!filter_var("$college", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+$/"))))
  {
echo " college is invalid";

  die('Error ' . mysql_error());
  }

$result = mysql_query("INSERT INTO user(f_name,l_name,password,email_id,phone_no,dob,semester,department,college)
VALUES
('$_POST[f_name]','$_POST[l_name]','$pass','$_POST[email_id]','$_POST[phone_no]','$_POST[dob]','$_POST[semester]','$_POST[department]','$_POST[college]')");

if($result) 
{
echo "Successfully Signed Up for the Website";

mysql_close($con);
}
 else
 {
 die('Invalid query: ' . mysql_error());
 }
?>
<a href = "http://localhost/final1/login.html"> <h3><font color = "black"> Login Now </font></h3></a>
</body>
</html>
