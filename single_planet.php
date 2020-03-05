<?php
include 'function.php';

// echo api_host_dir("view_planet.php");
$id=$_GET['id'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_PROXY, '');
curl_setopt_array($curl, array(
  CURLOPT_URL => api_host_dir("view_planet.php"),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "action=get_rec_by&id=$id",
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

       // print_r($row); die();
            if(!empty($posts_data->data)){
              $images = $posts_data->data;
            }
    }
    else{

      // print_r($posts_data);die();

      //  header('location:javascript://history.go');die();
    }
}

?>

<!DOCTYPE html>
<!-- saved from url=(0090)file:///C:/Users/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html -->
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><!-- Mirrored from vendroid.venmond.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:27:54 GMT --><!-- Added by HTTrack --><?php require './layout/head.php';?>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="dashboard " data-smooth-scrolling="1" style="">     
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
<?php foreach ($row as $value) {
  # code...

  // $image = json_decode($value->img);
  // echo "$value->img";
}
?>

          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <div class="pd-20">
<div class="vd_info tr"><a href="edit_planet.php?id=<?php echo $value->id; ?>" class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a></div>  

        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bars mgr-10 profile-icon"></i> PLANET</h3>
        <div class="row">

          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label"> Name:</label>
              <div class="col-xs-7 controls"><?php echo $value->name; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Persons:</label>
              <div class="col-xs-7 controls"><?php echo $value->persons ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <br><br>

          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
           
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
          
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
           <label class="col-xs-5 control-label">Location:</label>
              <div class="col-xs-7 controls"><?php echo $value->location; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
            <label class="col-xs-5 control-label">Contact:</label>
              <div class="col-xs-7 controls"><?php echo $value->price; ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
         
        </div>


<!-- slider start  -->
<br><br>
<center>
<div id="demo" class="carousel slide" data-ride="carousel" style="width: 500px; height: 500px;">

<!-- Indicators -->
<ul class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
<?php
$count=0;

foreach ($row as $value) {

@$image=json_decode($value->img);
 if ($count==0) {


?>
<div class="carousel-item active">
<?php 
  
 echo  '<img src="api/upload/wedding.jpg"/>';

 ?>
</div>


<?php

 } else {  

   ?> 
<div class="carousel-item">
  <?php


   echo  '<img src="api/upload/'.$image["$count"].'"/>'; ?>
<!-- <img src="api/<?php echo $value->image; ?>" alt="Los Angeles" > -->
</div>

<?php 
 
 }
$count++;
} ?>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>
</center>
<!-- slider close -->



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