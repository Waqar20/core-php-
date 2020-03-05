<?php
  require 'process/sub_cate.php';

$curl = curl_init();
$data = array('action' => 'get_by','id'=>$_GET['id']);
curl_setopt_array($curl, array(
  CURLOPT_URL => apiDir("product_api.php"),
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

// print_r($response); die();

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $re = json_decode($response);

  if ($re->status) {
      $rows = $re->user;
  }
}
?>

<!DOCTYPE html>
<!-- saved from url=(0090)file:///C:/Products/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html -->
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
                <h2 class="mgbt-xs-20">PRODUCT EDIT FORM <?php   echo $rows->id;  ?></h2>
                <form class="form-horizontal" action="process/product_edit.php" method="post" role="form" id="register-form1" novalidate="novalidate" enctype="multipart/form-data">
                  
                  <input type="hidden" name="id" value="<?php  echo $rows->id;  ?>">
                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id']; ?>" >
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong>. </div>
                    <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label  col-sm-2"  >Select Sub Category <span class="vd_red">*</span></label>
                      <div id="first-name-input-wrapper" class="controls col-sm-4">
                        <select name="sub_cate_id">
                          <?php
                          if (isset($row) && count($row)) {
                                        foreach ($row as $key => $value) { ?>
                            <option value="<?php echo $value->id;?>" ><?php echo $value->scate_name; ?></option>
                          <?php }}?>
                          </select>

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label  col-sm-2">Brand Name <span class="vd_red">*</span></label>
                      <div id="first-name-input-wrapper" class="controls col-sm-9">
                        <input type="text"  class="width-60 required" name="brand_name" id="brand_name" required="" value="<?php echo $rows->brand_name; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label  col-sm-2">Product Name <span class="vd_red">*</span></label>
                      <div id="first-name-input-wrapper" class="controls col-sm-9">
                        <input type="text"  class="width-60 required" name="product_name" id="product_name" required=""value="<?php echo $rows->product_name; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label  col-sm-2">Product Discription <span class="vd_red">*</span></label>
                      <div id="company-input-wrapper" class="controls col-sm-6">
                      <textarea class="form-control" rows="5" name="product_discription" id="comment"><?php echo $rows->product_discription; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Product Image <span class="vd_red">*</span></label>
                      <div id="email-input-wrapper" class="controls col-sm-6">
              <input type="file" id="myFile" name="product_image">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Product Price</label>
                      <div id="website-input-wrapper" class="controls col-sm-6">
                        <input type="text"  class="width-60" name="product_price" id="product_price" value="<?php echo $rows->product_price; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Product Sale Price <span class="vd_red">*</span></label>
                      <div id="email-input-wrapper" class="controls col-sm-6">
                        <input type="text" placeholder="" class="width-60 required" required="" name="product_sale_price" id="product_sale_price" value="<?php echo $rows->product_sale_price; ?>">
                      </div>
                    </div>
                  </div>
                  
                 <!--  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Member Type <span class="vd_red">*</span></label>
                      <div id="email-input-wrapper" class="controls col-sm-6">
                        <div class="vd_radio radio-success">
                          <input type="radio" checked="" value="personal" id="optionsRadios3" name="member">
                          <label for="optionsRadios3"> Personal </label>
                          <input type="radio" value="business" id="optionsRadios4" name="member">
                          <label for="optionsRadios4"> Business </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  --> <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Size <span class="vd_red">*</span></label>
                      <div id="password-input-wrapper" class="controls col-sm-6">
                        <input type="text"  class="width-40 required" required="" name="size" id="size" value="<?php echo $rows->size; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Colour <span class="vd_red">*</span></label>
                        <div id="password-input-wrapper" class="controls col-sm-6">
                        <input type="text"  class="width-40 required" required="" name="colour" id="colour" value="<?php echo $rows->colour; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-2">Select Multiple Image <span class="vd_red">*</span></label>
                      <div id="email-input-wrapper" class="controls col-sm-6">
                    <input type="file" id="myFile" name="gallery_image[]" required multiple>
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
                        <input class="btn vd_bg-green vd_white" type="submit" value="submit" id="submit-register" name="edit_record">
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
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-Product"></i></div> <div class="menu-text">Filter Product</div> </a> </li>
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

<!-- Footer Start -->
  <footer class="footer-1" id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                    Copyright ©2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->


</div>

<!-- .vd_body END  -->
<a id="back-top" href="file:///C:/Products/Ali%20Haider/Dropbox/xampp/htdocs/Sublime/opd/admin/adminpanel/index.html#" data-action="backtop" class="vd_back-top"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="./index_files/jquery.js.download"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="./index_files/bootstrap.min.js.download"></script> 
<script type="text/javascript" src="./index_files/jquery-ui.custom.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.ui.touch-punch.min.js.download"></script>

<script type="text/javascript" src="./index_files/caroufredsel.js.download"></script> 
<script type="text/javascript" src="./index_files/plugins.js.download"></script>

<script type="text/javascript" src="./index_files/breakpoints.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.dataTables.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.prettyPhoto.js.download"></script> 

<script type="text/javascript" src="./index_files/jquery.mCustomScrollbar.concat.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.tagsinput.min.js.download"></script>
<script type="text/javascript" src="./index_files/bootstrap-switch.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.blockUI.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.pnotify.min.js.download"></script>

<script type="text/javascript" src="./index_files/theme.js.download"></script>
<script type="text/javascript" src="./index_files/custom.js.download"></script>
 
<!-- Specific Page Scripts Put Here -->
<!-- Flot Chart  -->
<script type="text/javascript" src="./index_files/jquery.flot.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.flot.resize.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.flot.pie.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.flot.categories.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.flot.time.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery.flot.animator.min.js.download"></script>

<!-- Vector Map -->
<script type="text/javascript" src="./index_files/jquery-jvectormap-1.2.2.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery-jvectormap-world-mill-en.js.download"></script>

<!-- Calendar -->
<script type="text/javascript" src="./index_files/moment.min.js.download"></script>
<script type="text/javascript" src="./index_files/jquery-ui.custom.min.js.download"></script>
<script type="text/javascript" src="./index_files/fullcalendar.min.js.download"></script>

<!-- Intro JS (Tour) -->
<script type="text/javascript" src="./index_files/intro.min.js.download"></script>

<!-- Sky Icons -->
<script type="text/javascript" src="./index_files/skycons.js.download"></script>


<script type="text/javascript">
$(window).load(function () 
  {




    $.fn.UseTooltip = function () {
      var previousPoint = null;
       
      $(this).bind("plothover", function (event, pos, item) {        
          if (item) {
            if (previousPoint != item.dataIndex) {
    
              previousPoint = item.dataIndex;
    
              $("#tooltip").remove();
              var x = item.datapoint[0].toFixed(2),
              y = item.datapoint[1].toFixed(2);
    
              showTooltip(item.pageX, item.pageY,
                "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
                "<div style='padding: 0 10px 10px;'>" +
                "<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
                "<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
                "</div>"
              );
            }
          } else {
            $("#tooltip").remove();
            previousPoint = null;            
          }
      });
    };
     
    function showTooltip(x, y, contents) {
      $('<div id="tooltip">' + contents + '</div>').css({
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 20,    
        size: '10',  
//        'border-top' : '3px solid #1FAE66',
        'background-color': '#111111',
        color: "#FFFFFF",
        opacity: 0.85
      }).appendTo("body").fadeIn(200);
    }


/* REVENUE LINE CHART */

  var d2 = [ [1, 250],
            [2, 150],
            [3, 50],
            [4, 200],
            [5,50],
            [6, 150],
            [7, 150],
            [8, 200],
            [9, 100],
            [10, 250],
            [11,250],
            [12, 200],
            [13, 300]     

];
  var d1 = [
      [1, 650],
            [2, 550],
            [3, 450],
            [4, 550],
            [5, 350],
            [6, 500],
            [7, 600],
            [8, 450],
            [9, 300],
            [10, 600],
            [11, 400],
            [12, 500],
            [13, 700]         
      
];
  var plot = $.plotAnimator($("#revenue-line-chart"), [
      {   label: "Revenue",
        data: d2,   
        lines: {        
          fill: 0.4,
          lineWidth: 0,       
        },
        color:['#f2be3e']
      },{ 
        data: d1, 
        animator: {steps: 60, duration: 1000, start:0},     
        lines: {lineWidth:2}, 
        shadowSize:0,
        color: '#F85D2C'
      },{
        label: "Revenue",
        data: d1, 
        points: { show: true, fill: true, radius:6,fillColor:"#F85D2C",lineWidth:3 }, 
        color: '#fff',        
        shadowSize:0
      },
      { label: "Cost",
        data: d2, 
        points: { show: true, fill: true, radius:6,fillColor:"#f2be3e",lineWidth:3 }, 
        color: '#fff',        
        shadowSize:0
      }
    ],{ xaxis: {
    tickLength: 0,
    tickDecimals: 0,
    min:2,

        font :{
          lineHeight: 13,
          style: "normal",
          weight: "bold",
          family: "sans-serif",
          variant: "small-caps",
          color: "#6F7B8A"
        }
      },
      yaxis: {
        ticks: 3,
                tickDecimals: 0,
        tickColor: "#f0f0f0",
        font :{
          lineHeight: 13,
          style: "normal",
          weight: "bold",
          family: "sans-serif",
          variant: "small-caps",
          color: "#6F7B8A"
        }
      },
      grid: {
        backgroundColor: { colors: [ "#fff", "#fff" ] },
        borderWidth:1,borderColor:"#f0f0f0",
        margin:0,
        minBorderMargin:0,              
        labelMargin:20,
        hoverable: true,
        clickable: true,
        mouseActiveRadius:6
      },
      legend: { show: false}
    });

    $("#revenue-line-chart").UseTooltip();    

    $(window).on("resize", function(){
      plot.resize();
      plot.setupGrid();
      plot.draw();
    });
        

/* REVENUE DONUT CHART */
  
    var data2 = [],
      series = 3;
    var data2 = [
      { label: "Men",  data: 35},
      { label: "Women",  data: 65}
    ];
    var revenue_donut_chart = $("#revenue-donut-chart");
    
    $("#revenue-donut-chart").bind("plotclick", function (event, pos, item) {
      if (item) {
        $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
        plot.highlight(item.series, item.datapoint);
      }
    });
    $.plot(revenue_donut_chart, data2, {
      series: {
        pie: { 
          innerRadius: 0.4,
          show: true
        }
      },
      grid: {
        hoverable: true,
        clickable: true,
      },
      colors: ["#1FAE66", "#F85D2C "]       
    });
    
    
/* REVENUE BAR CHART */ 
  
    var bar_chart_data = [ ["Jan", 10], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 10], ["Aug", 8], ["Sep", 4], ["Oct", 13], ["Nov", 17], ["Dec", 9] ];
    
        var bar_chart = $.plot(
        $("#revenue-bar-chart"), [{
            data: bar_chart_data,
 //           color: "rgba(31,174,102, 0.8)",
      color: "#F85D2C" ,
            shadowSize: 0,
            bars: {
                show: true,
                lineWidth: 0,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                }
            }
        }], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.9,
          align: "center"
                }
            },
            grid: {
                show: true,
                hoverable: true,
                borderWidth: 0
            },
            yaxis: {
                min: 0,
                max: 20,
        show: false
            },
      xaxis: {
        mode: "categories",
        tickLength: 0,
        color: "#FFFFFF",       
      }     
        });
    
     var previousPoint2 = null;
       $("#revenue-bar-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint2 != item.dataIndex) {
                    previousPoint2 = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0] + 1,
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY, 
                "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
                "<div style='padding: 0 10px 10px;'>" +
                "<div> Sales: <strong>"+ Math.round(y)*17  +"</strong></div>" +
                "<div> Profit: <strong>$"+ Math.round(y)*280  +"</strong></div>" +
                "</div>"                    
          );
                }
            }
        });

        $('#revenue-bar-chart').bind("mouseleave", function () {
            $("#tooltip").remove();
        });



