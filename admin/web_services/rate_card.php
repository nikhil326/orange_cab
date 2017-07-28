<?php 
/*
 * Following code will give rate card
 */
 
 
	// array for JSON response
	$response = array();

	// include db connect class
	require_once ('db_connect.php');
	         
	// connecting to db
	$db = new DB_CONNECT();

	// get all ratecard info from tbl_ratecard table
	$result = mysqli_query($db->connect(),"SELECT tbl_ratecard.*, tbl_category.cat_name
											FROM tbl_ratecard
										INNER JOIN tbl_category ON tbl_ratecard.cat_id=tbl_category.cat_id ") or die(mysqli_error());

	if(mysqli_num_rows($result) >0)
	{
		
		// looping through all results
	    

		$response["success"] = 1;
	    $response["ratecard"] = array();
	    while ($row = mysqli_fetch_array($result)) 
	    {
	    	// temp user array
	        $ratecard = array();
	        $ratecard["id"] = $row["ratecard_id"];
	        $ratecard["name"] = $row["cat_name"];
	        $ratecard["base_fare"] = $row["base_fare"];
	        $ratecard["0_to_10_km"] = $row["0_to_10_km"];
	        $ratecard["after_10_km"] = $row["after_10_km"];
	        $ratecard["time_charges"] = $row["time_charges"];
	        $ratecard["minimum_fare"] = $row["minimum_fare"];
	        $ratecard["peak_time_charges"] = $row["peak_time_charges"];
	        $ratecard["service_tax"] = $row["minimum_fare"];

	 
	        // push single ratecard into final response array
	        array_push($response["ratecard"], $ratecard);

	    }

    	// success
   
	    // echoing JSON response
	    echo json_encode($response);
	    
	}
	else
	{
		 // no ratecard found
    	$response["success"] = 0;
    	$response["message"] = "Rate Card not found";
 
    	// echo no users JSON
    	echo json_encode($response);
	}
?>