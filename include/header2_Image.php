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
	//// LOAD INDEX iMAGE
	case ($filename=='index.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
			break;
	//// LOAD COLLECTION Image
	case ($filename=='ourservices.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
	break;	
	//// LOAD ESTATE COLLECTION Image
	case ($filename=='aboutus.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
	break;
	//// LOAD ACCENT COLLECTION Image
	case($filename=='contact-afhs.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
	break;
	//// LOAD FRESCO COLLECTION Image
	case($filename=='fresco_collection.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
	break;
	//// LOAD FRESCO COLLECTION Image
	case($filename=='vision_collection.php'):
		echo "<img src='images/Untitled-1.jpg' alt='' width='850' height='190' />";
	break;
	default:
	echo "<b>Header2_Image.php File Error!<b>";
}

?>

