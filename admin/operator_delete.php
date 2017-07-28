
<?php 
include('config.php');
include('cconfig.php');
			$select =  $result = mysqli_query($connect,"Select * FROM tbl_operater WHERE ope_id=".$_GET['id']);
				   		$row = mysqli_fetch_assoc($result);
		$queryStatus = mysqli_query($connect,"insert into delete_items(item_name,ip_address,date)values('".$row['ope_name']."', '".CUSTOMER_IP."',now())");
		$queryStatus1 = mysqli_query($connect,"DELETE FROM tbl_operater where ope_id=".$_GET['id']);	
		$queryStatus1 = mysqli_query($connect,"DELETE FROM tbl_booking where ope_id=".$_GET['id']);	
	$msg	=	base64_encode(serialize("Operator deleted sucessfully!"));			
		echo ("<script language='JavaScript'>
         window.location.href='operator.php?sucmsg=$msg';
       </script>");
					
					

?>