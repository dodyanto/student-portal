<?php

$q=$_GET["q"];
$s=$_GET["s"];

include('config.php');

// Connect to server and select databse.
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


$sql="UPDATE messages SET nov='$s' where msg_id='$q'";
//$sql="UPDATE post SET nov="."'$q'"."where pid"='68'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);



mysql_close($link);
?>
