<?php 
  include('config.php');
  session_start();
  if(!isset($_SESSION['user_id']))
  {
    $msg  = base64_encode(serialize("Please Enter Your credentials."));
    header("location:index.php?msg=$msg");
    exit;
  }
?>

<!--====================================Getting Source And Destination From Booking Page=======================================-->
<?php 
    
    if(isset($_POST['save']))
    {

        if($_POST['source'])
        {
            $source=$_POST['source'];
            $_SESSION['source']=$source;
            $prepAddr = str_replace(' ','+',$source);
            $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyCHDWZV1-es9Meujd89j-2YvsJyfhvA55Q');
            $output= json_decode($geocode);
            $latitude = $output->results[0]->geometry->location->lat;
            $longitude = $output->results[0]->geometry->location->lng;
            $source_cor=$latitude.",".$longitude;
            
        }
        else
        {
            $source="";
        }


        if($_POST['des'])
        {
            $des=$_POST['des'];
            $_SESSION['des']=$des;
            $prepAddr = str_replace(' ','+',$des);
            $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyCHDWZV1-es9Meujd89j-2YvsJyfhvA55Q');
            $output= json_decode($geocode);
            $deslatitude = $output->results[0]->geometry->location->lat;
            $deslongitude = $output->results[0]->geometry->location->lng;
            $des_cor=$deslatitude.",".$deslongitude;
        }
        else
        {
            $des="";   
        }

        if($_POST['cat'])
        {
            $cat=$_POST['cat'];

            switch($cat)
            {
                case 1:
                $marker="assets/img/ambulance-marker.png";
                break;

                case 2:
                $marker="assets/img/cab-marker.png";
                break;

                case 3:
                $marker="assets/img/sedan-marker.png";
                break;

                case 4:
                $marker="assets/img/suv-marker.png";
                break;

                case 5:
                $marker="assets/img/travller-marker.png";
                break;

                case 6:
                $marker="assets/img/bus-marker.png";
                break;

                case 7:
                $marker="assets/img/truck-marker.png";
                break;

                default:
                $marker="assets/img/default-marker.png";
                break;
            }
        }
        else
        {
            $cat="";
        }

       if($_POST['ride_time'])
       {
          $ride_time  = date("g:i a", strtotime($_POST['ride_time']));
          $_SESSION['ride_time']=$ride_time;
         
         
          
       }

       if($_POST['ride_date'])
       {
          $_SESSION['ride_date']=$_POST['ride_date'];
          $timestamp = strtotime($_SESSION['ride_date']);
          $ride_date = date('d/m/Y', $timestamp);         
          
       }
       
       



    }
    else
    {
        echo "<script type='text/javascript'>location.href = 'register.php';</script>";
        
    }

    $json_data = array();

// include db connect class
    require_once ('../web_services/db_connect.php');

// connecting to db
$db = new DB_CONNECT();

 function distance($lat1, $lon1, $lat2, $lon2, $unit) {

              $theta = $lon1 - $lon2;
              $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
              $dist = acos($dist);
              $dist = rad2deg($dist);
              $miles = $dist * 60 * 1.1515;
              $unit = strtoupper($unit);

              if ($unit == "K") {
                return ($miles * 1.609344);
              } else if ($unit == "N") {
                  return ($miles * 0.8684);
                } else {
                    return $miles;
                  }
            }

            $distance=distance($latitude, $longitude, $deslatitude, $deslongitude, "K");
            $time_charges=getreachtime($source_cor,$des_cor)/60;
           

