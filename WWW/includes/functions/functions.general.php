<?php
function clean($value){
		if (is_array($value)){
			foreach($value as $k => $v){
				$value[$k] = clean($v);
			}
		}else{
			if(get_magic_quotes_gpc() == 1){
				$value = stripslashes($value);
			}
		$value = trim(htmlspecialchars($value, ENT_QUOTES, "utf-8")); //convert input into friendly characters to stop XSS
		$value = mysql_real_escape_string($value);
		}
   return $value;
}

function printr($array,$str=0){
	if($str != 0){
		return '<pre>'.print_r($array,1).'</pre>';
	}else {
		echo'<pre>'.print_r($array,1).'</pre>';
		return ;
	}
}

function _ulrencode($string){
	return $string;
}
function ismobile() {
	static $is_mobile;

	if ( isset($is_mobile) )
		return $is_mobile;

	if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
		$is_mobile = false;
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
			$is_mobile = true;
	} else {
		$is_mobile = false;
	}

	return $is_mobile;
}