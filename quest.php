     <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
<html>
<head>
</head>
<meta http-equiv=”refresh” content=”2" url="localhost/fusion/project/part/part/index1.php">
<body>
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect:' .mysql_error());
}
               $uid=$_SESSION['id'];
mysql_select_db("qa", $con);
$x="select tid from tag where tagname="."'$_POST[tags]'";
$sql=mysql_query("$x");


 while($row=mysql_fetch_array($sql))
                    $tag=$row['tid'];



                            if($uid!="1" && $tag=="6")
                            {}
                            else
                            {
                            

mysql_query("INSERT INTO messages(uid_fk,message,message_dis,tid)
VALUES
('$uid','$_POST[post_title]','$_POST[post_body]','$tag')");

	$query = mysql_query("select * from messages where uid_fk='$uid' and tid='$tag'") or die(mysql_error());
	$row=mysql_num_rows($query);

                   if($row==0)
                   	$query1 = mysql_query("UPDATE `tag` SET nou = nou+1 where tid='$tag'") or die(mysql_error());
        	$query1 = mysql_query("UPDATE `tag` SET nop = nop+1 where tid='$tag'") or die(mysql_error());
   	$query1 = mysql_query("UPDATE `users` SET noq = noq+1 where uid='$uid'") or die(mysql_error());
   	}
   	
   	   if($uid=="1" && $tag=="6")
   	   {   echo'<script>
window.location="2.php";</script>';
          }
                      echo'<script>
window.location="index1.php";</script>';
mysql_close($con);
?>
</body>
</html>


