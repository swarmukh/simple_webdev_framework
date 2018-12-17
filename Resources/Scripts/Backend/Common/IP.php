<?php

	function getIP()
	{
		$client_ip = "";
		$proxy_ip = "";
		
		/* First, look for an IP address from the server. */

		if (!empty($_SERVER["REMOTE_ADDR"]))
			$client_ip = $_SERVER["REMOTE_ADDR"];
		
		/* Look for proxy servers. */

		if (!empty($_SERVER["HTTP_CLIENT_IP"]))
			$proxy_ip = $_SERVER["HTTP_CLIENT_IP"];
		else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
			$proxy_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		
		/* Look for a real IP address underneath proxies. */
		
		if ($proxy_ip)
		{
			if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $proxy_ip, $ip_list))
			{
				$private_ip = array('/^0\./', '/^127\.0\.0\.1/', '/^192\.168\..*/',	'/^172\.16\..*/', '/^10.\.*/', '/^224.\.*/', '/^240.\.*/');
				$client_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
			}
		}
		
		return $client_ip;
	}

?>