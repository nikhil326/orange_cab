<?php
//get category details by category_id from rd_category
if(!function_exists('getCategoryById')){	
function getCategoryById($category_id) {
include('config.php');
    $qrCategoryDetail = mysqli_query($connect,"SELECT * FROM category WHERE category_id = " . $category_id);
    $getCategoryDetail = mysqli_fetch_assoc($qrCategoryDetail);
    return $getCategoryDetail;
	}
}
if(!function_exists('getsubCategory')){	
function getsubCategory($subcat_id)
{
	include('config.php');
	$details	=	mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM subcategory sc INNER JOIN category c ON c.category_id=sc.category_id WHERE subcat_id=".$subcat_id));
	return $categoryDetails	=	$details;
	}
}

//--------------------------------------------------------------------------------------------------//	
if(!function_exists('getCustomerDateils')){	

function getCustomerDateils($custId)
{
include('config.php');
	$getcustomer	=	mysqli_query($connect,"SELECT * FROM customers WHERE customer_id	=	".$custId);
	$customer		=	mysqli_fetch_assoc($getcustomer);
	
	return $customer;
	}
}	
	
//--------------------------------------------------------------------------------------------------//
//function to append zeros
if(!function_exists('checkLength')){	
function checkLength($number)
{
	$length = strlen($number);
	
	$newNumber = $number;
	
	for($i=$length;$i<6; $i++)
	{
		$newNumber	=	"0".$newNumber;
	}
	return $newNumber;
}
}
//get product details by product_id from rd_product

if(!function_exists('getProductById')){	
function getProductById($product_id) {
include('config.php');
    $qrProductDetail 	= mysqli_query($connect, "SELECT * FROM products WHERE product_id = " . $product_id);
    $getProductDetail 	= mysqli_fetch_assoc($qrProductDetail);
    return $getProductDetail;
}
}

//--------------Function to get the Status Name from Id-----------------//

if(!function_exists('getStatus')){	

function getStatus($status_id)
{
include('config.php');
	$getstatus	=	mysqli_query($connect,"SELECT * FROM order_status WHERE status_id='".$status_id."'"); 
	$status		=	mysqli_fetch_assoc($getstatus);
	return $status['status_name'];
}
}

//--------------------------------------------------------------------//
//===================Function to Send SMS =======================================//

if(!function_exists('send_sms')){	

function send_sms($mobile,$message)
{
	include('config.php');
	$numbers = urlencode($mobile);
	$username=urlencode('skypeak');
	$pass=urlencode('Zaqwsx123');
	$route=urlencode('trans1');
	$senderid=urlencode('WELCOM');
	$message=urlencode($message);
	$ch=curl_init();
	mysqli_query($connect,"INSERT INTO rd_sms (mobile, message) VALUES ('$mobile', '$message')"); 
	
	/*curl_setopt($ch, CURLOPT_URL,"http://144.76.249.154:/sendSMS?username=gharpekirana&message=".$message."&sendername=GPKTRD&smstype=TRANS&numbers=".$numbers."&apikey=469ff749-9a65-48aa-bf28-257f049436fa");*/
	curl_setopt($ch, CURLOPT_URL,"http://sms1.businesslead.co.in/sendSMS?username=".$username."&message=".$message."&sendername=SKPEAK&smstype=TRANS&numbers=".$numbers."&apikey=3958deac-7db2-4d35-a0e4-2a444701a3ac");
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch); 
 
}
}


//================================================================================================//
//function to upload image
if(!function_exists('upload_image')){	

function upload_image($txtName, $columnName, $tableName, $uploadFolderName, $subFolderName, $conditionColumnName,$condition, $connect)
{
	include('config.php');
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$extension = end(explode(".", $_FILES[$txtName]["name"]));
	if (($_FILES[$txtName]["size"] < 2000000) && in_array($extension, $allowedExts))
	{
		if ($_FILES[$txtName]["error"] > 0)
		{
			return $error=$_FILES[$txtName]["error"] ."<br>";
		}
		else
		{
			$filename = $subFolderName . "/" . $subFolderName . "_" . get_random_no(6) . "." . $extension;
			move_uploaded_file($_FILES[$txtName]["tmp_name"], $uploadFolderName . "/" . $filename);
		
			mysqli_query($connect, "UPDATE " . $tableName . " SET 
							   " . $columnName . " = '" . mysqli_real_escape_string($con, $filename) . "' 
							   WHERE `" . $conditionColumnName . "` = '" . $condition . "'"
						 ) 
						 or die(mysqli_error($con));
		}
	}
	else
	{
	   $msg = "Please select correct image format.";
	   echo $msg;
	}
	return $filename;
}
}

//================================================================================================//
//function to upload image
if(!function_exists('get_random_no')){	
function get_random_no($len) {

	$random = substr(number_format(time() * rand(), 0, '', ''), 0, $len);

	return $random;
}
}

//function to set image path
if(!function_exists('displayImage')){	

function displayImage($imageName, $prefix, $zoom)
{
include('config.php');
	if($zoom == 1)
		$defaultImage	= "no_image_500x500.jpg";
	else
		$defaultImage	= "no_image.jpg";
		
		
    $location		= $prefix . "upload";
	
	//check if image is in database or not
	//if not then pick default image
	if($imageName == '')
	  $productImage	= $defaultImage;
	else
	  $productImage	= $imageName;
	
	//set complete image path
	$productImagePath	= $location . "/" . $productImage;
	
	//check if image exists at location
	//if not set it to default path
	if(file_exists($productImagePath))
	  $productImagePath = $productImagePath;
	else
	  $productImagePath	= $location . "/" . $defaultImage;
	
	//return image path
	return $productImagePath;
}
}

