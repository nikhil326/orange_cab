<?php 
@session_start();
include('config.php');
include("function.php");
if(!isset($_SESSION['user_id']))
    {
        $msg    =   base64_encode(serialize("Please Enter Your credentials."));
        header("location:index.php?msg=$msg");
        exit;
    }
$dateTime   = date("Y-m-d");
 if(isset($_POST['save']))
{
    
    if(isset($_POST['subject']))
    {
        $mobile   =   $_POST['subject'];

        $_SESSION['mobile'] = $mobile;
        $verificationCode   =   get_verification_code(6);
        $_SESSION['otp']= $verificationCode;
        //check whether user already registerd or not//
        $check_query=mysqli_query($connect,"SELECT * FROM `tbl_customer` WHERE `mob`='$mobile'");
        if(mysqli_num_rows($check_query) > 0)
        {
            while($fetch_info=mysqli_fetch_array($check_query))
            {
                $_SESSION['cust_id'] = $fetch_info['cust_id'];
                $cust_id  = $_SESSION['cust_id'];

                $update_otp=mysqli_query($connect,"UPDATE tbl_customer SET otp='$verificationCode' WHERE mob='$mobile'");
                if($update_otp)
                {
                    $msg    = "Verification Code is send to your mobile no ".$mobile;
                    $msg    =   base64_encode(serialize("Verification Code is send to your mobile no ".$mobile));
                    $sms = send_sms($mobile," ".$verificationCode." is your verification code.Please insert it and open your account.");
                    echo ("<script language='JavaScript'>
                                                 window.location.href='booking.php?sucmsg=$msg&id=$mobile&cust_id=$cust_id';
                                                 
                                               </script>");  
                    exit();
                }
                

                
            }
            
        }
        else
        {
            $result=mysqli_query($connect,"INSERT INTO `tbl_customer`(cust_id, mob, otp,status,added_date) VALUES('NULL','$mobile','$verificationCode','Inactive','$dateTime')");
            if($result)
            {
                $sql = mysqli_query($connect,"SELECT * FROM tbl_customer order by cust_id DESC LIMIT 1");
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['cust_id'] = $row['cust_id'];
                $cust_id  = $_SESSION['cust_id'];

                $msg    = "Verification Code is send to your mobile no ".$mobile;
               $msg =   base64_encode(serialize("Verification Code is send to your mobile no ".$mobile));
                $sms = send_sms($mobile," ".$verificationCode." is your verification code.Please insert it and open your account.");

                echo ("<script language='JavaScript'>
                                                         window.location.href='booking.php?sucmsg=$msg&id=$mobile&cust_id=$cust_id';
                                                         
                                                       </script>");  
                exit();
                
            }
        }
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
        
        <!--Morris Chart CSS -->
		
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

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

       
        
    </head>


    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('top_nav.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php include('left_menu.php'); ?>
            <!-- Left Sidebar End --> 
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><i class="fa fa-car" aria-hidden="true"></i> <b>Enter Mobile Number To Book Cab</b></h4> 
                                    
                                </div>
                            </div> 
                        </div> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <form class="form-horizontal" role="form"  method="post" name="book_form" id="book_form">
                                        <label for="exampleInputEmail1">Mobile Number <span style="color:red;">*</span></label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
<span class="input-group-addon" ><i class="fa fa-phone" ></i></span>
<input type="text" name="subject" id="subject" class="form-control" placeholder="Enter 10 Digit Mobile Number" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="10" autocomplete="off">
<span class="input-group-btn"><button type="submit" class="btn waves-effect waves-light btn-purple" name="save" id="submit">Submit</button></span>
                                                        </div>
                                                        <div id="subject_validate" style="padding-left:35px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>     
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
            


            

                <footer class="footer text-right">
                   SkyPeak Technologies Pvt.Ltd © 2017. All rights reserved.
                </footer>

            </div>
            
            




        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/js/additional-methods.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fastclick.js"></script> 
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/wow.min.js"></script> 
          <!-- Sweet-Alert  -->
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		
		
        

    </body>

    <script>
        $(function (){

            $.validator.addMethod("phoneno", function(phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length > 9 && 
            phone_number.match(/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/);
        }, "<br />Please specify a valid phone number");

            $.validator.setDefaults({
        highlight:function(element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function(element){
            $(element).closest('.form-group').removeClass('has-error');
        }

    });

            $('#book_form').validate({

                rules:{
                    subject:{required:true,phoneno:true},
                },
                messages:{
                        subject:{
                    required:"<span style='color:red'>Please Enter 10 Digit Mobil Number</span>",
                    phoneno:"<span style='color:red'>Please Enter Valid Mobil Number</span>",
                    },
                },
                errorPlacement: function (error, element) {
            var name = $(element).attr("name");
            error.appendTo($("#" + name + "_validate"));
        },

            });

            $('#employment-application').validate(rules);

        });
    </script>

<?php if(isset($_GET['err_msg'])){?>
<script>
  $(window).load(function(){
   swal({
                title: "Booking Faild.",
                text: "Something Went Wrong, Please Try After Some Time.",
                type: "error",
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'OK'
            });
    var myNewURI = "";//the new URI
    window.history.pushState("register.php", "register", "register.php" + myNewURI );
  });
</script>
<?php } ?>
<?php if(isset($_GET['success_msg'])){?>
<script>
  $(window).load(function(){
    //Success
       
            swal({
                title: "Ride Book Successfully.",
                text: "<?php echo $_GET['success_msg'];?>",
                type: "success",
                confirmButtonClass: 'btn-success btn-md waves-effect waves-light',
                confirmButtonText: 'OK'
            });
    var myNewURI = "";//the new URI
    window.history.pushState("register.php", "register", "register.php" + myNewURI );
        
  });
</script>
<?php } ?>


</html>