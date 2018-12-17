<?php

	$errMsg = "";
	$f = 0;

	@require_once("Library/GetBrowser.php");
	
	$ua = getBrowser();
	
	$bstring = $ua["name"]." (version ".$ua["version"].")";
	
	function prepareString($upgrade, $link = "")
	{
		global $bstring, $f;
		$f = 1;
		return "You are using $bstring".(($upgrade==false)?" for which support has been deprecated.":". If you want to continue with it, at least <a href=\"http://www.$link\">upgrade</a>.");
	}//support for unknown browser
	
	if( $ua["name"] == "Internet Explorer" || $ua["name"] == "Netscape" || $ua["name"] == "Unknown" )
		$errMsg = prepareString(false);
	else if( $ua["name"] == "Apple Safari" && intval(substr($ua["version"],0,strpos($ua["version"],".")))<7 )
		$errMsg = prepareString(true, "support.apple.com/downloads/#safari");
	else if( $ua["name"] == "Google Chrome" && intval(substr($ua["version"],0,strpos($ua["version"],".")))<=50 )
		$errMsg = prepareString(true, "google.com/chrome/browser");
	else if( $ua["name"] == "Mozilla Firefox" && intval(substr($ua["version"],0,strpos($ua["version"],".")))<=50 )
		$errMsg = prepareString(true, "mozilla.org/en-US/firefox/new/");
	else if( $ua["name"] == "Opera" && intval(substr($ua["version"],0,strpos($ua["version"],".")))<15 )
		$errMsg = prepareString(true, "opera.com");
	
	if( $f == 1 )
	{
		session_start();
		
		$_SESSION["msg"]=base64_encode(convert_uuencode($errMsg));
		
		$errMsg = "";
		$f = 0;
		
		header("Location: browsersupport.php");
		exit(0);
	}
?>