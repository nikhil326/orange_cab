<?php
//error_reporting(0);

	//database configuration

	$host       = "localhost";
	$user       = "root";
	$pass       = "";
	$database   = "caps";
	
	$connect    = new mysqli($host, $user, $pass, $database) or die("Error : ".mysql_error());		
	if (!defined('COMPANY_NAME'))define("COMPANY_NAME", "Orange Cabs");

	
?>
