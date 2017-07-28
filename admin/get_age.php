	<?php 
	// DOB:)
	
	if($_POST['id'])
{
	$id=$_POST['id'];

	$date_1 = new DateTime( $_POST['id'] );
	
	//echo $date_1;

	// TODAY'S DATE
	$date_2 = new DateTime( date( 'Y-m-d' ) );
//echo $date_2;
	$difference = $date_2->diff( $date_1 );

	// Echo the as string to display in browser for testing
	$age = (string)$difference->y;
	?>
	<b> Drivers Age Is : <?php echo $age; ?> Years </b>
		<input  type="hidden" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $age; ?>" name="age" placeholder="Age"  required=""/>

	
	
<?php
}

	?>