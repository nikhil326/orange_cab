<?php 
/*
 * Following code will give ride-estimate
 */
 
 
	// array for JSON response
	$response = array();

	

	if( isset($_POST['cat_id']) && isset($_POST['time']) && isset($_POST['distance']) )
	{
		// include db connect class
		require_once ('db_connect.php');
	         
		// connecting to db
		$db = new DB_CONNECT();

		 $cat_id = mysqli_real_escape_string($db->connect(),$_POST['cat_id']);
    	 $ride_time=mysqli_real_escape_string($db->connect(),$_POST['time']);
    	$time_in_min=explode('hour',$ride_time);
    
    	if(!empty($time_in_min[1]))
    	{
    		$time=$time_in_min[0]*60+$time_in_min[1];

    	}
    	else
    	{
    		$time=$time_in_min[0];
    	}
    	
    	 $distance=mysqli_real_escape_string($db->connect(),$_POST['distance']);

    	  $estimate=mysqli_query($db->connect(),"SELECT * FROM `tbl_ratecard` WHERE `tbl_ratecard`.`cat_id` =$cat_id");
    	  if(mysqli_num_rows($estimate) >0)
    	  {
    	  	while($row=mysqli_fetch_array($estimate))
    	  	{
    	  		 $above_10km= $row['after_10_km'];
                 $below_10km= $row['0_to_10_km'];
                 $d1=1;
                 $d2=1;
                 $d4=round($distance);
                 if($d4==0)
                 {
                 	$price_below_10=$below_10km;
                 	$d3=0;
                 }
                 else
                 {
                 	$d3=round($distance);
                 }

                 $price_above_10=0;

                 for($k=round($distance);$k>10;$k--)
                 {

                    $price_above_10=$above_10km*$d1;
                    $d1++;
                    $d3--;

                 }
                 for($j=$d3;$j>0;$j--)
                 {
                     
                    $price_below_10=$below_10km*$d2;

                    $d2++;
                 }
                  
                 if($price_above_10)
                 {
                 	$response["success"] = 1;
                    $total_estimate=$row['base_fare']+$price_below_10+$price_above_10;
                    $response['base_fare']= $row['base_fare'];
                    $response['time_charges']= $time*$row['time_charges'];
                    $response['price_below_10']= $price_below_10;
                    $response['price_above_10']= $price_above_10;
                    $response['estimate']= $total_estimate+$response['time_charges'];
                    // echoing JSON response
	        		echo json_encode($response);
                 }
                 else
                 {
                 	$response["success"] = 1;
                    $total_estimate=$row['base_fare']+$price_below_10+0;
                    $response['base_fare']= $row['base_fare'];
                    $response['time_charges']= $time*$row['time_charges'];
                    $response['price_below_10']= $price_below_10;
                    $response['price_above_10']= 0;
                    $response['estimate']= $total_estimate+$response['time_charges'];
                    // echoing JSON response
	        		echo json_encode($response);
                 }
    	  	}
    	  }
    	  else
    	  {
    	  	// required field is missing
	        $response["success"] = 0;
	        $response["message"] = "Rate Card Not Found";
     
	        // echoing JSON response
	        echo json_encode($response);
    	  }
	}
	else
	{
		 // required field is missing
        $response["success"] = 0;
        $response["message"] = "Required field  is missing";
     
        // echoing JSON response
        echo json_encode($response);
	}
?>