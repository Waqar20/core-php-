<?php
include 'function.php';

// echo api_host_dir("view_planet.php");

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
  CURLOPT_POSTFIELDS => "action=view_user",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

 
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
                                <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> User Details </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table id="data-tables" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Password</th>
                                      
                                        <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 <?php
                                 foreach ($row as  $value) {
                                  
                                 
                                 ?>
                                          
                                    <tr>
                                        <td class="center"> <?php echo $value->id; ?></td>
                                        <td class="center"> <?php echo $value->name; ?></td>
                                        <td class="center"> <?php echo $value->email; ?></td>
                                        <td class="center"><?php echo $value->contact; ?></td>
                                        <td class="center"><?php echo $value->password; ?></td>

                                       
                                        <td class="menu-action"><a href="single_user.php?id=<?php echo $value->id;?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"> <i class="fa fa-eye"></i> </a> <a href="edit_user.php?id=<?php echo $value->id; ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"> <i class="fa fa-pencil"></i> </a> <a href="javascript:;" onclick="deleted('process/delete_user.php?id=<?php echo $value->id; ?>');" data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a>

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