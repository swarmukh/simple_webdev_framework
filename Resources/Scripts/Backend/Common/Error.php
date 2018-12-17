<?php

	function errorMsg($msg)
	{
		return "Error: ".$msg."!";
	}
	
	function goToOrigin()
	{
		if($_SERVER["HTTP_REFERER"] == NULL)
			header("Location: /");
		else
			header("Location: ".$_SERVER["HTTP_REFERER"]);
		exit(0);
	}

?>