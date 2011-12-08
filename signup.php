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
mysql_select_db("qa", $con);
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

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")) )

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {


    }
  }
else
  {
  echo "Invalid file";
  }



if(!filter_var("$f_name", FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+$/"))))
  {
echo " first name is invalid";

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
  if (file_exists("uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $_FILES["file"]["name"]);
           $path="uploads/" . $_FILES["file"]["name"];
      }

$result = mysql_query("INSERT INTO users(username,password,email,phone,dept,college,photo)
VALUES
('$_POST[f_name]','$password','$_POST[email_id]','$_POST[phone_no]','$_POST[department]','$_POST[college]','$path')");

if($result) 
{
echo "Successfully Signed Up for the Website";
        echo'<script>
window.location="login.html";</script>';
mysql_close($con);
}
 else
 {
 die('Invalid query: ' . mysql_error());
 echo'<script>
window.location="newmem.html";</script>';
 }
?>
</body>
</html>
