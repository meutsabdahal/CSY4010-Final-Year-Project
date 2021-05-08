<?php
	// staring session, unsetting session and destroying the session and directing to admin's login page
	session_start();
	session_unset();
	session_destroy();
	header("Location:adminLogIn");
?>