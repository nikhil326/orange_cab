<?php //session_start(); ?>
<ul id="menu-main-menu-1" class="navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-192"><a href="index.php">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a href="">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="">Ride Rate</a></li>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="">View A Booking</a></li>


<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-212"><a href="">Contact Us</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="">Contact us</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-214"><a href="">Contact us 2</a></li>
</ul>
</li>
	<?php if (isset($_SESSION['customer_id'])) { ?>
				
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Book Now</a></li>
				
				<?php } ?>
</ul>                
					                                    <ul class="nav-right-listed">
                                        <li id="search-push"><i class="fa fa-search"></i></li>
                                        <li id="push" class="cp-sidemenu"><a href="#"><i class="fa fa-align-justify"></i></a></li>
                                    </ul>
