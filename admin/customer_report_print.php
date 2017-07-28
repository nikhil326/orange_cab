<?php include('config.php');
	include('cconfig.php');
	@session_start();
@ob_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Ace Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body onLoad="window.print();" >
	<div class="page-header">
							<h1 align="center">
								
									List of Customers
								
							</h1>
						</div><!-- /.page-header -->
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>Sr.No</th>
														<th>Name</th>
														<th class="hidden-480">Mobile No.</th>

														<th>
															
															Email Id
														</th>
														<th class="hidden-480">Status</th>

														</tr>
												</thead>

												<tbody>
												<?php $myresult = mysqli_query($connect,"select * from tbl_customer");
														$i = 1;
													while($row = mysqli_fetch_assoc($myresult)){
												?>
													<tr>
														

														<td>
															<?php echo $i++; ?>
														</td>
														<td><?php echo $row['cust_name']; ?></td>
														<td class="hidden-480"><?php echo $row['mob']; ?></td>
														<td><?php echo $row['email_id']; ?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $row['status']; ?></span>
														</td>

													</tr>
													<?php } ?>
													
												</tbody>
											</table>
												</body>
												
</html>
