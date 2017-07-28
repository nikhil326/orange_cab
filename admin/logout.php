<?php 
include('function.php');
include('cconfig.php');

mysqli_query($connect,"UPDATE user SET online_status='Offline',login_ip='' WHERE id=".$_SESSION['UserId']);

session_destroy();
header('Location:index.php');
exit;
?>