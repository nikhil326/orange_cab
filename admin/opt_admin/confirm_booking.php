<?php 
	@session_start();
    include('config.php');
    include("function.php");
    $cust_id=$_SESSION['cust_id'];
    $timestamp = strtotime($_SESSION['ride_date']);
    $ride_date = date('d/m/Y', $timestamp);
    $otp= $_SESSION['otp'];   
    $ride_time=$_SESSION['ride_time'];
    $booking_date= date("d/m/Y");
    $ope_id=$_SESSION['user_id'];
    $source=$_SESSION['source'];
    $des=$_SESSION['des'];
    $otp=$_SESSION['otp'];
    
    if(isset($otp))
    {
        if(isset($_GET['dr_id']) && isset($_GET['phone']) && isset($_GET['v_id']) && isset($_GET['cat_id']) && isset($cust_id) && isset($booking_date) && isset($ride_date) && isset($ride_time) && isset($ope_id) && isset($source) && isset($des))
        {
                    $mobile=$_GET['phone'];
                    $v_id=$_GET['v_id'];
                    $cat_id=$_GET['cat_id'];

                    
                    $msg  =   "Verification code is send to driver on number ".$mobile;
                    
                    $sms = send_sms($mobile," ".$otp." is your verification code for your next ride.");
                     
                    $booking=mysqli_query($connect,"INSERT INTO `tbl_booking` (`booking_id`, `cust_id`, `date`, `start_date`, `time`, `vehicle_id`, `cat_id`, `ope_id`, `source`, `destination`, `ride_status`) VALUES (NULL, '$cust_id', '$booking_date', '$ride_date', '$ride_time', '$v_id', '$cat_id', '$ope_id', '$source', '$des', 'Waiting')");
                    if($booking)
                    {
                        unset($_SESSION['cust_id']);
                        unset($_SESSION['ride_date']);
                        unset($_SESSION['otp']);   
                        unset($_SESSION['ride_time']);
                       
                        unset($_SESSION['source']);
                        unset($_SESSION['des']);
                        unset($_SESSION['otp']);
                        
                        echo ("<script language='JavaScript'> window.location.href='register.php?success_msg=$msg'; </script>");
                    }
                    else
                    {
                        $msg = base64_encode(serialize("Sorry Something Went Wrong Please Try After Sometime."));
                        echo ("<script language='JavaScript'> window.location.href='register.php?err_msg=$msg'; </script>");
                    }
        }
        else
        {
          
             $msg = base64_encode(serialize("Sorry Something Went Wrong Please Try After Sometime."));
            echo ("<script language='JavaScript'> window.location.href='register.php?err_msg=$msg'; </script>");
        }
    }
    else
    {   
        
        $msg = base64_encode(serialize("Sorry Something Went Wrong Please Try After Sometime."));
         echo ("<script language='JavaScript'> window.location.href='register.php?err_msg=$msg'; </script>");
    }



?>

