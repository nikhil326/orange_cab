<?php
session_start();

$dateTime	= date("Y-m-d");
error_reporting(E_ALL);
include_once 'config.php';
include('function.php');
//check if form is submitted
if(isset($_POST['registration']))
{
	//echo "hello";
	$mobileNo	=	$_POST['phone'];
	//echo $mobileNo; 
	$_SESSION['mobile'] = $mobileNo;
	
	//check whether user already registerd or not//
	$myquery	=	mysqli_query($connect,"SELECT * FROM tbl_customer WHERE  mob='".$mobileNo."'");
	//echo mysqli_num_rows($myquery);
	if(mysqli_num_rows($myquery)>0)
	{
		$msg	=	base64_encode(serialize("Mobile number is already registered! Please Login.Use verification code as a password."));
		//header("Location:checkout_password.php");
		echo ("<script language='JavaScript'>
												 window.location.href='password.php?sucmsg=$msg';
												 
											   </script>");  
		exit();
	}
	else
	{
		$verificationCode	=	get_verification_code(6);
		//Mobile is not registerd send sms for verification
		$result = mysqli_query($connect,"INSERT INTO tbl_customer
									(mob, otp, added_date, status) 
									VALUES 
									('" . $mobileNo . "', '" . $verificationCode . "','" . $dateTime . "', 'Inactive')");
		
		$msg 	= "Verification Code is send to your mobile no ".$mobileNo;
		//send_sms($mobileNo," ".$verificationCode." is your Gharpekirana Verification Code. Code valid for one time use. Happy Shopping! ");
		
		$msg	=	base64_encode(serialize("Verification Code is send to your mobile no ".$mobileNo));
		$sms = send_sms($mobileNo," ".$verificationCode." is your verification code.Please insert it and open your account.");
		//header("Location:checkout_verify.php?sucmsg=".$msg."&id=".$mobileNo);
		echo ("<script language='JavaScript'>
												 window.location.href='verify.php?sucmsg=$msg&id=$mobileNo';
												 
											   </script>");  
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Orange Caps</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css1/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation" style="background: #f7ad00; border-color:#f7ad00;">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Orange Caps</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="" method="post" name="form_name" id="form_name">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Mobile No.</label>
						<input type="text" id="phone" name="phone" required="required" onkeypress="phoneno()" maxlength="10" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="registration" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger">
			<?php if(isset($_GET['errmsg'])) { ?>
  <div class="alert alert-danger" role="alert"> <strong>Sorry !</strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['errmsg']));?></a> </div>
  <?php } 
  if(isset($_GET['infomsg'])) { ?>
  <div class="alert alert-info" role="alert"> <strong>Note : </strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['infomsg']));?></a> </div>
  <?php } 
  if(isset($_GET['sucmsg'])) {?>
  <div class="alert alert-success" role="alert"> <strong>Success !</strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['sucmsg']));?></a> </div>
  <?php } ?>
  </span>
		</div>
	</div>
	
</div>
 <script src="js/jquery.min.js"></script>
  <script src="js/jquery.validate.js"></script>
<script src="js1/jquery-1.10.2.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>
	   <script>
		$('form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#phone').val());

    // Check if empty of not
    if (name  === '') {
        alert('Text-field is empty.');
        return false;
    }
});
	   </script>
</body>
</html>
