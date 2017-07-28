<?php
include('config.php');
session_start();
//error_reporting(E_ALL);

if(isset($_SESSION['customer_id'])) {
	echo $_SESSION['mobile'];
	mysqli_query($connect,"UPDATE tbl_customer SET status='Inactive' WHERE mob='".$_SESSION['mobile']."' AND cust_id='".$_SESSION['customer_id']."'");
	session_destroy();
	
	header("Location: index.php");
} 
?>