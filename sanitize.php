<?php
	function remove_slash_and_space($data){
		$data = implode("",explode("\\",$data));
		$data = stripslashes($data);
		$data = trim($data);
		$data = filter_var($data, FILTER_SANITIZE_STRING , FILTER_SANITIZE_SPECIAL_CHARS);
		return $data;
	}
	function sanitize_str($var){
		$var = filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW);
		return $var;
	}
	function sanitize_int($int){
		$int = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
		return $int;
	}
	function sanitize_email($em){
		$em = filter_var($em, FILTER_SANITIZE_EMAIL);
		return $em;
	}
?>