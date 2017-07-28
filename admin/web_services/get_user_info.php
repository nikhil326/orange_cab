<?php 
/*
 * Following code will Get Register Users info
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
        
                // Check user info for mobile number.
                $check_info=mysqli_query($db->connect(),"SELECT * FROM `tbl_customer` WHERE  `mob`='$mobile'");
                $user_info=mysqli_fetch_array($check_info);
                if(mysqli_num_rows($check_info) > 0)
                {

                   // User is already activated and haveing password
                    $response["success"] = 1;
                    $response["user_id"] = $user_info['cust_id'];
                    $response["user_name"] = $user_info['cust_name'];
                    $response["user_email"] = $user_info['email_id'];
                    $response["message"] = "Above is user information";

                    // echoing JSON response
                    echo json_encode($response);
                }
                else
                {
                    // required field is missing
                    $response["success"] = 0;
                    $response["message"] = "Unable to find user information";
     
                    // echoing JSON response
                    echo json_encode($response);   
                   
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