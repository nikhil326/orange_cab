<?php 
/*
 * Following code will update Users info
 */
 
 
// array for JSON response
$response = array();

// check for required fields

if(isset($_POST['mobile']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
    // include db connect class
        require_once ('db_connect.php');
         
     // connecting to db
    $db = new DB_CONNECT();
    
    $mobile = mysqli_real_escape_string($db->connect(),$_POST['mobile']);
    $name = mysqli_real_escape_string($db->connect(),$_POST['name']);
    $email = mysqli_real_escape_string($db->connect(),$_POST['email']);
    $password = md5(mysqli_real_escape_string($db->connect(),$_POST['password']));
 
        
                // update user info for mobile number.
                $update_info=mysqli_query($db->connect(),"UPDATE tbl_customer SET cust_name='$name', email_id='$email', password='$password' WHERE mob='$mobile'");
                
                if($update_info)
                {

                   // User is already activated and haveing password
                    $response["success"] = 1;
                    $response["user_id"] = $update_info['cust_id'];
                    $response["message"] = "Information Updated Succssfully";

                    // echoing JSON response
                    echo json_encode($response);
                }
                else
                {
                    // required field is missing
                    $response["success"] = 0;
                    $response["message"] = "Failed to update Information";
     
                    // echoing JSON response
                    echo json_encode($response);   
                   
                }
}
else
{
        // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field mobile number,name,email,password is missing";
     
        // echoing JSON response
        echo json_encode($response);
}