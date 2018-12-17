<?php

	function retrievePageData($url, $parameters = null)
	{
		$query = null;
		
		if(!is_null($parameters))
		{
			if(!is_array($parameters))
				return;
			
			$query = http_build_query($parameters);
		}
		
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $url);
		
		if ($query)
		{
			curl_setopt($c, CURLOPT_POST, true);
			curl_setopt($c, CURLOPT_POSTFIELDS, $query);
		}
		
		curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($c, CURLOPT_HEADER, false);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		
		
		//$code = curl_getinfo($c, CURLINFO_HTTP_CODE);
		$data = curl_exec($c);
		
		curl_close($c);
		
		return $data;
	}

?>