<?php 
/*
 * Following code will give list of vehicle
 */
 
 
	// array for JSON response
	$response = array();

	// include db connect class
	require_once ('db_connect.php');
	         
	// connecting to db
	$db = new DB_CONNECT();

	// get all vehicle info from vehicle table
	$result = mysqli_query($db->connect(),"SELECT vehicle.*, tbl_category.cat_name,tbl_driver.dr_name 
										   FROM vehicle INNER JOIN tbl_category ON vehicle.vehicle_cat_id = tbl_category.cat_id 
										   INNER JOIN tbl_driver ON vehicle.dr_id = tbl_driver.dr_id 
										   GROUP BY vehicle_no") or die(mysqli_error());

	if(mysqli_num_rows($result) >0)
	{
		
		// looping through all results
	    

		$response["success"] = 1;
	    $response["vehicle"] = array();
	    while ($row = mysqli_fetch_array($result)) 
	    {
	    	// temp user array
	        $vehicle = array();
	        $vehicle["vehicle_name"] = $row["vehicle_name"];
	        $vehicle["vehicle_model"] = $row["vehicle_model"];
	        $vehicle["cat_name"] = $row["cat_name"];
	        $vehicle["vehicle_no"] = $row["vehicle_no"];
	        $vehicle["dr_name"] = $row["dr_name"];
	       
	 
	        // push single ratecard into final response array
	        array_push($response["vehicle"], $vehicle);

	    }

    	// success
   
	    // echoing JSON response
	    echo json_encode($response);
	    
	}
	else
	{
		 // no vehicle found
    	$response["success"] = 0;
    	$response["message"] = "vehicles not found";
 
    	// echo no users JSON
    	echo json_encode($response);
	}
?>