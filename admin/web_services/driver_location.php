<?php 
/*
 * Following code will update the drivers location dynamically
 */
 
 
	// array for JSON response
	$response = array();

	

	if(isset($_POST['driver_id']) && isset($_POST['start_trip']) && isset($_POST['end_trip']))
	{
		// include db connect class
		require_once ('db_connect.php');
	         
		// connecting to db
		$db = new DB_CONNECT();

		$driver_id = mysqli_real_escape_string($db->connect(),$_POST['driver_id']);
		$start_trip = mysqli_real_escape_string($db->connect(),$_POST['start_trip']);
		$end_trip = mysqli_real_escape_string($db->connect(),$_POST['end_trip']);

		

		// mysql update row with matched driver_id
    	$result = mysqli_query($db->connect(),"UPDATE tbl_driver SET start_trip = '$start_trip', end_trip = '$end_trip' WHERE dr_id = $driver_id");

    	if($result)
        {
             // successfully updated
             $response["success"] = 1;
             $response["message"] = "Driver location has been updated";

            // echoing JSON response
            echo json_encode($response);
        }
        else
        {
            // Wrong Password
            $response["success"] = 0;
            $response["message"] = "unable to update location";
     
            // echoing JSON response
 			echo json_encode($response);
        }
	}
	else
	{
		// required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field (driver id/driver start trip location/driver end trip location) is missing";
     
        // echoing JSON response
        echo json_encode($response);
	}
?>