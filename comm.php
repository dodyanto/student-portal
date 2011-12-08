  <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
<?php
error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/func.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';
     @session_start();
     $uid=$_SESSION['id'];




$Wall = new Wall_Updates();

$updatesarray=$Wall->Updates($uid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>POST STATUS</title>

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
    <link href="css/wall.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.oembed.js"></script>
 <script type="text/javascript" src="js/wall.js"></script>
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
                <p><a href="index1.php">Home</a> | <a href="member1.php">Members</a> | <a href="temp.php">Top Members</a> | <a href="about.html">About</a> |  <a href="comm.php">post status</a> | <a href="login.php">Sign Out</a></p></div>
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



              <div id="wall_container">
<div id="updateboxarea">
<form method="post" action="">
</form>
</div>
<div id='flashmessage'>
<div id="flash" align="left"  ></div>
</div>
<div id="content">

<?php include('load_messages.php'); ?>

</div>



</div>



            </div>
            <!-- /mid content -->
          </div>
          <!-- /mid -->


          <!-- sidebar -->
          <div id="sidebar">
           <!-- sidebar 1st container -->
          <div id="sidebar-wrap1">
            <!-- sidebar 2nd container -->

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


