<?php 
/*
 * Following code will give list of all the cab categories
 */
 
 
	// array for JSON response
	$response = array();

	// include db connect class
	require_once ('db_connect.php');
	         
	// connecting to db
	$db = new DB_CONNECT();

	// get all category info from tbl_category table
	$result = mysqli_query($db->connect(),"SELECT * FROM tbl_category") or die(mysqli_error());

	if(mysqli_num_rows($result) >0)
	{
		
		// looping through all results
	    

		$response["success"] = 1;
	    $response["category"] = array();
	    while ($row = mysqli_fetch_array($result)) 
	    {
	    	// temp user array
	        $category = array();
	        $category["id"] = $row["cat_id"];
	        $category["name"] = $row["cat_name"];
	        $category["image_path"] = $row["cat_img"];
	        $category["tag_line"] = $row["tagline"];
	        
	        // push single category into final response array
	        array_push($response["category"], $category);

	    }

    	// success
   
	    // echoing JSON response
	    echo json_encode($response);
	}
	else
	{
		 // no category found
    	$response["success"] = 0;
    	$response["message"] = "categories not found";
 
    	// echo no users JSON
    	echo json_encode($response);
	}
?>