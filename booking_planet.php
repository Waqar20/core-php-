<?php
///////////////// incude connection file with help of require_once method here !!
require_once('connection.php');


///////////////create booking planet// create booking planet // create booking planet // work start here ! 
if (isset($_POST["action"])  &&  $_POST["action"] == 'create_booking') {

	if (isset($_POST["name"]) && isset($_POST["persons"]) && isset($_POST["theme"]) && isset($_POST['date'])
		&& isset($_POST["sound"]) &&  isset($_POST["focus_light"])  &&  isset($_POST["o_requirement"]) ){

		$name=$_POST["name"];
		$persons=$_POST["persons"];
		$theme=$_POST['theme'];
		$date=$_POST['date'];
		$sound=$_POST['sound'];
		$focus_light=$_POST['focus_light'];
		$o_requirement=$_POST['o_requirement'];

		$query="INSERT INTO `booking_planet`(`name`, `num_person`, `event_theme`, `date`, `sound`, `light`, `other_requirement`) VALUES ('$name','$persons','$theme','$date','$sound','$focus_light','$o_requirement')";
		$result=mysqli_query($con,$query);
	if ($result) {

		$return_data= array('status' => true ,
							'messege'=>'booking has been Created! '
							 );
		}
		else{
		$return_data= array('status' => false ,
							'messege'=>'Data Insertion error!!'
							 );

		
	}

		}
			else{
		$return_data= array('status' => false ,
							'messege'=>'All field are Required!!'
							 );

		
	}

}

////////////////////// view booking ///// view booking  ////////////////////view booking //////////////////
elseif (isset($_POST["action"])  &&  $_POST["action"] == 'view_booking') {


  	
  	$qr="select * from booking_planet";
  	
  	$res= mysqli_query($con,$qr);
  	if($res){

		while ($row = mysqli_fetch_assoc($res)) {

		$data[]=$row;
			}
				}
 					$return_data = array(
  					'status' =>true ,
  					'messege'=> 'All data here !',
  					'user'=>$data
  					 );
 


		
	

}

/// by id
elseif (isset($_POST["action"])  &&  $_POST["action"] == 'view_by_id') {

		if (isset($_POST['id'])) {
		$id=$_POST['id'];
  	
  	$qr="select * from booking_planet where id =$id";
  	
  	$res= mysqli_query($con,$qr);
  	if($res){

		while ($row = mysqli_fetch_assoc($res)) {

		$return_data[]=$row;
			}
				}
 					$result = array(
  					'status' =>true ,
  					'messege'=> 'All data here !',
  					'user'=>$return_data
  					 );
 


		
	}

}

else {
	$return_data = array(
		'status' => false,
		'message' => 'POST method and action=create_booking or action=view_booking is required'
		 );
}

 echo json_encode($return_data);




?>