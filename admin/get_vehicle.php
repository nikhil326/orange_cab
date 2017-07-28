<?php
include('config.php');

if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt =mysqli_query($connect,"SELECT * FROM vehicle where vehicle_id='".$id."'");
	//$stmt->execute(array(':id' => $id));
	
	$row=mysqli_fetch_assoc($stmt);
	
		?>
<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Vehicle Name</label>
										
								<div class="col-sm-9" >					
									<input  type="text" class="col-xs-10 col-sm-5" readonly="" value="<?php echo $row['vehicle_name']; ?>" name="vehicle_name" placeholder="Vehicle Model Number"  required="" />
										</div>
									</div>
									<div class="space-4"></div>
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Vehicle Model Name</label>
									<div class="col-sm-9">
										<input type="text"  class="col-xs-10 col-sm-5" id="form-input-readonly vehicle_model" readonly="" value="<?php echo $row['vehicle_model']; ?>"  name="vehicle_model" placeholder="Vehicle Model Name" required=""/>
									</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Vehicle Model No.</label>

										<div class="col-sm-9">
											<input  type="text" class="col-xs-10 col-sm-5" id="form-input-readonly vehicle_model_no" value="<?php echo $row['model_no']; ?>"  readonly="" name="vehicle_model_no" placeholder="Vehicle Model Number"  required="" />
											
										</div>
									</div>        <?php
}

?>
<!-- www.techsofttutorials.com   Techsoft Tutorials, Free Latest Technology Tutorials and Demo. -->