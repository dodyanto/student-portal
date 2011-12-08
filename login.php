 <?php @session_start();
  $_SESSION['flag']=1;
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGIN</title>

<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-color:black;">

<form class="form1" action="login1.php" method="POST">
<div style="padding: 150px 0 0 320px;">


<div id="login-box">

<H2>Login</H2>
The Question and Answers Portal
<br />
<br />
      <div id="loginblock">
                      <form action="login1.php" method="post">
                        <div id="loginbox-name"/><p>Email_ID:<br></br>
                          <input type="text" name="email_id" class="login" value="" tabindex="40" />
                        </p></div>
                        <p>Password:<br></br>
                          <input type="password" name="password" class="login" tabindex="41" />
                        </p>
                        <p><input type="hidden" name="processlogin" value="1" /> <input type="hidden" name="return" value="" /> <input class="checkbox" type="checkbox" name="persistent" tabindex="42" /> <small>Remember my Password</small>
                        </p>
                        <p>
                          <input type="submit" value="Sign IN" class="submit-s" tabindex="43" />
                        </p>
<a href = "newmem.html"> <h3><font color = "black">New Member Sign Up Now </font></h3></a>
<br/><br/>
           </form>
           </form>






</div>


</div>
</form>












</body>
</html>
