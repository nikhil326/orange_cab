<?php 
include('config.php');
include('cconfig.php');
			$select =  $result = mysqli_query($connect,"Select * FROM vehicle WHERE vehicle_id=".$_GET['id']);
				   		$row = mysqli_fetch_assoc($result);
		$queryStatus = mysqli_query($connect,"insert into delete_items(item_name,ip_address,date)values('".$row['vehicle_name']."', '".CUSTOMER_IP."',now())");
		$queryStatus1 = mysqli_query($connect,"DELETE FROM vehicle where vehicle_id=".$_GET['id']);	
		//$queryStatus1 = mysqli_query($connect,"DELETE FROM vehicle where dr_id=".$_GET['id']);	
	$msg	=	base64_encode(serialize("Vehicle deleted sucessfully!"));			
		echo ("<script language='JavaScript'>
         window.location.href='vehicle.php?sucmsg=$msg';
       </script>");
					
					

?>