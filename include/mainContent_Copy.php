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
		echo "<h1>Adult Family Home Services</h1>";
		echo "<img src='images/lady-flowers.jpg' alt='' class='MainContentImg'/>";
		echo "<p>Adult Family Home Services assists you through the difficult process of placing yourself or your loved one in the appropriate Adult Family Home. A skilled Registered Nurse will conduct a medical assessment of the client as required by the Washington Aging and Adult Services Administration. This includes gathering medical and personal information about the client&acute;s likes and dislikes and past history. This fee will be refunded upon a successful placement by AFH Services.</p>";
		echo "<p>Next, an AFHS Placement Specialist will work with the client and family to select the right home based on the nurse&acute;s assessment and client needs.</p>";
		echo "<p>The Adult Family Home then does preliminary care planning based on the nurse&acute;s assessment.</p>";
		echo "<p>If needed, the nurse then does a &quot;Delegation&quot; which consists of training the Adult Family Home&acute;s caregivers in skills the client may require such as medication administration, catheter care, feeding tube care, etc.</p>";
	break;
	//// LOAD COLLECTION copy
	case ($filename=='ourservices.php'):
		echo "<h1>Our Services - AFHS Placement Services Are Free To Clients.</h1>";
		echo "<p>Adult Family Home Services assists you through the difficult process of placing yourself 
		    or your loved one in the appropriate Adult Family Home.  A skilled Registered Nurse will conduct a 
		    medical assessment of the client as required by the Washington Aging and Adult Services 
		    Administration.  This includes gathering  medical and  personal information about the clients 
		    likes and dislikes and past history.</p>";
	    	echo "<img src='images/our-services-img.jpg' class='MainContentImg'/>";
	    	echo "<p>Next, an AFHS Placement Specialist will work with the client and family to select the right home based on the nurse's assessment and client needs.</p>";
		echo "<p>The Adult Family Home then does preliminary care planning based on the nurses's assessment</p>";
		echo "<p>If needed, the nurse then does a &quot;Delegation&quot; which consists of training the Adult Family Home's caregivers in skills the client may require such as medication administration, catheter care, feeding tube care, etc.</p>";
	break;	
	//// LOAD About Us copy
	case ($filename=='aboutus.php'):
		echo "<h1>About Adult Family Home Services (AFHS)</h1>";
		echo "<p>Adult Family Home Services (AFHS) is committed to finding you or your loved one an appropriate place to call home. We treat our clients with respect and dignity and adhere to the highest professional standards.</p>";
		echo "<img src='images/lee-dolson-img.jpg' class='MainContentImg'/>";
		echo "<h2>Experience:</h2>";
		echo "<p>Lee Dolson, RN, BSN</p>";
            	echo "<p>Owner and operator of Adult Family Home Service (AFHS), is a lifelong resident of Washington 
		and a graduate of Seattle University School of Nursing. Her experience includes cardiac ICU care at 
		Providence Hospital, Home Healthcare for Swedish Hospital and Group Health Co-op. She has been an owner 
		of AFHS for 8 yrs and understands the need of both AFHS clients and owners.</p>";
	break;
	//// LOAD ACCENT COLLECTION copy
	case($filename=='contact-afhs.php'):
		echo "<h1>Contact Adult Family Home Services (AFHS)</h1>";
		echo "<p>If you want to learn more about Adult Family Home Services (AFHS), or need to have questions answered, please contact us via phone or email.</p>";
          	echo "<p>Phone: 425-223-5070 or 425-802-9279</p>";
         	echo "<p>email:<a href='mailto:lee@adultfamilyhomeservices.com'>lee@adultfamilyhomeservices.com</a></p>"; 
	break;
	default:
	echo "<b>mainContent_Copy.php File Error!<b>";
}

?>

