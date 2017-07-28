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
        
        <!--Morris Chart CSS -->
       
        

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
        <style>
            .imp
            {
                color:red;
            }
        </style>
        
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

        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row"> 
                        <?php if(isset($_GET['errmsg'])) { ?>
                            <div class="alert alert-danger" role="alert"> <strong>Sorry !</strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['errmsg']));?></a> </div>
                        <?php } 
                            if(isset($_GET['infomsg'])) { ?>
                            <div class="alert alert-info" role="alert"> <strong>Note : </strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['infomsg']));?></a> </div>
                        <?php } 
                            if(isset($_GET['sucmsg'])) {?>
                            <div class="alert alert-success" role="alert"> <strong>Success !</strong> <a href="#" class="alert-link"><?php echo unserialize(base64_decode($_GET['sucmsg']));?></a> </div>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><i class="fa fa-car" aria-hidden="true"></i> <b>Enter Details To Book Cab</b></h4>     
                             </div>
                        </div> 
                    </div>

                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-6">
<!--=============================================Booking Form=====================================================-->
                    <form class="form-horizontal"   method="post" name="booking_form" id="booking_form" action="nearest_cab.php" >
                        
                            <div class="form-group">
                                <label for="userName">Source Address <span class='imp'>*</span></label>
                                <input type="text"   class="form-control" name="source" id="source" />
                                <div id="source_validate"></div>
                            </div>
                             
                            <div class="form-group">
                                <label for="userName">Destination Address <span class='imp'>*</span></label>
                                <input type="text"   class="form-control" name="des" id="des" />
                                <div id="des_validate"></div>
                            </div>
                             
                            
                            <div class="form-group">
                                <label for="userName">Pick Up Date <span class='imp'>*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="ride_date" required="" autocomplete="off"/>
                                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                </div>
                                <div id="ride_date_validate"></div>
                            </div>
                            

                            <div class="form-group">
                                <label for="userName">Pick Up Time <span class='imp'>*</span></label>
                                  <div class="input-group clockpicker " data-placement="top" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" name="ride_time" placeholder="HH:MM" required="" autocomplete="off" />
                                    <span class="input-group-addon bg-custom b-0 text-white"> <span class="glyphicon glyphicon-time"></span> </span>
                                  </div>
                                  <div id="ride_time_validate"></div>
                            </div>
                            

                            
                            <div class="form-group">
                                <label for="userName">Choose Vehicle Variants <span class='imp'>*</span></label>
                                <select class="form-control select2" name="cat" class="form-control">
                                  <option value="">Choose Vehicle Variants</option>
                        <?php 
                            $result = mysqli_query($connect,"SELECT * FROM tbl_category");
                            $i=1;
                            $path = "../";
                            while($row=mysqli_fetch_assoc($result)){
                              
                          ?>
                          <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?></option>
              
                          
                            <?php } ?>
                                </select>
                                <div id="cat_validate"></div>
                            </div>
                             

                            <div class="form-group text-right m-b-0">
                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save">
                                  Submit
                                </button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                  Cancel
                                </button>
                            </div>

                    </form>
<!--=============================================Booking Form=====================================================-->




                                        </div>
                                    </div>
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
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/js/additional-methods.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
       <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/pages/jquery.form-pickers.init.js"></script>  
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpu87_UMqxAmiA5ycUcqZVRSdtLVx63Ws&libraries=places&callback=initAutocomplete"
        async defer></script>
        

    </body>

    <!--=================================================AutoComplete For Source======================================-->
<script>

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('source')),
            {types: ['geocode']});
        autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('des'), { types: [ 'geocode' ] });
google.maps.event.addListener(autocomplete2, 'place_changed', function() {
  fillInAddress();
});

       
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
      
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

       
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }
    </script>
<!--=================================================AutoComplete For Source======================================-->

 <script>
        $(function (){

            jQuery.validator.addMethod("notEqual", function(value, element, param) {
 return this.optional(element) || value != $(param).val();
}, "<span style='color:red'>Source And Destination Address Has To Be Different.</span>");

            
            $.validator.setDefaults({
        highlight:function(element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function(element){
            $(element).closest('.form-group').removeClass('has-error');
        }

    });

            $('#booking_form').validate({

                rules:{
                    source:{required:true,notEqual:'#des'},
                    des:{required:true,notEqual:'#source'},
                    ride_date:{required:true},
                    ride_time:{required:true},
                    cat:{required:true},
                },
                messages:{
                source:{
                    required:"<span style='color:red'>Please Enter Source Address.</span>",
                },
                des:{required:"<span style='color:red'>Please Enter Destination Address.</span>"},
                ride_date:{required:"<span style='color:red'>Please Select Pick Up Date</span>"},
                ride_time:{required:"<span style='color:red'>Please Select Pick Up Time</span>"},
                cat:{required:"<span style='color:red'>Please Choose Vehicle Variants</span>"},
                },
                errorPlacement: function (error, element) {
            var name = $(element).attr("name");
            error.appendTo($("#" + name + "_validate"));
        },

            });
            

        });
    </script>

  
<?php if(isset($_GET['err_msg'])){?>

<script>
  $(window).load(function(){
   swal({
                title: "Sorry No Cabs Available",
                text: "Sorry All Cabs Are Booked, Please Select Different Date or Time!",
                type: "error",
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'Cancel'
            });
    var myNewURI = "";//the new URI
    window.history.pushState("booking.php", "booking", "booking.php" + myNewURI );
  });

</script>
<?php }?>

</html>