// get all driver info 
   $result = mysqli_query($db->connect(),"SELECT tbl_driver.dr_id,tbl_driver.dr_name,tbl_driver.dr_mob,tbl_driver.photo_id,tbl_driver.end_trip,vehicle.vehicle_id,vehicle.vehicle_name,vehicle.vehicle_no,tbl_category.cat_name,tbl_ratecard.ratecard_id,tbl_ratecard.base_fare,tbl_category.cat_id,tbl_ratecard.0_to_10_km,tbl_ratecard.after_10_km,tbl_ratecard.time_charges
        FROM vehicle INNER JOIN tbl_category ON vehicle.vehicle_cat_id=tbl_category.cat_id 
        INNER JOIN tbl_driver ON vehicle.dr_id = tbl_driver.dr_id 
        INNER JOIN tbl_ratecard ON vehicle.vehicle_cat_id = tbl_ratecard.cat_id
       
        WHERE vehicle.vehicle_id NOT IN ( SELECT `tbl_booking`.`vehicle_id` FROM `tbl_booking` WHERE `tbl_booking`.`start_date`='$ride_date' AND `tbl_booking`.`time`='$ride_time' AND `tbl_booking`.`ride_status` !='Completed' ) AND tbl_driver.status='Active' AND tbl_category.cat_id=$cat  GROUP BY vehicle.vehicle_id" ) or die(mysqli_error());
    

        if(mysqli_num_rows($result) >0)
        {
        
            // looping through all results
            

            // array to store info in json file
            $i=0;
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $location=array();
                $last_location=$row['end_trip'];
                $location = explode(",", $last_location);
                $ratecard_id= $row['ratecard_id'];

                
               
                 $json_data[$i]['id']= $row['dr_id'];
                 $json_data[$i]['name']= $row['dr_name'];
                 $json_data[$i]['lat']= $location[0];
                 $json_data[$i]['lng']= $location[1];
                 $json_data[$i]['phone']= $row['dr_mob'];
                 $json_data[$i]['photo_path']= $row['photo_id'];
                 $json_data[$i]['address']=getaddress($location[0],$location[1]);
                 $json_data[$i]['vehicle_id']= $row['vehicle_id'];
                 $json_data[$i]['vehicle_name']= $row['vehicle_name'];
                 $json_data[$i]['vehicle_no']= $row['vehicle_no'];
                 $json_data[$i]['cat_id']= $row['cat_id'];
                 $json_data[$i]['ratecard_id']= $row['ratecard_id'];
                 $json_data[$i]['base_fare']= $row['base_fare'];
                 $json_data[$i]['below_10km']= $row['0_to_10_km'];
                 $json_data[$i]['above_10km']= $row['after_10_km'];
                 $json_data[$i]['time_rate']= $row['time_charges'];
                  
                

                 

                 $estimate=mysqli_query($db->connect(),"SELECT * FROM `tbl_ratecard` WHERE `ratecard_id` =$ratecard_id;");
                 if(mysqli_num_rows($estimate) >0)
                 {
                    while($row=mysqli_fetch_array($estimate))
                    {
                       $above_10km= $row['after_10_km'];
                      $below_10km= $row['0_to_10_km'];
                       $d1=1;
                       $d2=1;
                       $d3=round($distance);

                       $price_above_10=0;

                       for($k=round($distance);$k>10;$k--)
                       {

                          $price_above_10=$above_10km*$d1;
                          $d1++;
                          $d3--;

                       }
                       for($j=$d3;$j>=0;$j--)
                       {
                         
                          $price_below_10=$below_10km*$d2;
                          $d2++;
                       }
                       if($price_above_10)
                       {
                          $total_estimate=$row['base_fare']+$price_below_10+$price_above_10;
                          $json_data[$i]['time_charges']= $time_charges*$row['time_charges'];
                          $json_data[$i]['price_below_10']= $price_below_10;
                          $json_data[$i]['price_above_10']= $price_above_10;
                          $json_data[$i]['estimate']= $total_estimate+$json_data[$i]['time_charges'];
                       }
                       else
                       {
                          $total_estimate=$row['base_fare']+$price_below_10+0;
                          $json_data[$i]['time_charges']= $time_charges*$row['time_charges'];
                          $json_data[$i]['price_below_10']= $price_below_10;
                          $json_data[$i]['price_above_10']= 0;
                          $json_data[$i]['estimate']= $total_estimate+$json_data[$i]['time_charges'];
                       }
                       
                       
                    }
                 }
                 

                 $i++;


            }

           file_put_contents('data/file.json', json_encode($json_data));
         
        
        }
        else
        {
          //open file to write
          $fp = fopen("data/file.json", "r+");
          // clear content to 0 bits
          ftruncate($fp, 0);
          //close file
          fclose($fp);
          $msg = base64_encode(serialize("Sorry All Cabs Are Booked, Please Select Different Date or Time."));
          echo ("<script language='JavaScript'> window.location.href='booking.php?err_msg=$msg'; </script>");
        }

        function getaddress($lat,$lng)
        {
             $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
             $json = @file_get_contents($url);
             $data=json_decode($json);
             $status = $data->status;
             if($status=="OK")
             {
               return $data->results[0]->formatted_address;
             }
             else
             {
               return false;
             }
        }


        function getreachtime($source,$des)
        {

             $url="https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=$source&destinations=$des&key=AIzaSyCHDWZV1-es9Meujd89j-2YvsJyfhvA55Q";
              $json = @file_get_contents($url);
              $data=json_decode($json);
                      
            
             if($data->status=="OK")
             {

               return $data->rows[0]->elements[0]->duration->value;
             }
             else
             {
             
               return false;
             }
        }

        
        
       
       


       
