<?php

	require_once("BrowserInfo.php");
	
	require_once("Common/Project.php");
	//require_once("Account.php");
	
	$x = explode("/", $_SERVER["SCRIPT_NAME"]);
	$page_title = ucfirst( str_replace(".php", "", $x[count($x)-1]) );
	
	/*if($page_title != "Index" && !isLoggedIn())
	{
		header("Location: index.php");
		exit(0);
	}
	else if($page_title == "Index" && isLoggedIn())
	{
		header("Location: home.php");
		exit(0);
	}*/
	
	/*header("Expires: ".gmdate("D, d M Y H:i:s",time()+7*86400)." GMT");
	header("Cache-Control: max-age=300, private");*/
	
	ob_start("ob_gzhandler");
?>