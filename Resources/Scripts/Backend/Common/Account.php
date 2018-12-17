<?php

	session_start();
	
	function isLoggedIn()
	{
		return ( isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true );
	}
	
	function login()
	{
		$_SESSION["logged_in"] = true;
		$_SESSION["profile"] = "employee";
	}
	
	function logout()
	{
		session_destroy();		// Destroy session
		session_unset();		// Delete all variables in $_SESSION
		
		setcookie( session_name(), '', time()-1 );
		
		header("Location: /");
		exit(0);
	}

?>