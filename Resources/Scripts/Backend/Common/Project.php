<?php

	error_reporting(E_ALL);

	define( "PROJECT_NAME" , "XYZ" );
	define( "PROJECT_VERSION" , "1.0" );
	
	define( "PROJECT_DESCRIPTION" , "Write definition." );
	define( "PROJECT_KEYWORDS" , "x, y, z" );
	define( "PROJECT_CATCHPHRASE" , "Let's do this!" );
	
	define( "PROJECT_AUTHOR" , "MY_NAME" );

	define( "PROJECT_CONTACT_EMAIL", "MY_EMAIL" );
	define( "PROJECT_CONTACT_PHONE", "MY_NUMBER" );
	
	define( "PROJECT_DEVELOPER" , "MY_NAME" );
	define( "PROJECT_DEVELOPER_CONTACT", "MY_SNS_CONTACT" );
	
	define( "SITE_URL", (($_SERVER["SERVER_PORT"]==80)?"http":"https")."://www.".$_SERVER["SERVER_NAME"]);
	
	define( "PATH_INCLUDE", "Resources/Includes" );
	define( "PATH_DOC", "Resources/Documents" );
	
	define( "PATH", "Resources/Scripts/Backend" );
	
	define( "PATH_STD", PATH."/Common" );
	define( "PATH_LIBRARY", PATH."/Library" );

?>