<?php
session_start();
include('function.php');
$dateTime	= date("Y-m-d");
error_reporting(E_ALL);
include_once 'config.php';

//check if form is submitted
if(isset($_POST['save']))
{
	$mobileNo	=	$_SESSION['mobile'];
	$password	=	$_POST['password'];
	 
	//check entered verification code is correct or not//
	$myquery	=	mysqli_query($connect,"SELECT * FROM tbl_customer WHERE mob='".$mobileNo."' AND password='".$password."'");
	if(mysqli_num_rows($myquery)>0)
	{ 
		while($result	=	mysqli_fetch_assoc($myquery))
		{
			//var_dump($result);
			//set session here
			$_SESSION['customer_id']	= $result['cust_id'];
			$_SESSION['customer_name'] 	= $result['cust_name'];
			$_SESSION['email_id'] 		= $result['email_id'];
			$_SESSION['mobile']		= $result['mob'];
			
		}	 
		mysqli_query($connect,"UPDATE tbl_customer SET status='Active' WHERE mob='".$mobileNo."' AND cust_id='".$_SESSION['customer_id']."'");
			$x=$_SESSION['customer_name'];
			//$msg=base64_encode(serialize($x));
			echo ("<script language='JavaScript'>
												 window.location.href='viewBooking.php';
												 
											   </script>");  
			exit();
		}
	}
	else
	{
		
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

<nav class="navbar navbar-default" role="navigation">
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
				<li><a href="register.php">Sign Up</a></li>
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
						<label for="name">Password</label>
						<input type="hidden" name="mobile" id="mobile" value="<?php echo $_SESSION['mobile'];?>">
						<input type="text" id="password" name="password" required="required" onkeypress="phoneno()"  class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="save" value="Login" class="btn btn-primary" />
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
            $('#password').keypress(function(e) {
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
    var name = $.trim($('#password').val());

    // Check if empty of not
    if (name  === '') {
        alert('Text-field is empty.');
        return false;
    }
});
	   </script>
</body>
</html>
