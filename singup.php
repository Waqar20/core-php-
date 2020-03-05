<?php
///////////////// incude connection file with help of require_once method here !!
require_once('connection.php');

//////////////// signup statement work start here !!

	if (isset($_POST["action"]) &&  $_POST["action"] == 'signup')
	{
		
		if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["contact"]))
		{
			$email=$_POST["email"];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$name =$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$contact=$_POST["contact"];
		$query="INSERT INTO `user`(`name`, `email`, `password`, `contact`,role_id) VALUES ('$name','$email','$password','$contact',1)";
		$result=mysqli_query($con,$query);

		if ($result) {
		$return_data= array('status' => true ,
							'messege'=>'Signup Completed'
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
							'messege'=>'Invalid Email Address!!'
							 );
			}


			}
		else{
		$return_data= array('status' => false ,
							'messege'=>'All field are required!!'
							 );
			}

}



//////////////// login statement work start here !!

elseif (isset($_POST["action"]) &&  $_POST["action"] == 'login')
	{
		if (isset($_POST["email"]) && isset($_POST["password"])) {
			
		$email=$_POST["email"];
		$password=$_POST["password"];
		$db_mail='';
		$db_name='';
		$db_pass='';
		$db_id="";
		$db_contact='';
////////////////////generete token here   ///////////////
	
		$query="select * from user where email='$email' and password='$password'";
		$result=mysqli_query($con,$query);

		while ($row = mysqli_fetch_assoc($result)) 
			{
			$db_mail=$row['email'];
			$db_pass=$row['password'];
			$db_name=$row['name'];
			$db_id=$row['id'];
			$db_contact=$row['contact'];
			}
			if($email == $db_mail && $password == $db_pass){
						
			$return_data= array('status' => true ,

									'user'=> array('ID'=>$db_id,
								'username'=>$db_name,
								'email'=>$db_mail,
								'contact'=>$db_contact)							
								
						 		);
			}
			else{

			$return_data= array('status' => false ,
								'messege'=>'incorrect Email and password    !!',
								
								 );
			}
		}
		 else{
			$return_data= array('status' => false ,
								'messege'=>'All field are required!!' 
								);


			}

	}
 else{
			$return_data= array('status' => false ,
								'messege'=>'action=signup,login required!!' 
								);


			}


		echo json_encode($return_data);


?>