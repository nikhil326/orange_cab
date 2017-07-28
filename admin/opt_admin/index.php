<?php
include('config.php');
error_reporting(0);
@session_start();
@ob_start();
if(isset($_POST['btn_login'])){
 
$username		=	$_POST['username'];
$password		=	$_POST['password'];
//Password decryption
 

$loginQuery	=	mysqli_query($connect,"SELECT * FROM tbl_operater WHERE mob='".$username."' AND password='".$password."'");
mysqli_num_rows($loginQuery);

if(mysqli_num_rows($loginQuery)> 0)
{
	
	$logins	=	mysqli_fetch_assoc($loginQuery);

	$_SESSION['userName']	=	$logins['ope_name'];
	$_SESSION['email']		=	$logins['email_id'];
	$_SESSION['user_id']	=	$logins['ope_id'];
	$_SESSION['UserId']		=	$logins['ope_id'];
	$_SESSION['photo_id']   =	$logins['photo_id'];
	$_SESSION['dob']	    =	$logins['dob'];
	$_SESSION['mobile']	    =	$logins['mob'];
	$logiIP	                =	$_SERVER['REMOTE_ADDR'];
	$_SESSION['login_ip']	=	$logiIP;
	
	
	$result = mysqli_query($connect,"UPDATE tbl_operator SET online_status='Online',last_login='".date("Y-m-d h:i:s")."',login_ip='$logiIP' WHERE id=".$_SESSION['UserId']);
	
	if($result){
	mysqli_query($connect,"INSERT INTO opt_login(last_login,login_ip) VALUES ('".date("Y-m-d h:i:s")."','".$logiIP."')");
	}
	
	
	header("location:dashboard.php");
	exit;
	
}
else
{
	$msg	=	base64_encode(serialize("Invalid Username / Password "));
	header("location:index.php?msg=$msg");
	exit;
}

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title><?php echo COMPANY_NAME; ?></title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom"><?php echo COMPANY_NAME; ?> Operator</strong> </h3>
            </div> 


            <div class="panel-body">
					<?php if(isset($_GET['msg']))
				{ echo "<p class='text-center m-t-md' style='color:red'>".unserialize(base64_decode($_GET['msg']))."</p>";
				}
				if(isset($_GET['smsg']))
				{
					echo "<p class='text-center m-t-md' style='color:green'>".unserialize(base64_decode($_GET['smsg']))."</p>";
				}
				?>
            <form class="form-horizontal m-t-20" action="" method="post">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Mobile Number" name="username" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="10">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <!--<div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>-->
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit" name="btn_login">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
                
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>