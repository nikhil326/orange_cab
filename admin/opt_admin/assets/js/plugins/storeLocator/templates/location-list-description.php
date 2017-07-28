
{{#location}}
<li data-markerid="{{markerid}}" style="border-bottom:1px solid gray;border-bottom-right-radius:25px;border-bottom-left-radius:25px;">
	<div class="list-label">{{marker}}</div>
	<div class="list-details">
		<div class="list-content">
			<div class="loc-name" style="text-transform:uppercase;">{{name}}</div>
			<div class="loc-addr">{{address}}</div> 
			
			<div class="loc-phone">{{phone}}</div>
			
			{{#if distance}}
			
				<div class="loc-dist">{{distance}} {{length}}  Away</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="loc-directions"><a href="https://maps.google.com/maps?saddr={{origin}}&amp;daddr={{address}} {{address2}} {{city}}, {{state}} {{postal}}" target="_blank">Directions</a></div>
					</div>
				

				
					<div class="col-lg-6">
						<div><a href="#" data-toggle="modal" data-target="#ratecard"><button class="btn btn-warning btn-rounded waves-effect waves-lightm pull-right">Book Ride</button></a></div>
					</div>
				</div>
				
				
			{{/if}}

			
			<div id="ratecard" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content" style="border-radius:10px;">
			      <div class="modal-header" style="background-color:orange;padding:20px;border-radius:10px;">
			        <h4 class="modal-title" style="color:white;font-weight:bolder;">Ride Estimate</h4>
			      </div>
			      
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-lg-5 text-center">
			        		<p><strong>Base Fare : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{base_fare}}</p>
			        <p><strong>Charges Up To 10 KM : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{below_10km}}</p>
			         <p><strong>Charges After 10 KM : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{above_10km}}</p>
			          <p><strong>Time Charges (per min) : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{time_rate}}</p>
			        	</div>

			        	<div class="col-lg-7" style="border-left:1px solid gray;">
			        		<p><strong>Base Fare : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{base_fare}}</p>
			        		<p><strong>+</strong></p>
					        <p><strong>Charges Up To 10 KM : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{price_below_10}}</p>
					        <p><strong>+</strong></p>
					         <p><strong>Charges After 10 KM : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{price_above_10}}</p>
					         <p><strong>+</strong></p>
					         <p><strong>Time Charges : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{time_charges}}</p>
					         <p><strong><hr style="border:1px solid gray"></strong></p>
					         <p><strong>Total Ride Estimate : <i class="fa fa-inr" aria-hidden="true"></i></strong> {{estimate}} <br>
					         <span style="text-decoration: underline;color:red;">(* This is approximate ride estimate,it can be change.)</span></p>
					          

			        	</div>
			        </div>
			      </div>
			      <div class="modal-footer">
			      <a href="confirm_booking.php?dr_id={{id}}&phone={{phone}}&v_id={{vehicle_id}}&cat_id={{cat_id}}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-lightm pull-left">
                    	<span class="btn-label"><i class="fa fa-check"></i></span>Book Ride
                 </button></a>

                 <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light pull-right"  data-dismiss="modal">
                      <span class="btn-label"><i class="fa fa-times"></i></span>Cancel
                 </button>
			      	
			      </div>
			    </div>

			  </div>

			</div>
		</div>
	</div>
</li>
{{/location}}