  <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
     <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>MEMBERS LIST</title>

    <meta name="keywords" content="fusion, digitalnature" />
    <meta name="description" content="Fusion CSS template" />

    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://yoursite.com/rss" />
    <link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://yoursite.com/atom" />
    <link rel="pingback" href="http://yoursite.com" />
    <link rel="shortcut icon" href="favicon.ico" />
                        <script language="javascript" type="text/javascript" src="XMLHttpRequest_responseXML.js"></script>
    <style type="text/css" media="all">
     @import "style.css";
    </style>
     <script type="text/javascript">
 function send()
 {

 var nam=document.getElementById("abc");
 var name=nam.value;


SendData(name);
}
</script>
    <!--[if lte IE 6]>
    <script type="text/javascript">
    /* <![CDATA[ */
       blankimgpath = 'images/blank.gif';
     /* ]]> */
    </script>

    <style type="text/css" media="screen">
      @import "ie6.css";
      body{ behavior:url("ie6hoverfix.htc"); }
      img{ behavior: url("ie6pngfix.htc"); }
    </style>
    <![endif]-->

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/fusion.js" type="text/javascript"></script>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
 </head>
 <body class="home">
  <!-- page wrappers (100% width) -->
  <div id="page-wrap1">
    <div id="page-wrap2">
      <!-- page (actual site content, custom width) -->
      <div id="page" class="with-sidebar">

       <!-- main wrapper (side & main) -->
       <div id="main-wrap">
        <!-- mid column wrap -->
    	<div id="mid-wrap">
         <!-- sidebar wrap -->
         <div id="side-wrap">
          <!-- mid column -->
    	  <div id="mid">
            <!-- header -->
            <div id="header">

              <div id="topnav">
                <p><a href="index1.php">Home</a> | <a href="member1.php">Members</a> | <a href="temp.php">Top Members</a> | <a href="about.html">About</a> |  <a href="comm.php">post status</a>  | <a href="login.php">Sign Out</a></p></div>
              <a id="logo" href="#"><img src="qa.jpg" alt="Pligg" width="85" height="78" /></a>

              <!-- top tab navigation -->
              <div id="tabs">
                <ul>
                  <li><a href="index1.php" ><span><span>Recent questions</span></span></a></li>

                  <li><a href="que.php" ><span><span>Ask a Question</span></span></a></li>
                </ul>
              </div>
              <!-- /top tabs -->

            </div><!-- /header -->

            <!-- mid content -->
            <div id="mid-content">


                  <?php
include('config.php'); ?>
   <span style="padding-left:200px">
   <?php
$query = "SELECT username FROM users ORDER BY username";
$result = mysql_query($query);
?>
NAME:<select name="name" id="abc" onchange="send()">
  <option size=30 selected>Select</option>
<?php
while($array = mysql_fetch_assoc($result)){
?>
<option value="<?php echo $array['username'];?>"><?php echo $array['username'];?></option>
<?php
}
?>
</select>     <br><br>
        <table width="200" class="sample" cellpadding="0">
 <tr>  	<th width="100">NAME</th>  <td width="70">

       <textarea style="resize:none" id="name" rows="1" cols="47"  readonly="readonly" type="text" ></textarea> </td>
 </tr>
 <tr>  	<th width="150">PHONE</th>  <td width="70">
       <textarea style="resize:none" id="phone"  rows="1" cols="47"  readonly="readonly"  type="text"></textarea> </td>
 </tr>
 <tr>  	<th width="150">COLLEGE</th>  <td width="70">
       <textarea style="resize:none" id="coll"  rows="1" cols="47"  readonly="readonly"  type="text"></textarea> </td>
 </tr>
 <tr>  	<th width="150">DEPT</th>  <td width="70">
       <textarea style="resize:none" id="dept"  rows="1" cols="47"  readonly="readonly"  type="text"></textarea> </td>
 </tr>
 <tr>  	<th width="150">EMAIL</th>  <td width="70">
       <textarea style="resize:none" id="email"  rows="1" cols="47"  readonly="readonly"  type="text"></textarea> </td>
 </tr>
 <tr>  	<th width="150">NUMBER OF QUESTIONS</th>  <td width="70">
       <textarea style="resize:none" id="noq"  rows="1" cols="47"  readonly="readonly"  type="text"></textarea> </td>
 </tr>   </table>
       <span style="padding-left:120px">
<td align="center" valign="middle"  height="50" bgcolor="#558590" style="padding:10px">
  <!--   <input type="button" style="width:300px; height:25px; background:#659aa7;"
     value="GET INFORMATION" onclick="send()"> -->
      <br><br> <br>

            </div>
            <!-- /mid content -->
          </div>
          <!-- /mid -->


          <!-- sidebar -->
          <div id="sidebar">
           <!-- sidebar 1st container -->
          <div id="sidebar-wrap1">
            <!-- sidebar 2nd container -->
            <div id="sidebar-wrap2">

             <img id="ph" src="face.jpg" height="300" width="268" border="0"><br> <br>

            </div>
            <!-- /sidebar 2nd container -->
           </div>
           <!-- /sidebar 1st container -->
          </div>
          <!-- /sidebar -->
         </div>
         <!-- /side wrap -->
        </div>
        <!-- /mid column wrap -->
       </div>
       <!-- /main wrapper -->

       <!-- clear main & sidebar sections -->

       <!-- /clear main & sidebar sections -->


       <!-- footer -->

       <!-- /footer -->

       <!-- layout controls -->

       <!-- /layout controls -->
      </div>
      <!-- /page -->

     </div>
  </div>
  <!-- /page wrappers -->

 </body>
</html>


