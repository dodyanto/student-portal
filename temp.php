  <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>TOP MEMBBERS</title>

    <meta name="keywords" content="fusion, digitalnature" />
    <meta name="description" content="Fusion CSS template" />

    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://yoursite.com/rss" />
    <link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://yoursite.com/atom" />
    <link rel="pingback" href="http://yoursite.com" />
    <link rel="shortcut icon" href="favicon.ico" />

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

              <div id="topnav"><p><a href="index1.php">Home</a> | <a href="member1.php">Members</a> | <a href="temp.php">Top Members</a> | <a href="about.html">About</a> |  <a href="comm.php">post status</a>  | <a href="login.php">LOG OUT</a></p></div>
                            
               <a id="logo" href="#"><img src="qa.jpg" alt="Pligg" width="85" height="78" /></a>
              <h1>TOP MEMBERS LIST<a href="#"></a></h1></span>

              <!-- top tab navigation -->
              
              <!-- /top tabs -->

            </div><!-- /header -->

            <!-- mid content -->
            <div id="mid-content">
             <link rel="stylesheet" href="css/image-gallery-2011.css" />
	<script type="text/javascript" src="js/external/mootools-core-1.3-full-compat.js"></script>
	<script type="text/javascript" src="js/external/mootools-more-1.3.1.1.js"></script>
	<script type="text/javascript" src="js/image-gallery-2011.js"></script>
	<style type="text/css">
	
body{
		font-family: Trebuchet MS, Arial;
		width:100%;
		background-color:#fff;
	}

	.imgCopyright{
		color: black;
		font-size:1em;
		font-style:italic;
	}
	.imgCopyright a{
		color:#fff;
	}
	</style>

<body>
<div id="dg-image-gallery" class="dg-image-gallery">
   <?php
   
   include('config.php');
//$post_id value comes from the POSTS table

$sql=mysql_query("select photo,username,nov,email from users as u,messages as p where u.uid=p.uid_fk order by nov desc limit 0,5");
while($row=mysql_fetch_array($sql))
{
$photo=$row['photo'];
$name=$row['username'];
$nov=$row['nov'];
$email=$row['email'];
?>
<div class="dg-image-gallery-image">
		<img class="dg-image-gallery-thumb" src=<?php echo $photo;?>>
		<span class="dg-image-gallery-caption"><?php echo $name;echo " ( "; echo $email; echo " ) ";echo " with "; echo $nov;echo " votes";?><span class="imgCopyright"><br><a href="http://www.scottpeckphoto.com">ScottPeckPhoto.com</a></span></span>
		<span class="dg-image-gallery-large-image-path"><?php echo $photo;?></span>

         <?php
         }
         ?>

</div>
<script type="text/javascript">
var gallery = new DG.ImageGallery({
	el : 'dg-image-gallery',
	autoplay : {
		pause : 2
	}
});
</script>

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
       <div class="clearcontent"></div>
       <!-- /clear main & sidebar sections -->


       <!-- footer -->
       <div id="footer">
         <p></p>
         <p><a href="http://validator.w3.org/check/referer"></a></p>
       </div>
       <!-- /footer -->

       <!-- layout controls -->
       <div id="layoutcontrol">
         <a href="javascript:void(0);" class="setFont" title="Increase/Decrease text size"><span>SetTextSize</span></a>
         <a href="javascript:void(0);" class="setLiquid" title="Switch between full and fixed width"><span>SetPageWidth</span></a>
       </div>
       <!-- /layout controls -->
      </div>
      <!-- /page -->

     </div>
  </div>
  <!-- /page wrappers -->

 </body>
</html>


