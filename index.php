<?php
require './layout/head.php';

require 'process/count.php';
// session_start();

?>  
<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="dashboard " data-smooth-scrolling="1" style="">     
<div class="vd_body">
<!-- Header Start -->
	<?php require './layout/header.php';?>
	<!-- Header Ends --> 
<div class="content">
	<div class="container">
			<?php require './layout/sidebar.php';
					require './layout/nav-menu clearfix.php'; ?>
		
		<!-- Middle Content Start -->
		
		<div class="vd_content-wrapper" style="min-height: 860px;">
			<div class="vd_container" style="min-height: 860px;">
				<div class="vd_content clearfix">
					<div class="vd_head-section clearfix">
						<div class="vd_panel-header">
							<ul class="breadcrumb">
								<li><a href="#">Home</a> </li>
								<li class="active">Default Dashboard</li>
							</ul>
				 <!--      <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
		<div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
			<div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
			<div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
			
</div> -->
 
						</div>
					</div>
					<!-- vd_head-section -->
					
					<div class="vd_title-section clearfix">
						<div class="vd_panel-header">
							<h1>Dashboard</h1>
							<!-- <small class="subtitle">Default dashboard for multipurpose demonstration</small> -->
							<div class="vd_panel-menu  hidden-xs">

<!--   <div class="menu no-bg vd_red" data-original-title="Start Layout Tour Guide" data-toggle="tooltip" data-placement="bottom" onClick="javascript:introJs().setOption('showBullets', false).start();"> <span class="menu-icon font-md"><i class="fa fa-question-circle"></i></span> </div>
	mudasi -->
	<!-- menu -->
	
	<!-- <div class="menu">
		<div data-action="click-trigger"> <span class="menu-icon mgr-10"><i class="fa fa-filter"></i></span>Filter <i class="fa fa-angle-down"></i> </div>
		<div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target">
			<div class="child-menu">
				<div class="content-list content-menu">
					<ul class="list-wrapper pd-lr-10">
						<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Filter User</div> </a> </li>
						<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-calendar"></i></div> <div class="menu-text">Filter Date</div> </a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	 --><!-- menu --> 
</div>
<!-- vd_panel-menu --> 

						</div>
						<!-- vd_panel-header --> 
					</div>
					<!-- vd_title-section -->
					
			 
					
				</div>
				<!-- .vd_content --> 
				<div class="col-md-10">
								<div class="row">
									<div class="col-md-12">
										<div class="vd_status-widget vd_bg-green widget">
	<div class="vd_panel-menu">
	<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
																
		<a class="panel-body" href="index.php">
						<div class="clearfix">
								<span class="menu-icon">
										<i class="fa fa-home"></i>
									 
								</span>
								<span class="menu-value">
				<!-- <?php echo $categories; ?> -->
												 </span>  
						</div>   
						<div class="menu-text clearfix">
						Home
						</div>                                                               
		</a>        
</div>         
</div>

<!--col-md-12 --> 
								</div>
								<!-- .row -->
								<div class="row">
									<div class="col-xs-6">
										<div class="vd_status-widget vd_bg-red  widget">
		<div class="vd_panel-menu">
	<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
																 
		<a class="panel-body" href="view_booking.php">                                
				<div class="clearfix">
						<span class="menu-icon">
								<i class=" glyphicon glyphicon-sort-by-order"></i>
						</span>
						<span class="menu-value">
						 <?php echo $booking; ?>
						</span>  
				</div>   
				<div class="menu-text clearfix">
						Total Orders
				</div>  
		 </a>                                                                
</div>                    </div>
									<!--col-xs-6 -->
									<div class="col-xs-6">
										<div class="vd_status-widget vd_bg-blue widget">
		<div class="vd_panel-menu">
	<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
																	
		<a class="panel-body" href="view_sub_category.php">                                  
				<div class="clearfix">
						<span class="menu-icon">
								<i class="fa fa-shopping-cart"></i>
						</span>
						<span class="menu-value">
								<!-- <?php echo $sub_categories; ?> -->
								00
						</span>  
				</div>   
				<div class="menu-text clearfix">
						Sub Category
				</div>
		 </a>                                                                  
</div>                   </div>
									<!--col-xs-6 --> 
								</div>
								<!-- .row -->
								<div class="row">
									<div class="col-xs-6">
										<div class="vd_status-widget vd_bg-yellow widget" style="zoom: 1;">
		<div class="vd_panel-menu">
	<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
																	
		<a class="panel-body" href="view_user.php">                                
				<div class="clearfix">
						<span class="menu-icon">
								<i class="icon-users"></i>
						</span>
						<span class="menu-value">
												   <?php echo $users; ?>

						</span>  
				</div>   
				<div class="menu-text clearfix">
						Total Users
				</div>  
		 </a>                                                                
</div>                    </div>
									<!--col-xs-6 -->
									<div class="col-xs-6">
										<div class="vd_status-widget vd_bg-grey widget">
		<div class="vd_panel-menu">
	<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
</div>
<!-- vd_panel-menu --> 
																	 
		<a class="panel-body" href="view_planet.php">                                  
				<div class="clearfix">
						<span class="menu-icon">
								<i class="icon-vcard"></i>
						</span>
						<span class="menu-value">
							 <?php echo $planet; ?>
						</span>  
				</div>   
				<div class="menu-text clearfix">
Advertisment        </div>
		 </a>                                                                  
</div>                   </div>
									<!--col-md-xs-6 --> 
								</div>
								<!-- .row --> 
								
							</div>




			</div>
			<!-- .vd_container --> 
	
		</div>
		<!-- .vd_content-wrapper --> 

		
		<!-- Middle Content End --> 
		mudasir
	</div>

	<!-- .container --> 
</div>
<!-- .content -->
<?php
require'layout/footer.php';
?>