<?php

	define( "DB_SERVERNAME" , "localhost" );
	define( "DB_USERNAME" , "root" );
	define( "DB_PASSWORD" , "" );
	define( "DB_DBNAME" , "db_name" );

	function executeQuery($query)
	{
		$conn = @new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DBNAME);
		
		if($conn -> connect_error)
			die(errorMsg("Connection failed"));
		
		$result = $conn->query($query);
		
		$conn -> close();
		
		return $result;
	}
	
?>