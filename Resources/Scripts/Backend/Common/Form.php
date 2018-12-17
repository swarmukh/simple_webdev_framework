<?php

	define( "USER_NAME_LENGTH", 50);
	define( "USER_PHONE_LENGTH", 15);
	define( "USER_EMAIL_LENGTH", 30);
	//define( "USER_PASSWORD_LENGTH", 16);
	define( "USER_ADDRESS_LENGTH", 100);
	
	define( "USER_NAME_PATTERN", "[A-Za-z ]*");
	define( "USER_PHONE_PATTERN", "[0-9]{7,15}");
	//define( "USER_EMAIL_PATTERN", "^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.(\w{2}|(co|in|com|net|org|edu|int|mil|gov|coop|info|pro))$");
	define( "USER_EMAIL_PATTERN", "^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.\w+([\.-]?\w+)*$");
	//define( "USER_PASSWORD_PATTERN", "");
	define( "USER_ADDRESS_PATTERN", "[A-Za-z0-9'][A-Za-z0-9,\.\-' ]*");
	
?>