?>
<!--====================================Getting Source And Destination From Booking Page=======================================-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

      <title><?php echo COMPANY_NAME; ?></title>
        
        
        
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/storelocator.css" />

       
        
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
                        
                        <!--============================================MAP START======================================================-->              
               <div class="bh-sl-container">
                  <div class="bh-sl-form-container">
                      <form id="bh-sl-user-location" method="post" action="#">
                          <div class="form-input">
                              <label for="bh-sl-address">Enter Address or Zip Code:</label>
                              <input type="text" id="bh-sl-address" name="bh-sl-address" />
                          </div>
                          <button id="bh-sl-submit" type="submit">Submit</button>
                          <h5 style=" line-height:35px;font-weight:bold;">&nbsp;&nbsp;&nbsp; Drop location is <span style="text-decoration:underline;"><?php echo " ".$distance; ?>&nbsp;KM </span>away from pick up location</h5>
                      </form>
                  </div>

                  <div id="bh-sl-map-container" class="bh-sl-map-container">
                      
        <div id="bh-sl-map" class="bh-sl-map" style="border:1px solid gray;border-radius:10px;"></div>
                      
                          <div class="bh-sl-loc-list">
                              <ul class="list"></ul>
                          </div>
                 </div>
              </div>
<!--============================================MAP END======================================================-->
                       
                
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


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- MAP JavaScript -->
        <script src="assets/js/libs/handlebars.min.js"></script>
        <script src="assets/js/libs/infobubble.min.js"></script>
        <script src="assets/js/libs/markerclusterer.min.js"></script>
        <script src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyCHDWZV1-es9Meujd89j-2YvsJyfhvA55Q"></script>
        <script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>


    <script>
      $(function() {
        $('#bh-sl-map-container').storeLocator({
            autoComplete: true,
           
            infoBubble: {
                backgroundClassName: 'bh-sl-window',
                backgroundColor: '#fff',
                borderColor: '#ccc',
                borderRadius: 4,
                borderWidth: 1,
                closeSrc: 'assets/img/close-icon-dark.png',
                disableAutoPan: false,
                shadowStyle: 0,
                padding: 15,
                maxHeight: 540,
                maxWidth: 300,
            }, 
            markerImg : '<?php echo $marker;?>',
            inlineDirections: true,
            <?php if(isset($latitude) && isset($longitude)) 
            {
                echo "defaultLoc: true,
            defaultLat: '".$latitude."',
            defaultLng : '".$longitude."' ";
            }
            else
            {
                echo "autoGeocode: true";
            }


            ?>
            
            

        });
      });
    </script>
<!-- MAP JavaScript -->
    
        

    </body>
</html>