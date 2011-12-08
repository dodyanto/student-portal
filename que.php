  <?php
     @session_start();
       if(  $_SESSION['flag']==1)
    echo'<script>
window.location="login.php";</script>';
     ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head profile="http://gmpg.org/xfn/11">
    <title>QA PORTAL</title>

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
<form action="quest.php" method="POST">
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
                  <li><a href="index1.php"><span><span>Recent questions</span></span></a></li>

                  <li><a href="que.php" class="active"><span><span>Ask a Question</span></span></a></li>
                </ul>
              </div>
              <!-- /top tabs -->

            </div><!-- /header -->

            <!-- mid content -->
            <div id="mid-content">



 <div id="mid-content">


             <div class="form-item ask-title">

            <table width="553" class="ask-title-table">

                <tr>

                    <td class="ask-title-cell-key">

                        <label for="title">Title</label>

                    </td>

                    <td class="ask-title-cell-value">

                        <input id="post_title" name="post_title"  size="80"  type="text" maxlength="300" tabindex="100" class="ask-title-field" value="">
<br />
                        <span class="edit-field-overlay">what&#39;s your programming question? be specific.</span>

                    </td>

                </tr>

            </table>

            <div id="question-suggestions">

            </div>

        </div>

                   <div class="wmd-container">

        <div id="wmd-button-bar" class="wmd-button-bar"></div>

        <textarea id="wmd-input" class="wmd-input" name="post_body" cols="92" rows="15" tabindex="101"></textarea>

    </div>
    <br />

    <div class="form-item">
    <label>Tags</label>
    
      <?php
      include('config.php');
$query = "SELECT tagname FROM tag ORDER BY tagname";
$result = mysql_query($query);
?>
<select name="tags" id="tags">

<?php
while($array = mysql_fetch_assoc($result)){
?>
<option value="<?php echo $array['tagname'];?>"><?php echo $array['tagname'];?></option>
<?php
}
?>
</select>

<span class="edit-field-overlay"><br />at least one tag such as (objective-c c++ ruby), max 5 tags</span>

  </div>
  <br />  <div class="form-submit cbt"><input id="submit-button" type="submit" value="Post Your Question" tabindex="120"></div>



            </div>
            <!-- /mid content -->
          </div>





          <!-- /mid -->



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
          <a href="#">Fusion</a> CSS template designed by <a href="#">digitalnature.ro</a>  | Validate: <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a>
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
</form>


 </body>
</html>


