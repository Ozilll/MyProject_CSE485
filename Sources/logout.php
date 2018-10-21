<?php
	include("functions/init.php");

	session_destroy();

	if (isset($_COOKIE['email_student'])) {
		unset($_COOKIE['email_student']);
		setcookie('email_student', '', time()-86400);
	}
	redirect("index.php"); 
 ?>