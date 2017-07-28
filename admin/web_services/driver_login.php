<?php 
/*
 * Following code will login driver
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
        $password = mysqli_real_escape_string($db->connect(),$_POST['password']);

       // Check if mobile and password is valid
        $result=mysqli_query($db->connect(),"SELECT * FROM `tbl_driver` WHERE  `dr_mob`='$mobile' AND `password`='$password'");
        $driver_info=mysqli_fetch_array($result);

        if(mysqli_num_rows($result) > 0)
        {
                // success get driver id
                $response["success"] = 1;
                $response['driver_id']=$driver_info['dr_id'];
                $response["message"] = "User has valid mobile number and password";
         
                // echoing JSON response
                echo json_encode($response);
        }
        else
        {
            // required field is missing
            $response["success"] = 0;
            $response["message"] = "Wrong password";
     
            // echoing JSON response
            echo json_encode($response);
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


?>