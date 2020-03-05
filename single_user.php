<?php
include 'function.php';

// echo api_host_dir("view_planet.php");
$id=$_GET['id'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_PROXY, '');
curl_setopt_array($curl, array(
  CURLOPT_URL => api_host_dir("user.php"),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "action=get_user_by_id&id=$id",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
//print_r($response);
 
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

    $posts_data = json_decode($response);

    if ($posts_data->status) {
      
       $row = $posts_data->user;
            if(!empty($posts_data->data)){
              $images = $posts_data->data;
            }
    }
    else{

      // print_r($posts_data);die();

        header('location:javascript://history.go');die();
    }
}

?>

<!DOCTYPE html>
<!-- saved from url=(0090)file:///C:/Users/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html -->
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><!-- Mirrored from vendroid.venmond.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:27:54 GMT --><!-- Added by HTTrack --><?php require './layout/head.php';?>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="dashboard " data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <?php require './layout/header.php'; ?>
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
                <li><a href="file:///C:/Users/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index-2.html">Home</a> </li>
                <li class="active">Default Dashboard</li>
              </ul>
      
            </div>
          </div>
          <!-- vd_head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <div class="pd-20">
<div class="vd_info tr"> <a href="edit_user.php?id=<?php echo $row->id; ?>" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> USER</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label"> Name:</label>
              <div class="col-xs-7 controls"><?php echo $row->name; ?></div>

              <!-- col-sm-10 --> 
            </div>

          </div>



          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo $row->email?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <br><br>

          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
            <!--   <label class="col-xs-5 control-label">Password:</label>
              <div class="col-xs-7 controls"><?php echo $row->password; ?></div> -->
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
            <!--   <label class="col-xs-5 control-label">Contact:</label>
              <div class="col-xs-7 controls"><?php echo $row->contact; ?></div> -->
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
           <label class="col-xs-5 control-label">Password:</label>
              <div class="col-xs-7 controls"><?php echo $row->password; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
            <label class="col-xs-5 control-label">Contact:</label>
              <div class="col-xs-7 controls"><?php echo $row->contact; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
           
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
          
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
           
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <!-- <label class="col-xs-5 control-label">Phone:</label> -->
              <!-- <div class="col-xs-7 controls">+1-234-5678</div> -->
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
        <hr class="pd-10">
        
              <!-- <small class="subtitle">Default dashboard for multipurpose demonstration</small> -->
              <div class="vd_panel-menu  hidden-xs">

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