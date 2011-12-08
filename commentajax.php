<?php
      include('config.php');
if($_POST)
{
$name=$_POST['name'];
 $comment=$_POST['comment'];
  $uid=$_POST['uid'];
 $lowercase = strtolower($name);
$image = md5( $lowercase );
$x=10;
echo $name;
echo $uid;
mysql_query("insert into comment(uid,cid,comment) values ('$uid','$x','$comment')");
//mysql_query("insert into comments(com_name,com_email,com_dis) values ('$name','$email','$comment')");
}

?>

 <div id="abc">
   <img src="http://www.gravatar.com/avatar.php?gravatar_id=
<?php echo $image; ?>"/>
   <h4><?php echo $name;echo "\n";?></h1>
   <h5><?php echo $comment;?></h2>
   </div>
   <HR WIDTH="900px" SIZE="2" NOSHADE="NOSHADE">