/* PIE CHART */

    var pie_placeholder = $("#pie-chart");

    var pie_data = [];
    
    pie_data[0] = {
      label: "IE",
      data: 10
    }
    pie_data[1] = {
      label: "Safari",
      data: 8
    } 
    pie_data[2] = {
      label: "Opera",
      data: 8
    }       
    pie_data[3] = {
      label: "Chrome",
      data: 13
    } 
    pie_data[4] = {
      label: "Firefox",
      data: 17
    } 
    pie_data[5] = {
      label: "Other",
      data: 3
    }         
    $.plot(pie_placeholder, pie_data, {
      series: {
        pie: { 
          show: true,
          label:{
            show: true,
            radius: .5,
            formatter: labelFormatter,
            background: {
              opacity: 0
            }
          },

        }
      },
      grid: {
        hoverable: true,
        clickable: true
      },
      colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
    });

    pie_placeholder.bind("plothover", function(event, pos, obj) {
      if (!obj) {
        return;
      }
      var percent = parseFloat(obj.series.percent).toFixed(2);
      $("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
    });

    pie_placeholder.bind("plotclick", function(event, pos, obj) {
      if (!obj) {
        return;
      }
      percent = parseFloat(obj.series.percent).toFixed(2);
      alert(""  + obj.series.label + ": " + percent + "%");
    });

  function labelFormatter(label, series) {
    return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
  }
    


var cityAreaData = [
        500.70,
        410.16,
        210.69,
        120.17,
        64.31,
        150.35,
        130.22,
        120.71,
        100.32
      ]
$('#map1').vectorMap({
   map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    focusOn:{
      x: 5,
      y: 0.56,
      scale: 1.7
  },
  zoomOnScroll:false,
  zoomMin:0.85,
    hoverColor: false,
  regionStyle:{
      initial: {
      fill: '#abe7c8',
      "fill-opacity": 1,
      stroke: '#abe7c8',
      "stroke-width": 0,
      "stroke-opacity": 0
      },
      hover: {
      "fill-opacity": 0.8
      },
      selected: {
      fill: 'yellow'
      },
      selectedHover: {
      }
    },
    markerStyle: {
      initial: {
      fill: '#F85D2C',
      stroke: '#F85D2C',
      "fill-opacity": 0.9,
      "stroke-width": 10,
      "stroke-opacity": 0.5,
      r: 3
      },
      hover: {
      stroke: '#F85D2C',
      "stroke-width": 14
      },
      selected: {
      fill: 'blue'
      },
      selectedHover: {
      }
    },
    backgroundColor: '#ffffff',
     markers :[
      {latLng: [50, 0], name: 'France - 43145 views'},   
      {latLng: [0, 120], name: 'Indonesia - 145 views'},
      {latLng: [-25, 130], name: 'Australia - 486 views'},  
      {latLng: [0, 20], name: 'Africa - 12 views'}, 
      {latLng: [35, 100], name: 'China - 7890 views'},  
      {latLng: [46, 105], name: 'Mongolia - 2123 views'}, 
      {latLng: [40, 70], name: 'Kyrgiztan - 87456 views'},  
      {latLng: [58, 50], name: 'Russia - 4905 views'},
    {latLng: [35, 135], name: 'Japan - 87456 views'}                                    
      ],
  series: {
      markers: [{
        attribute: 'r',
        scale: [3, 7],
        values: cityAreaData
      }]
    },
  });   


/* REAL TIME CHART */
    
    var data = [],
      totalPoints = 300;

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1);

      // Do a random walk

      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
          y = prev + Math.random() * 10 - 5;

        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }

        data.push(y);
      }

      // Zip the generated y values with the x values

      var res = [];
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res;
    }

    // Set up the control widget

    var updateInterval = 30;
    $("#updateInterval").val(updateInterval).change(function () {
      var v = $(this).val();
      if (v && !isNaN(+v)) {
        updateInterval = +v;
        if (updateInterval < 1) {
          updateInterval = 1;
        } else if (updateInterval > 2000) {
          updateInterval = 2000;
        }
        $(this).val("" + updateInterval);
      }
    });

    var realtime_chart = $.plot("#realtime-chart", [ getRandomData() ], {
      series: {
        shadowSize: 0,  // Drawing is faster without shadows
        lines: {
          fill: true,
          fillColor: "#ffe29c",
        },
        color: "#ffe29c", 
      },
      yaxis: {
        min: 0,
        max: 100
      },
      xaxis: {
        show: false
      },
      grid: {
        borderWidth: 0
      },
      
    });

    function update() {
      realtime_chart .setData([getRandomData()]);

      // Since the axes don't change, we don't need to call plot.setupGrid()
      realtime_chart .draw();
      setTimeout(update, updateInterval);
    }

    update();


