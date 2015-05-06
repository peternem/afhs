<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include 'include/mainTitle_Copy.php'; ?></title>
<link href="stylesheets/afhServices.css" rel="stylesheet" type="text/css" />
<script src="JQuery/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="Scripts/AFHS_Sitewide_JQuery.js" type="text/javascript"></script>

<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLtHdr #sidebar1 { width: 230px; }
</style>
<![endif]-->
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLtHdr #sidebar1 { padding-top: 0px; }
.twoColFixLtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->


</head>
<body class="twoColFixLtHdr">
<div id="container">
  <div class="LOGOHDR-bl">
    <div class="LOGOHDR-br">
      <div class="LOGOHDR-tl">
        <div class="LOGOHDR-tr">
          <div id="header"><a href="index.php" target="_self"><img src="images/AFHS_Logo.jpg" alt="" width="402" height="55" class="LogoImage" /></a>
            <!-- <h1>Header</h1>-->
            <!-- end #header -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="header2"><?php include 'include/header2_Image.php'; ?>
    <!-- end #header -->
  </div>
  <div class="navmenu-bl">
    <div class="navmenu-br">
      <div class="navmenu-tl">
        <div class="navmenu-tr">
          <div id="sidebar1">
            <!-- <h3>Sidebar1 Content</h3>-->
		<?php include 'include/sideBar_NavMenu.php'; ?>
            <!-- end #sidebar1 -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bl">
    <div class="br">
      <div class="tl">
        <div class="tr">
          <div id="mainContent">
          <?php include 'include/mainContent_Copy.php'; ?>
            <!-- end #mainContent -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <br class="clearfloat" />
  <div class="footer-bl">
    <div class="footer-br">
      <div class="footer-tl">
        <div class="footer-tr">
          <div id="footer">
            <div class="footer-content">AFH Services: Lee Dolson, RN, BSN<br />
              Phone: 425-223-5070 or 425-802-927<br />
              email: <a href="mailto:lee@adultfamilyhomeservices.com"> lee@adultfamilyhomeservices.com</a><br />
              Website Design: <a href="http://www.mattpeternell.com/">MattPeternell.com</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end #footer -->
</div>
<!-- end #container -->
</body>
</html>
