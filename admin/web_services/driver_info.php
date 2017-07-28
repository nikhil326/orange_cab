<?php 
/*
 * Following code will give list of all the drivers
 */
 
 
	// array for JSON response
	$response = array();

	// include db connect class
	require_once ('db_connect.php');
	         
	// connecting to db
	$db = new DB_CONNECT();

	// get all driver info from tbl_driver table
	$result = mysqli_query($db->connect(),"SELECT tbl_driver.*, vehicle.vehicle_no
																FROM tbl_driver
																INNER JOIN vehicle ON tbl_driver.dr_id=vehicle.dr_id") or die(mysqli_error());

	if(mysqli_num_rows($result) >0)
	{
		
		// looping through all results
	    

		$response["success"] = 1;
	    $response["drivers"] = array();
	    while ($row = mysqli_fetch_array($result)) 
	    {
	    	// temp user array
	        $drivers = array();
	        $drivers["id"] = $row["dr_id"];
	        $drivers["name"] = $row["dr_name"];
	        $drivers["mobile"] = $row["dr_mob"];
	        $drivers["photo_path"] = $row["photo_id"];
	        $drivers["start_trip"] = $row["start_trip"];
	        $drivers["end_trip"] = $row["end_trip"];
	        $drivers["vehicle_no"] = $row["vehicle_no"];

	 
	        // push single driver into final response array
	        array_push($response["drivers"], $drivers);

	    }

    	// success
   
	    // echoing JSON response
	    echo json_encode($response);
	}
	else
	{
		 // no driver found
    	$response["success"] = 0;
    	$response["message"] = "Driver information not found";
 
    	// echo no users JSON
    	echo json_encode($response);
	}
?>