/* FULL CALENDAR  */
    
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    $('#calendar').fullCalendar({
      header: {
        left:   'title',
        center: '',
        right:  'today prev,next'
      },
      editable: true,
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1)
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d-5),
          end: new Date(y, m, d-2)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d-3, 16, 0),
          allDay: false
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+4, 16, 0),
          allDay: false
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/'
        }
      ]
    });
    

// Skycons

      var icons = new Skycons({"color": "white","resizeClear": true}),
        icons_btm = new Skycons({"color": "#F89C2C","resizeClear": true}),
          list  = "clear-day",
      livd_btm = ["rain", "wind"
      ];
      icons.set(list,list)
      for(var i = livd_btm.length; i--; )
        icons_btm.set(livd_btm[i], livd_btm[i]);

      icons.play();
    icons_btm.play();

/* News Widget */
     $(".vd_news-widget .vd_carousel").carouFredSel({
      prev:{
        button : function()
        {
          return $(this).parent().parent().children('.vd_carousel-control').children('a:first-child')
        }
      },
      next:{
        button : function()
        {
          return $(this).parent().parent().children('.vd_carousel-control').children('a:last-child')
        }
      },    
      scroll: {
        fx: "crossfade",
        onBefore: function(){
            var target = "#front-1-clients";
            $(target).css("transition","all .5s ease-in-out 0s");       
          if ($(target).hasClass("vd_bg-soft-yellow")){           
            $(target).removeClass("vd_bg-soft-yellow");
            $(target).addClass("vd_bg-soft-red");   
          } else
          if ($(target).hasClass("vd_bg-soft-red")){            
            $(target).removeClass("vd_bg-soft-red");
            $(target).addClass("vd_bg-soft-blue");    
          } else
          if ($(target).hasClass("vd_bg-soft-blue")){           
            $(target).removeClass("vd_bg-soft-blue");
            $(target).addClass("vd_bg-soft-green");   
          } else
          if ($(target).hasClass("vd_bg-soft-green")){            
            $(target).removeClass("vd_bg-soft-green");
            $(target).addClass("vd_bg-soft-yellow");    
          }           
        }
      },
      width: "auto",
      height: "responsive",
      responsive: true,
      auto:3000
      
    });



  // Notification
    setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)   ; 
    
    

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
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>




<!-- Mirrored from vendroid.venmond.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2016 06:35:04 GMT -->
</body></html>