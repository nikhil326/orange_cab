<?php 
	include('config.php');
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg    =   base64_encode(serialize("Please Enter Your credentials."));
        header("location:index.php?msg=$msg");
        exit;
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
        <link href="assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
       
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/wow.min.js"></script>
        
        <script src="assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/pages/jquery.bs-table.js"></script>
        

        <script src="assets/js/jquery.app.js"></script>

        
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('top_nav.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php include('left_menu.php'); ?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                       <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><i class="fa fa-calendar-times-o"></i> <b>Cancel Booking</b></h4> 
                                    
                                </div>
                            </div> 
                        </div>

                       <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">

                                    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <?php 

                                            $ope_id=$_SESSION['user_id'];
                                            $result=mysqli_query($connect,"SELECT tbl_booking.booking_id,tbl_booking.date,tbl_booking.source,tbl_booking.destination,tbl_booking.cust_id,tbl_booking.vehicle_id,tbl_customer.mob,vehicle.dr_id,tbl_driver.dr_name FROM tbl_booking INNER JOIN tbl_customer ON tbl_booking.cust_id=tbl_customer.cust_id 
                                                INNER JOIN vehicle ON tbl_booking.vehicle_id=vehicle.vehicle_id
                                                INNER JOIN tbl_driver ON vehicle.dr_id=tbl_driver.dr_id
                                                WHERE `ride_status`='Waiting' AND `ope_id`='$ope_id' ORDER BY tbl_booking.booking_id DESC");
                                            if(mysqli_num_rows($result)>0)
                                            {
                                                echo '<table id="tech-companies-1" class="table  table-striped">
                                                        <thead style="background-color:gainsboro">
                                                            <tr>
                                                                <th>Booking Date</th>
                                                                <th data-priority="1">Customer Number</th>
                                                                <th data-priority="3">Driver Name</th>
                                                                <th data-priority="1">Pick Up Location</th>
                                                                <th data-priority="3">Drop Location</th>
                                                                <th data-priority="3" style="text-align:center;">Action</th>                                      
                                                            </tr>
                                                        </thead>
                                                        <tbody>';
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            echo '<tr>
                                                                    <th>'.$row['date'].'</th>
                                                                    <td>'.$row['mob'].'</td>
                                                                    <td>'.$row['dr_name'].'</td>
                                                                    <td>'.$row['source'].'</td>
                                                                    <td>'.$row['destination'].'</td>
                        <td style="text-align:center;"><button class="btn btn-danger waves-effect waves-light btn-sm" id="'.$row['booking_id'].'" href="confirm_cancel.php?booking_id='.$row['booking_id'].'">Cancel Ride</button></td>
                                                                </tr> 
                                                                 <script>
                                                    $("#'.$row['booking_id'].'").click(function(e){
                                                        e.preventDefault();
                                                        var link = $(this).attr("href");

                                                        swal({
                                                            title: "Are you sure?",
                                                            text: "Do You Want Cancel This Ride?",
                                                            type: "warning",
                                                            showCancelButton: true,
                                                            confirmButtonClass: "btn-warning",
                                                            confirmButtonText: "Yes, Cancel it!",
                                                        },
                                                        function(){
                                                            window.location.href = link;
                                                        });
                                                    });</script> ';    
                                                                                                            }
                                                echo ' </tbody></table>';
                                            }
                                            else
                                            {
                                                echo '<table id="tech-companies-1" class="table  table-striped">
                                                        <thead style="background-color:gainsboro">
                                                            <tr>
                                                                <th style="text-align:center">Currently There Are No Records For Booking.</th>    
                                                            </tr>
                                                       </thead>
                                                       </table>';
                                            }
                                            ?>    
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                   SkyPeak Technologies Pvt.Ltd © 2017. All rights reserved.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->


    
       
    </body>



<?php if(isset($_GET['err_msg'])){?>
<script>
  $(window).load(function(){
   swal({
                title: "Unable To Cancel Ride.",
                text: "Something Went Wrong, Please Try After Some Time.",
                type: "error",
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'OK'
            });
    var myNewURI = "";//the new URI
    window.history.pushState("cancel_booking.php", "cancel_booking", "cancel_booking.php" + myNewURI );
  });
</script>
<?php } ?>
<?php if(isset($_GET['success_msg'])){?>
<script>
  $(window).load(function(){
    //Success
       
            swal({
                title: "Ride Cancel Successfully.",
                text: "Ride Has Been Cancel Successfully.",
                type: "success",
                confirmButtonClass: 'btn-success btn-md waves-effect waves-light',
                confirmButtonText: 'OK'
            });
        var myNewURI = "";//the new URI
        window.history.pushState("cancel_booking.php", "cancel_booking", "cancel_booking.php" + myNewURI );
  });
</script>
<?php } ?>

    
</html>