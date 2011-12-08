<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>Fusion by digitalnature</title>

    <meta name="keywords" content="fusion, digitalnature" />
    <meta name="description" content="Fusion CSS template" />

    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://yoursite.com/rss" />
    <link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://yoursite.com/atom" />
    <link rel="pingback" href="http://yoursite.com" />
    <link rel="shortcut icon" href="favicon.ico" />

    <style type="text/css" media="all">
     @import "style.css";
    </style>
    <script type="text/javascript" src="jquery1.js"></script>
<script type="text/javascript" >



$(function() {
$(".submit").click(function()
{
var name = $("#name").val();
var uid = $("#uid").val();
var comment = $("#comment").val();
var dataString = 'name='+ name + '&uid=' + uid + '&comment=' + comment;
alert(dataString);
if(name=='' || comment=='')
{
alert('Please Give Valid Details');
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" />Loading Comment...');
$.ajax({
type: "POST",
url: "commentajax.php",
data: dataString,
cache: false,
success: function(html){
var x=document.getElementById('update');
alert(x);
$("#mid-content#ol#update").append(html);
$("#mid-content#ol#update li:last").fadeIn("slow");
   document.getElementById('name').value='';
    document.getElementById('comment').value='';
	$("#name").focus();
$("#flash").hide();
}
});
}return false;
}); });
</script>
<style type="text/css">
body
{
font-color: black;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}
	a:hover
	{
	text-decoration:underline;
	color:#d02b55;
	}
	*{margin:0;padding:0;}


	ol.timeline
	{list-style:none;font-size:1.2em;}
	ol.timeline li{ display:none;position:relative;padding:.7em 0 .6em 0;}ol.timeline li:first-child{}

	#main
	{
	width:500px; margin-top:20px; margin-left:100px;
	font-family:"Trebuchet MS";
	}
	#flash
	{
	margin-left:100px;

	}
	.box
	{
	height:85px;
	border-bottom:#dedede dashed 1px;
	margin-bottom:20px;
	}
		input
	{
	color:#000000;
	font-size:14px;
	border:#666666 solid 2px;
	height:24px;
	margin-bottom:10px;
	width:200px;


	}
	 div#abc
    {

    width:100px;

    color:#C0C0C0;
    margin-left:45px;
    }
	textarea
	{
	color:#000000;
	font-size:14px;
	border:#666666 solid 2px;
	height:124px;
	margin-bottom:10px;
		width:200px;

	}



	.titles{
	font-size:13px;
	padding-left:10px;


	}
	.star
	{
	color:#FF0000; font-size:16px; font-weight:bold;
	padding-left:5px;
	}

	.com_img
	{
	float: left; width: 80px; height: 80px; margin-right: 20px;
	}
	.com_name
	{
	font-size: 16px; color: rgb(102, 51, 153); font-weight: bold;
	}
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

              <div id="topnav"><p>TOP</p></div>
              <h1 id="logo"><a href="#">Page title</a></h1>

              <!-- top tab navigation -->

              <!-- /top tabs -->

            </div><!-- /header -->

            <!-- mid content -->
            <div id="mid-content">
             <!-- comments purpose-->
<ol id="update" class="timeline">
     <HR WIDTH="900px" SIZE="2" NOSHADE="NOSHADE">

<?php
include('config.php');
//$post_id value comes from the POSTS table
$sql=mysql_query("select * from comment ");
while($row=mysql_fetch_array($sql))
{
$uid=$row['uid'];
$comment=$row['comment'];
$lowercase = strtolower($uid);
$image = md5( $lowercase );
$x="select name from user where uid="."$uid";
$sql1= mysql_query("$x");
while($row1=mysql_fetch_array($sql1))
$name=$row1['name'];
?>
   <div id="abc">
   <img src="http://www.gravatar.com/avatar.php?gravatar_id=
<?php echo $image; ?>"/>
   <h4><?php echo $name;echo "\n";?></h1>
   <h5><?php echo $comment;?></h2>
   </div>
   <HR WIDTH="900px" SIZE="2" NOSHADE="NOSHADE">

<?php
}
?>
 </ol> <br><br>
<div id="flash"></div>
<div >
<form action="#" method="post">
<input type="hidden" id="post_id" value="<?php echo $post_id; ?>"/>
<input type="hidden" id="uid" value="<?php echo $uid; ?>"/>
<input type="text" id="name"/>Name<br />
<textarea id="comment"></textarea><br />
<input type="submit" class="submit" value=" Submit Comment " />
</form>
</div>

            </div>
            <!-- /mid content -->
          </div>
          <!-- /mid -->


          <!-- sidebar -->

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


