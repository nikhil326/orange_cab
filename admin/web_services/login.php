<?php 
/*
 * Following code will match Register Users password
 */
 
 
// array for JSON response
$response = array();

// check for required fields

if(isset($_POST['mobile']) && isset($_POST['password']))
{
    // include db connect class
        require_once ('db_connect.php');
         
     // connecting to db
    $db = new DB_CONNECT();
    
    $mobile = mysqli_real_escape_string($db->connect(),$_POST['mobile']);
    $password=mysqli_real_escape_string($db->connect(),$_POST['password']);

                // Check if password is already exist for mobile number.
                $check_pass=mysqli_query($db->connect(),"SELECT * FROM `tbl_customer` WHERE  `mob`='$mobile' AND `password`='$password'");
                $user_password=mysqli_fetch_array($check_pass);
                if(mysqli_num_rows($check_pass) > 0)
                {

                   // User is already activated and haveing password
                    $response["success"] = 1;
                    $response["user_id"] = $user_password['cust_id'];
                    $response["message"] = "User is  having password so login user";

                    // echoing JSON response
                    echo json_encode($response);
                }
                else
                {
                    
                    // Check if OTP same as password entered.
                $check_otp=mysqli_query($db->connect(),"SELECT * FROM `tbl_customer` WHERE  `mob`='$mobile' AND `otp`='$password'");
                    $user_otp=mysqli_fetch_array($check_otp);
                    
                     if(mysqli_num_rows($check_otp) > 0)
                     {
                       
                            // User is already activated and haveing password
                            $response["success"] = 1;
                            $response["user_id"] = $user_otp['cust_id'];
                            $response["message"] = "Users password match with otp";

                            // echoing JSON response
                            echo json_encode($response);
                       
                     }
                     else
                     {
                        // Wrong Password
                        $response["success"] = 0;
                        $response["message"] = "Wrong Password";
     
                        // echoing JSON response
                        echo json_encode($response);
                     }
                }
}
else
{
     // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field mobile number or password is missing";
     
        // echoing JSON response
        echo json_encode($response);
}