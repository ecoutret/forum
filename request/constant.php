<?php 
	define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']).'/');
	$page = basename($_SERVER['PHP_SELF']);
	session_start();
?>