//=====================Function to return the banner Potiions==========================//
if(!function_exists('getBannerPosition')){	

function getBannerPosition($positionID)
{
include('config.php');
	$getValue	=	mysqli_query($connect,"SELECT * from banner_position WHERE position_id='".$positionID."'");
	$myvalue	=	mysqli_fetch_assoc($getValue);
	
	return $myvalue;
}
}

//=====================================================================================//

//--------------------function to return the user details from userID--------//
if(!function_exists('getUserDetails')){	

function getUserDetails($userID)
{
include('config.php');
	$getlist = mysqli_query($connect,"SELECT * FROM user WHERE id=".$userID);
	$users   = mysqli_fetch_assoc($getlist);
	
	return $users;
}
}

if(!function_exists('getCustDetails')){	

function getCustDetails($userID)
{
include('config.php');
	$getlist = mysqli_query($connect,"SELECT * FROM customers WHERE customer_id=".$userID);
	$users   = mysqli_fetch_assoc($getlist);
	
	return $users;
}
}

//--------------------------------------------------------------------//
//--------------------function to return the user details from loginID--------//

if(!function_exists('getUserDetailsByLoginID')){	

function getUserDetailsByLoginID($loginID)
{
include('config.php');
	$getlist = mysqli_query($connect,"SELECT * FROM user WHERE id=".$loginID);
	$users   = mysqli_fetch_assoc($getlist);
	
	return $users;
}
}
//--------------------------------------------------------------------//

//--------------Function to get the order details---------------------//

if(!function_exists('getOrderDetails')){	

function getOrderDetails($orderID)
{ 
include('config.php');
	$getorderQuery	=	mysqli_query($connect,"SELECT * FROM orders WHERE order_id='".$orderID."'"); 
	while($orders	=	mysqli_fetch_assoc($getorderQuery))
	{
		$orderdetails	=	$orders;
	}
	return $orderdetails;
}
}

//--------------------------------------------------------------------//
//--------------Function to get the cancel order details---------------------//

if(!function_exists('getcancelOrderDetails')){	

function getcancelOrderDetails($orderID)
{ 
include('config.php');
	$getorderQuery	=	mysqli_query($connect,"SELECT * FROM cancel_order WHERE order_id='".$orderID."'"); 
	while($orders	=	mysqli_fetch_assoc($getorderQuery))
	{
		$orderdetails	=	$orders;
	}
	return $orderdetails;
}
}

//--------------------------------------------------------------------//

//--------------Function to get the order product details---------------------//

if(!function_exists('getOrderProducts')){	

function getOrderProducts($orderID)
{
include('config.php');
$orderdetails=[];
	$getorderQuery	=	mysqli_query($connect,"SELECT order_details.*,product.product_name,product.product_code, product.image1  FROM order_details order_details INNER JOIN products product ON order_details.product_id=product.product_id  WHERE order_id='".$orderID."'"); 
	while($orders	=	mysqli_fetch_assoc($getorderQuery))
	{
		$orderdetails[]	=	$orders;
	}
	return $orderdetails;
}
}

//--------------------------------------------------------------------//
//--------------Function to get the order product details---------------------//

if(!function_exists('getcancelOrderProducts')){	

function getcancelOrderProducts($orderID)
{
include('config.php');
$orderdetails=[];
	$getorderQuery	=	mysqli_query($connect,"SELECT cancel_order_details.*,product.product_name,product.product_code, product.image1  FROM cancel_order_details cancel_order_details INNER JOIN products product ON cancel_order_details.product_id=product.product_id  WHERE order_id='".$orderID."'"); 
	while($orders	=	mysqli_fetch_assoc($getorderQuery))
	{
		$orderdetails[]	=	$orders;
	}
	return $orderdetails;
}
}

//--------------------------------------------------------------------//

//--------------Function to get the city Name from Id-----------------//

if(!function_exists('getCityDetails')){	

function getCityDetails($city_id)
{
include('config.php');
	$getcity	=	mysqli_query($connect,"SELECT * FROM city WHERE city_id='".$city_id."'"); 
	$citys		=	mysqli_fetch_assoc($getcity);
	return $citys;
}
}

//--------------------------------------------------------------------//
//--------------Function to get the State Name from Id-----------------//
if(!function_exists('getstateDetails')){	
function getstateDetails($state_id)
{
include('config.php');
	$getstate	=	mysqli_query($connect,"SELECT * FROM state WHERE state_id='".$state_id."'"); 
	$states		=	mysqli_fetch_assoc($getstate);
	return $states;
}
}
//--------------------------------------------------------------------//
//get verification code
if(!function_exists('getCountry')){	
function get_verification_code($len) {
	include('config.php');
 	$verificaitionCode = substr(number_format(time() * rand(), 0, '', ''), 0, $len);
 	return $verificaitionCode;
}
}
//--------------Function to get the Country Name from Id-----------------//

if(!function_exists('getCountry')){	
function getCountry($country_id)
{
include('config.php');
	$getcountry	= mysqli_query($connect,"SELECT * FROM country WHERE country_id='".$country_id."'"); 
	$countries	= mysqli_fetch_assoc($getcountry);
	return $countries;
}
}

//--------------------------------------------------------------------//

if(!function_exists('generateRandomString')){	
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}
}
?>