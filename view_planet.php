<?php

require'process/view_planet.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0090)file:///C:/users/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html -->
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><!-- Mirrored from vendroid.venmond.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:27:54 GMT --><!-- Added by HTTrack --><?php require './layout/head.php';?>    

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
                <li class="active">Planets</li>
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
              <h1>Planets</h1></div>
          </div>
 
            <div class="vd_content-section clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel widget">
                            <div class="panel-heading vd_bg-grey">
                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> Planet Details </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table id="data-tables" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                         <th>Image</th>

                                        <th>Name</th>
                                        <th>No of Persons</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                      
                                        <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 <?php
                                 foreach ($row as  $value) {
                                  $img = json_decode($value->img);
                                 
                                 ?>
            
      <tr>
        <td class="center"> <?php echo $value->id; ?></td>
        <td class="center">
          <img src="api/upload/<?php echo $img['0'] ?>" width="80" 
          height="60" /></td>
          <td class="center"> <?php echo $value->name; ?></td>
          <td class="center"> <?php echo $value->persons; ?></td>
          <td class="center"><?php echo $value->location; ?></td>
          <td class="center"><?php echo $value->price; ?></td>
       
               <td class="menu-action"><a href="single_planet.php?id=<?php echo $value->id;?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"> <i class="fa fa-eye"></i> </a> 
                <a href="edit_planet.php?id=<?php echo $value->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"> <i class="fa fa-pencil"></i> </a> <a href="javascript:;" onclick="deleted('process/delete_planet.php?id=<?php echo $value->id; ?>');" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a>

                                    </td></tr>
                                  
                                
                                    </tbody>
                                  <?php } ?>
                                </table>

                                
                            </div>
                        </div>
                        <!-- Panel Widget -->
                    </div>
                    <!-- col-md-12 -->
                </div>
             </div>
  </div>
  <!-- .container --> 
</div>
<!-- .content -->
<?php require './layout/footer.php'; ?>

<script>
function deleted(delete_url)
{

  Swal.fire({
  title: 'Are you sure?',
  text: "You want Delete this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) 
  {
      //Swal.fire('Deleted!','Your file has been deleted.','success');
      window.location=delete_url;
  }

});

}

</script>