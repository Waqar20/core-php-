<?php
require 'process/function.php';
$curl = curl_init();
$data = array('action' => 'get_by','user_email'=>$_GET['user_email']);
curl_setopt_array($curl, array(
  CURLOPT_URL => apiDir("forget_password.php"),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $re = json_decode($response);

  if ($re->status) {
      $rows = $re->user_data;
  }
}
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->


<!-- Mirrored from vendroid.venmond.com/pages-forget-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:43:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>reset password</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Forget Password Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="adminpanel/img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="adminpanel/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="adminpanel/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="adminpanel/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="adminpanel/img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="adminpanel/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="adminpanel/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="adminpanel/css/font-awesome-ie7.min.css"><![endif]-->
    <link href="adminpanel/css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="adminpanel/css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="adminpanelplug/ins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="adminpanelplug/ins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="adminpanelplug/ins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="adminpanelplug/ins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="adminpanelplug/ins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="adminpanelplug/ins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="adminpanelplug/ins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="adminpanelplug/ins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="adminpanelplug/ins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="adminpanelplug/ins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="adminpanelplug/ins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="adminpanel/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="adminpanel/css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="adminpanel/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="adminpanel/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="adminpanelcus/tom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="adminpanel/js/modernizr.js"></script> 
    <script type="text/javascript" src="adminpanel/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="adminpanel/js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="adminpanel/js/html5shiv.js"></script>
      <script type="text/javascript" src="adminpanel/js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content"><div class="container">





<!-- Middle Content Start -->

<div class="vd_content-wrapper">
    <div class="vd_container">
    
        <div class="vd_content clearfix">               
            <div class="vd_content-section clearfix">  

            <div class="vd_login-page">     
            	<div class="heading clearfix">
                	<div class="logo"><h2 class="mgbt-xs-5"><img src="adminpanel/img/logo1.png" alt="logo"></h2></div>
                    <h4 class="text-center font-semibold vd_grey">RESET PASSWORD FORM</h4>                     
                </div>
               
                <div class="panel widget">
                    <div class="panel-body">
                    
                          <div class="login-icon">
                                <i class="fa fa-lock"></i>
                          </div>      
                          <div id="password-success" class="alert alert-success vd_hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Your reset password form has been sent to your email </div>              
                          <form class="form-horizontal" id="forget-password-form1" action="process/confirm_pass.php" method="post">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                  <div class="alert alert-success vd_hidden">
    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>Your reset password form has been sent to your email. </div>                            
                             <div class="form-group mgbt-xs-20">
                                 <div class="col-md-12">
                                 	<p class="text-center"><strong>reset password.</strong> </p>
                                    <div class="vd_input-wrapper" id="email-input-wrapper">
                                       <input type="hidden" name="user_email" value="<?php echo $rows->user_email; ?>" >
                                        <input type="password" placeholder="New Password" id="password" name="password" class="required">
                                    </div>   
                                
                                  </div>                            
                            </div>

                             <div class="form-group mgbt-xs-20">
                                 <div class="col-md-12">
                                   
                                    <div class="vd_input-wrapper" id="email-input-wrapper">
                                       
                                        <input type="password" placeholder="Confirm Password" id="con_password" name="con_password" class="required">
                                    </div>   
                                
                                  </div>                            
                            </div> 

                            
                                                                                                        
                            <div class="form-group" id="submit-password-wrapper">
                              <div class="col-md-12 text-center mgbt-xs-5">
                                  <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-password" >Update</button>   
                              </div>

                            </div>
                          </form>

                          
                    </div>
                </div> <!-- Panel Widget --> 
                <div class="register-panel text-center font-semibold">	
                	<a href="adminpanelpa/ges-login.html">LOGIN</a> <span class="mgr-10 mgl-10">|</span>  	
                    <a href="adminpanelpa/ges-register.html">CREATE AN ACCOUNT</a>  	
                </div>
                </div> <!-- vd_login-page -->

                
                                                           
            </div>   
          <!-- .vd_content-section --> 
          
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
  
  
  
<!-- Footer Start -->
  <footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->

</div>

<!-- .vd_body END  -->
<a id="back-top" href="adminpa/nel#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--
<a class="back-top" href="adminpa/nel#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="adminpanel/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="adminpanel/js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="adminpanel/js/bootstrap.min.js"></script> 
<script type="text/javascript" src='adminpanel/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="adminpanel/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="adminpanel/js/caroufredsel.js"></script> 
<script type="text/javascript" src="adminpanel/js/plugins.js"></script>

<script type="text/javascript" src="adminpanel/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="adminpanel/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="adminpanel/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="adminpanel/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="adminpanel/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="adminpanel/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="adminpanel/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="adminpanel/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="adminpanel/js/theme.js"></script>
<script type="text/javascript" src="adminpanel/custom/custom.js"></script>
 


<!-- Specific Page Scripts Put Here -->
<script type="text/javascript">
$(document).ready(function() {
	"use strict";

        var form_register_2 = $('#forget-password-form');
        var error_register_2 = $('.alert-danger', form_register_2);
        var success_register_2 = $('.alert-success', form_register_2);
	
	var options = { 
		type: "POST",
		url:  $("#forget-password-form").attr('action'),
		dataType: "json",
		success: function(data) {
			if (data.response == "success") {
				setTimeout(function(){
					$('#submit-password .fa-spinner').remove()	;
					$('#submit-password').addClass('disabled');					
					success_register_2.fadeIn(500);
					error_register_2.fadeOut(500);
				},1500)
				
			} else if (data.response == "error") {
				$('#submit-password .fa-spinner').remove()	;
				$('#submit-password').removeClass('disabled');	
			
			} else if (data.response == "empty") {
					
			} else if (data.response == "unexpected") {
						
			}	
						
		},
		error: function() {

		}
	}; 

        form_register_2.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'vd_red', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
				
                email: {
                    required: true,
                    email: true
                },				

				
            },
			
			errorPlacement: function(error, element) {
				if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
					element.parent().append(error);
				} else if (element.parent().hasClass("vd_input-wrapper")){
					error.insertAfter(element.parent());
				}else {
					error.insertAfter(element);
				}
			}, 
			
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success_register_2.fadeOut(500);
                error_register_2.fadeIn(500);


            },

            highlight: function (element) { // hightlight error inputs
		
				$(element).addClass('vd_bd-red');
				$(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
				if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
					$(element).siblings('.help-inline').removeClass('help-inline hidden');
				}
				

            },

            unhighlight: function (element) { // revert the change dony by hightlight
                $(element)
                    .closest('.control-group').removeClass('error'); // set error class to the control group
            },

            success: function (label, element) {
                label
                    .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                	.closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
				$(element).removeClass('vd_bd-red');

					
            },

            submitHandler: function (form) {
				$(form).find('#submit-password').addClass('disabled').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>')/*.addClass('disabled').attr('disabled')*/;					
				$(form).ajaxSubmit(options);			
            }
        });	


	
	
});
</script>


<!-- Specific Page Scripts END -->






<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43329142-3']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src =adminpanel/ ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>

<!-- Mirrored from vendroid.venmond.com/pages-forget-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:43:41 GMT -->
</html>