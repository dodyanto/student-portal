<?php
$q=$_GET['q'];
echo $q;
@session_start();
$_SESSION['pid']=$q;
?>


