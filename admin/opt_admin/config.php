<?php
 //error_reporting(0);
//function to connect database

//Connect to the DB 
/* $servername = "localhost";
$username = "skypeakm_grocery";
$password = "SkyPeak_Grocery";
$dbname = "skypeakm_grocery";
 */
 
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "caps";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
//$connect 	= 	mysql_select_db('e-shop');
if (!defined('COMPANY_NAME'))define("COMPANY_NAME", "Orange Cabs");
 
?>