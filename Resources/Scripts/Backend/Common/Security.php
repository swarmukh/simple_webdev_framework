<?php

	function encrypt($data, $key)
	{
		$cipher = "MCRYPT_SERPENT_256";
		$mode = "MCRYPT_MODE_CBC";

		return (string) base64_encode(mcrypt_encrypt($cipher, substr(md5($key),0,mcrypt_get_key_size($cipher, $mode)), $data, $mode, substr(md5($key),0,mcrypt_get_block_size($cipher, $mode))));
;
	}
	
	function decrypt($data, $key)
	{
		$cipher = "MCRYPT_SERPENT_256";
		$mode = "MCRYPT_MODE_CBC";

		return (string) mcrypt_decrypt($cipher, substr(md5($key),0,mcrypt_get_key_size($cipher, $mode)), base64_decode($data), $mode, substr(md5($key),0,mcrypt_get_block_size($cipher, $mode)));
	}
	
	function createPassword($length)
	{
		if( is_numeric($length) && $length>0 && !is_null($length) )
		{
			$s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			
			return substr( str_shuffle(time().$s.date("Z")), 0, $length );
		}
	}

?>