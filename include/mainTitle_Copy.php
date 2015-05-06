<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='index.php'):
		echo "AFHS - Welcome to Adult Family Home Services. We Specialize in Adult Family Home Placement.";
	break;
	//// LOAD COLLECTION copy
	case ($filename=='ourservices.php'):
		echo "AFHS - Our Services - AFHS Placement Services Are Free To Clients.";
	break;	
	//// LOAD About Us copy
	case ($filename=='aboutus.php'):
		echo "AFHS - Our Services - AFHS Placement Services Are Free To Clients.";
	break;
	//// LOAD ACCENT COLLECTION copy
	case($filename=='contact-afhs.php'):
		echo "AFHS - Contact Us -  Contact Adult Family Home Services (AFHS)";
	break;

	default:
	echo "<b>mainTitle_Copy.php File Error!<b>";
}

?>

