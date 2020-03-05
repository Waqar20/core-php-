
<!DOCTYPE html>
<!-- saved from url=(0090)file:///C:/Users/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html -->
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><!-- Mirrored from vendroid.venmond.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:27:54 GMT --><!-- Added by HTTrack --><?php require './layout/head.php';?>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="dashboard " data-smooth-scrolling="1" style="">     
<div class="vd_body">
<!-- Header Start -->
  <?php require './layout/header.php' ?>
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
              
    
 
            </div>
          </div>
          <!-- vd_head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <div class="vd_content clearfix">
  
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
            </div>
          </div>
          <div class="vd_title-section clearfix">
            
          <div class="vd_content-section clearfix">
            <div class="panel widget light-widget">
              <div class="panel-heading no-title"> </div>
              <div class="panel-body">
                <h2 class="mgbt-xs-20">PLANET ADD FORM</h2>
                <form class="form-horizontal" action="process/add_planet.php"  method="post" id="register-form1" novalidate="novalidate" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="name" id="id">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong>. </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label  col-sm-2">Name :<span class="vd_red">*</span></label>
                      <div id="company-input-wrapper" class="controls col-sm-6">
                        <input type="text" placeholder="name"   class="width-60 required" required="" name="name" id="company">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2"> Persons<span class="vd_red">*</span></label>
                      <div id="website-input-wrapper" class="controls col-sm-6">
                        <input type="text" placeholder="No of persons"  class="width-60"  name="persons" id="website">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Location <span class="vd_red">*</span></label>
                  <div id="email-input-wrapper" class="controls col-sm-6">
            <input type="email" placeholder="Location" class="width-60 required"  required="" 
            name="location" id="user_email" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Image <span class="vd_red">*</span></label>
                      <div id="email-input-wrapper" class="controls col-sm-6">
                        <input type="file"  class="width-60"  name="file[]" multiple>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2"> Price<span class="vd_red">*</span></label>
                      <div id="website-input-wrapper" class="controls col-sm-6">
                        <input type="text" placeholder="Price" class="width-60"  name="price" id="website">
                      </div>
                    </div>
                  </div>
              <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                  <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-md-6 mgbt-xs-10 mgtp-20">
                      <div class="vd_checkbox  checkbox-success">
                        <input type="checkbox" id="checkbox-3" value="1">
                        <!-- <label for="checkbox-3"> Send me newsletter about the latest update</label> -->
                      </div>
                      <div class="vd_checkbox checkbox-success">
                        <input type="checkbox" id="checkbox-4" value="1" required="" name="checkbox-4">
                        <!-- <label for="checkbox-4"> I agree with <a href="#">terms of service</a></label> -->
                      </div>
                      <div class="mgtp-10">
                        <button class="btn vd_bg-green vd_white" name="add" type="submit" id="submit-register" >ADD</button>
                      </div>
                    </div>
                    <div class="col-md-12 mgbt-xs-5"> </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Panel Widget -->
            
             
          </div>
          <!-- .vd_content-section --> 
          
        </div>

              <!-- <small class="subtitle">Default dashboard for multipurpose demonstration</small> -->
              <div class="vd_panel-menu  hidden-xs">

 <!--  <div class="menu no-bg vd_red" data-original-title="Start Layout Tour Guide" data-toggle="tooltip" data-placement="bottom" onClick="javascript:introJs().setOption('showBullets', false).start();"> <span class="menu-icon font-md"><i class="fa fa-question-circle"></i></span> </div> -->
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
  </div> -->
  <!-- menu --> 
</div>
<!-- vd_panel-menu --> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          
       
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<?php
require'layout/footer.php';

?>