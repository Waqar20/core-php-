<?php

require 'connection.php';
require 'send_email.php';

if (isset($_POST['action']) && $_POST['action']=='forget_password') {
	$user_email = $_POST['email'];
	$token =  mt_rand(100000,999999); 
	if (isset($user_email) && isset($token) && !(empty($user_email))) {
		
		$query = "SELECT * FROM user WHERE email = '".$user_email."' ";
		$query_run = mysqli_query($con, $query);

		if (mysqli_num_rows($query_run)>0) {
			$fetch = mysqli_fetch_assoc($query_run);
			$user_id = $fetch['id'];

			$query = "UPDATE user SET Access_token = '".$token."' WHERE id = '".$user_id."' ";
			if (mysqli_query($con, $query)) {
				
			//	$url = "http://localhost/api_project/reset-password.php?user_email=$user_email&token=$token";
           // $reset_password_link = "<a href='".$url."' class='btn btn-primary'>Click me</a>";
                    $to = $user_email;
                    $subject = " Forgot password !! ";

                    $message = "Enter the code on your app"."<br>".$token;    

                   $mail = sendmail('emailforhidaya@gmail.com','@hidaya123',$to,$subject,$message);

                    if ($mail == 'send') {
                    	$return_data = array(
                    		'status' => true,
                    		'message'=> 'Email has been sent'
                    		 );
                    } else {
                    	$return_data = array(
                    		'status' => false,
                    		'message'=> 'Email has not been send'.$mail.$con->error
                    		 );
                    }

			} else {
				$return_data = array(
					'status' => false,
					'message'=> 'Token has not been created'
					 );
			}
		} else {
			$return_data = array(
				'status' => false,
				'message'=> 'Email not found'
				 );
		} 
	} else {
		$return_data = array(
			'status' => false,
			'message'=> 'All fields are required'
			 );
	}
}


////////////////////   forgot password and change password work start here/////////
else if (isset($_POST["action"]) &&  $_POST["action"] == 'forgot_password_submit')
	{

		if (isset($_POST["email"]) && isset($_POST["token"])  && isset($_POST["password"])) {
			
		$email=$_POST["email"];
		$token=$_POST["token"];
		$password=$_POST["password"];
	
		$db_id="";
		$db_token="";

	
$query="select * from user where email='$email' and Access_token='$token'";
		$result=mysqli_query($con,$query);

		while ($row = mysqli_fetch_assoc($result)) 
			{
					$db_id=$row['id'];
					$db_token=$row['Access_token'];
			}

			if ($token== $db_token) {
				
				$qr="UPDATE user set password='$password' where id=$db_id";	
			mysqli_query($con,$qr);
			
			$return_data= array('status' => true ,
								'messege'=>'Change password success full !!',
							
						 		);
			}
			
							else{
			$return_data= array('status' => false ,
								'messege'=>'Invaled token!!' 
								);
	}
			
	
		
			}
			else{
			$return_data= array('status' => false ,
								'messege'=>'All field are required!!' 
								);
	}
			//	echo json_encode($return_data);
		
		}
		 else{
$return_data= array('status' => false ,
								'messege'=>'please select action=forget_password,forgot_password_submit!!' 
								);
		
		 }

	
	


		echo json_encode($return_data);


?>
