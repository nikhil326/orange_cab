<?php 
/*
 * Following code will Register Users
 */
 
 
// array for JSON response
$response = array();



// check for required fields
    if(isset($_POST['mobile']))
    {
        // include db connect class
        require_once ('db_connect.php');
         
        // connecting to db
        $db = new DB_CONNECT();

       $mobile = mysqli_real_escape_string($db->connect(),$_POST['mobile']);

       // Check if mobile number is already present
        $result=mysqli_query($db->connect(),"SELECT * FROM `tbl_customer` WHERE  `mob`='$mobile'");

        if(mysqli_num_rows($result) > 0)
        {
            // failed to insert row
                $response["success"] = 1;
                $response["message"] = "User is already register use login web service to match password";
         
                // echoing JSON response
                echo json_encode($response);
        }
        else
        {
            $date=date("Y-m-d");
//===================Function to Send SMS =======================================//

            if(!function_exists('send_sms'))
            {   

                function send_sms($mobile,$message)
                {
                     // include db connect class
                        require_once ('db_connect.php');
                         
                        // connecting to db
                        $db = new DB_CONNECT();

                        $numbers = urlencode($mobile);
                        $username=urlencode('skypeak');
                        $pass=urlencode('Zaqwsx123');
                        $route=urlencode('trans1');
                        $senderid=urlencode('WELCOM');
                        $message=urlencode($message);
                        $ch=curl_init();
                        mysqli_query($db->connect(),"INSERT INTO rd_sms (mobile, message) VALUES ('$mobile', '$message')"); 
                        
                        /*curl_setopt($ch, CURLOPT_URL,"http://144.76.249.154:/sendSMS?username=gharpekirana&message=".$message."&sendername=GPKTRD&smstype=TRANS&numbers=".$numbers."&apikey=469ff749-9a65-48aa-bf28-257f049436fa");*/
                        curl_setopt($ch, CURLOPT_URL,"http://sms1.businesslead.co.in/sendSMS?username=".$username."&message=".$message."&sendername=SKPEAK&smstype=TRANS&numbers=".$numbers."&apikey=3958deac-7db2-4d35-a0e4-2a444701a3ac");
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_exec($ch);
                        curl_close($ch); 
     
                }
            }
//================================================================================================//

            //get verification codes
            if(!function_exists('getCountry'))
            { 
                function get_verification_code($len) 
                {
                   // include('config.php');
                    $verificaitionCode = substr(number_format(time() * rand(), 0, '', ''), 0, $len);
                    return $verificaitionCode;
                }
            }

            // Verification Code
            $verificationCode   =   get_verification_code(6);
            // mysql inserting a new row
            $result = mysqli_query($db->connect(),"INSERT INTO `tbl_customer`(cust_id, mob, otp,status,added_date) VALUES('NULL','$mobile','$verificationCode','Inactive','$date')");

            //send OTP via SMS
            $sms = send_sms($mobile," ".$verificationCode." is your verification code.Please insert it and open your account.");

           // check if row inserted or not
            if ($result) {
                // successfully inserted into database
                $response["success"] = 1;
                $response["message"] = "Success ! Verification Code is send to your mobile no $mobile";
         
                // echoing JSON response
                echo json_encode($response);
            } else {
                // failed to insert row
                $response["success"] = 0;
                $response["message"] = "Error in registering...Please try again later!";
         
                // echoing JSON response
                echo json_encode($response);
            }
        }
           
    }
    else
    {
        // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field mobile number is missing";
     
        // echoing JSON response
        echo json_encode($response);
    }


?>