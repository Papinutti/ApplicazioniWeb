<?php
	session_start();

	// Check if session is active, if a user tries to access the website withut log in,
	// redirect to the log in
	if (!isset($_SESSION["AccountID"])) {
		// Redirect to LogIn
		header("Location: login/Login.php");
	}
	else{
		// Redirect to LogIn
		header("Location: about_us/AboutUs.php");
	}
?>
