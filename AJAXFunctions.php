<?php 

// this is the file for all the AJAX Requests from the contact us page.

//these are for the PHP Helper files
include ('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {
	ContactUs($_GET["contactName"], $_GET["contactEmail"], $_GET["contactTel"], $_GET["contactMsg"]);
}

// this is the function for contact us insertion into the database and sending mails.
function ContactUs($name, $email, $tel, $message) {
	$resp = "-1";
	$date = date("Y-m-d H:i:s");
	$adminMail = "-1";
	$userMail = "-1";
	try {
		$resp = ContactUsQuery($name, $email, $tel, $message, $date);
		$adminMail = ContactUsAdminMail("info@mentored-research.com", $name, $email, $tel, $message, $date);
		$userMail = ContactUsUserMail($email, $name);
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp . " ~ " . $adminMail . " ~ " . $userMail;
	}
}

?>