  <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>QA PORTAL</title>

    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://yoursite.com/rss" />
    <link rel="alternate" type="application/atom+xml" title="Atom Feed" href="http://yoursite.com/atom" />
    <link rel="pingback" href="http://yoursite.com" />
    <link rel="shortcut icon" href="favicon.ico" />
            <script src="js/pop.js" type="text/javascript"></script>

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
       <script src="js/vote.js" type="text/javascript"></script>
       <script src="js/pid.js" type="text/javascript"></script>
         <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/fusion.js" type="text/javascript"></script>
                              <script src="js/pid.js" type="text/javascript"></script>
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
                <p><a href="index1.php">Home</a> | <a href="member.html">Members</a> | <a href="temp.html">Top Members</a> | <a href="about.html">About</a> |  <a href="comm.php">post status</a>  | <a href="login.php">sign Out</a></p></div>
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

               <!-- sort links -->

               <!-- /sort links -->

               <?php

include('config.php');
$tag2= $_GET['tag'];


//$post_id value comes from the POSTS table
                                        //$t=" select * from post order by pid";
                                           $t=" select * from messages as m,tag as t WHERE tagname="."'$tag2'"." AND m.tid=t.tid";
$sql=mysql_query("$t");
                    while($row=mysql_fetch_array($sql))
                    {
$votes=$row['nov'];
$pid=$row['msg_id'];
$post_title=$row['message'];
$post_dis=$row['message_dis'];
$commemts = $row['noc'];
$uid=$row['uid_fk'];
$tid=$row['tid'];
$x="select username from users where uid="."'$uid'";
$sql1=mysql_query("$x");
                    while($row1=mysql_fetch_array($sql1))
                    $name=$row1['username'];
 $y="select tagname from tag where tid="."'$tid'";
 $sql2=mysql_query("$y");
                    while($row2=mysql_fetch_array($sql2))
                    $tag=$row2['tagname'];


?>
   <div class="post">
                    <!-- vote button -->
                    <div class="vote">
                      <span class="votenumber">

                             <p id=<?php echo $pid;?>><?php echo $votes; ?></p>
    					</span>
                     <ul id="subtext">
    <li id="a" onClick="increase(<?php echo $pid;?>)"><a href="" >North America</a></li>
    <li id="b"  onClick="decrease(<?php echo $pid;?>)"><a href="" >South America</a></li>

</ul>



                    </div>
                    <!-- /vote button -->
                    <!-- post header -->
                    <div class="postheader">
                    <!-- category + tags -->
                    <?php $url="tag.php?tag="."$tag";?>
                    <p class="postcategory"><a href=<?php echo $url;?>><?php echo $tag;?></a> </p>
                    <!-- /category + tags -->
                    <!-- title -->
                    <h3 class="posttitle">
                      <a href="#"><?php echo $post_title;?></a>
                    </h3>
                    <!-- /title -->
                    <!-- posted by... -->
                    <div class="postinfo">

                   <?php  $url="com.php?p="."$pid";
                                             $o="member2.php?name="."$name";?>
                     <p>posted by <a href=<?php echo $o?>><?php echo $name;?></a>  <a href=<?php echo $url;?>>Details</a></p>


                    </div>
                    <!-- /posted by... -->
                    </div>
                    <!-- /post header -->
                    <!-- post summary -->
                    <div class="postbody">
                      <p> <?php echo $post_dis;?> <a href=<?php echo $url;?>>Read more...</a>
                      </p>
                    </div>
                    <!-- /post summary -->
                    <!-- links -->
                    <?php
                    $c1=$commemts." comments";
                           $url="com.php?p="."$pid";

                    //$url="com.php?id=".$pid;
?>

                               <p class="postcontrols" ><a href="<?php echo $url;?>" class="comments"><?php echo $c1;?></a> | <a onclick="popup(<?php echo $pid;?>)">Tell a friend-Mail</a></p>
                    <div class="clear"></div>

                    <!-- /links -->
                    </div>

<?php
}
?>






               <!-- secondary tabs menu -->
               <div id="secondary-tabs">



                  <!-- tab1 -->
                  <div id="tab-1">

                    <!-- comments -->
                    <ol id="comments">

                      <!-- comment block -->
                	  <li class="comment with-avatars">
                        <div class="wrap tiptrigger">

                          <div class="avatar">
                           <a class="gravatar"><img src="images/avatar.jpg" alt="default avatar" /></a>
                          </div>
                          <div class="details regularcomment">
                            <p class="head"><span class="info"><a href="#"></a>  <a href="#"></a> </span><span class="rate"> <a class="karma negative">-14</a> <a href="#" class="ratelink up">&nbsp;</a> <a href="#" class="ratelink down">&nbsp;</a></span></p>

                            <!-- comment contents -->
                            <div class="text">
                	         <div id="commentbody">
                               <p></p>
                             </div>
                            </div>
                            <!-- /comment contents -->

                          </div>
                   	      <div class="act tip">
                	        <span class="button reply"><a href="#"><span><span>Reply</span></span></a></span>
                	        <span class="button quote"><a href="#"><span><span>Quote</span></span></a></span>
                	      </div>
                        </div>
                      </li>
                      <!-- /comment block -->

                    </ol>
                    <!-- /comments -->

                  </div>
                  <!-- /tab1 -->

                  <!-- tab2 -->
                  <div id="tab-2">
                   <p>2nd tab</p>
                  </div>
                  <!-- /tab2 -->

                  <!-- tab3 -->
                  <div id="tab-3">
                   <p>3rd tab</p>
                  </div>
                  <!-- /tab3 -->

               </div>
               <!-- /secondary tabs menu -->

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
              <ul id="sidelist">
                 <li>
                  <!-- search form -->
                  <div id="searchtab">
                    <div class="inside">
                      <form action="#" method="get" id="thisform-search">
                       <fieldset>
                        <input type="text" size="16" class="searchfield" id="searchsite" value="Search website..." onfocus="if(this.value == 'Search website...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search website...';}" />
                         <input type="submit" value="Go" class="searchbutton" />
                       </fieldset>
                      </form>
                    </div>
                  </div>
                  <!-- /search form -->
                 </li>
                 <li>
                  <!-- sidebar menu (categories) -->
                  <ul class="nav">
                 <?php
                            $sql=mysql_query("select * from tag order by tid");
while($row=mysql_fetch_array($sql))
{
$tagname=$row['tagname'];
$no=$row['nop'];
$n=$row['nou'];
$url="tag.php?tag=".$tagname;
?>
                  <li class="cat-item">
                      <a href=<?php echo $url;?>><span><?php echo $tagname;  echo " x (";echo $no; echo ")";?></span></a><a  class="rss tip" href="#"></a>
                    </li>
 <?php
 }
 ?>

                 <!-- login -->

                  </ul>
                 </li>
                 <!-- /login -->
              </ul>
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
       <div class="clearcontent"></div>
       <!-- /clear main & sidebar sections -->


       <!-- footer -->
       <div id="footer">
         <!-- please do not remove this. respect the authors :) -->

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


