<?php include('config.php');
	include('cconfig.php');
	@session_start();
@ob_start();?>
	<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-taxi"></i>
							Orange Cabs
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php if(empty($_SESSION['image'])){?><img src="assets/images/favicon.jpg" alt="" class="nav-user-photo">	<?php }else{ ?> <img src="<?php echo $_SESSION['image']; ?>" alt="" class="nav-user-photo"> <?php } ?>
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php if(empty($_SESSION['userName'])){?>
									Admin!
									<?php }else{?>
									<?php echo $_SESSION['userName']; ?>!
									<?php }?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-key"></i>
										Change Password
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>