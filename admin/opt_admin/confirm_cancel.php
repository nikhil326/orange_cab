<?php 
include('config.php');
include('function.php');
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg    =   base64_encode(serialize("Please Enter Your credentials."));
        header("location:index.php?msg=$msg");
        exit;
    }

	if(!empty($_GET['booking_id']))
	{
		$booking_id=$_GET['booking_id'];
		$result=mysqli_query($connect,"DELETE FROM `tbl_booking` WHERE `booking_id`='$booking_id'");
		if($result)
		{	
			
			$msg = base64_encode(serialize("Booking Has Been Suucessfully Deleted."));
			echo ("<script language='JavaScript'> window.location.href='cancel_booking.php?success_msg=$msg'; </script>");
		}
		else
		{
			 $msg = base64_encode(serialize("Sorry Something Went Wrong Please Try After Sometime."));
             echo ("<script language='JavaScript'> window.location.href='cancel_booking.php?err_msg=$msg'; </script>");
		}
	}
	else
	{
		header('location:cancel_booking.php');
		exit();
	}
?>