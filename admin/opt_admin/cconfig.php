<?php 
error_reporting(E_ALL);
include('config.php');
include('function.php');
@session_start();

date_default_timezone_set('Asia/Kolkata');


if($_SESSION['UserId']=="")
{
	$msg	=	base64_encode(serialize("Please Login To Access Admin Panel"));
	header("location:index.php?msg=$msg");
	exit;
}
  /*
//------------Create Global connection variable ---------------//
//$con	=	connectDatabse();

$userId			=	$_SESSION['UserId'];
$balance		=	$_SESSION['balance'];
$userName		=	$_SESSION['userName'];
$email			=	$_SESSION['email'];
$parent_id		=	$_SESSION['parent_id'];
$compName		=	$_SESSION['compName'];
$login_ip		=	$_SESSION['login_ip'];*/

// Function to get the client ip address

/*function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

$ipaddress = get_client_ip_env();
*/


if(isset($_SESSION['customer_id']))
{
	$customer_id	= $_SESSION['customer_id'];
	
	//if customer logged in get customer details
	$customerDetails	= getCustomerDateils($customer_id);
	$customerName		= $customerDetails['full_name'];
	$first_name = $customerDetails['first_name'];
	$last_name = $customerDetails['last_name'];
	$email = $customerDetails['email_id'];
	$_SESSION['customer_name'] = $customerName;
}
else
{
	$customer_id	= 0;
	$customerName	= "";
}
if (!defined('SHIPPING_CHARGE')) define('SHIPPING_CHARGE', '50');
//define('SHIPPING_CHARGE',50);
if (!defined('SERVICE_TAX')) define('SERVICE_TAX', '10');
//define('SERVICE_TAX',10);
if (!defined('TDS')) define('TDS', '10');
//define('TDS',10);
if (!defined('SITENAME')) define('SITENAME', 'SkyPeak Grocery');
//define('SITENAME',' SkyPeak Grocery');
if (!defined('SITEURL')) define('SITEURL', 'http://groceryis.com');
//define('SITEURL','http://groceryis.com');
if (!defined('GLOBAL_URL')) define('GLOBAL_URL', 'http://groceryis.com');
//define('GLOBAL_URL','http://groceryis.com');
if (!defined('NO_REPLY_EMAIL')) define('NO_REPLY_EMAIL', 'no-reply@groceryis.com');
//define('NO_REPLY_EMAIL','no-reply@groceryis.com');
if (!defined('SUPPORTEMAIL')) define('SUPPORTEMAIL', 'support@groceryis.com');
//define('SUPPORTEMAIL','support@groceryis.com');
if (!defined('GLOBALURL')) define('GLOBALURL', 'http://groceryis.com');
//define('GLOBALURL','http://groceryis.com');

// Get the client ip address
//$ipaddress = $_SERVER['REMOTE_ADDR'];


$ipaddress = "192.168.2.7";
//$_SESSION['customerIPaddress']	=	$ipaddress;
//define('CUSTOMER_IP',$ipaddress);


$_SESSION['customerIPaddress']	=	$ipaddress;
if (!defined('CUSTOMER_IP')) define('CUSTOMER_IP', $ipaddress);
//define('CUSTOMER_IP',$ipaddress);
if (!defined('CONTACTNO')) define('CONTACTNO', 1234567890);
//define('CONTACTNO',1234567890);
if (!defined('TXNCONSTANT')) define('TXNCONSTANT', 'GRO');

//Constat for the TransactionID

?>
