<?php
		///////////////// incude connection file with help of require_once method here !!
		require_once('connection.php');

		/// view users 			<--------<

		if (isset($_POST["action"]) &&  $_POST["action"] == 'view_user')
			{
					$qr="select * from user";
		  	$res= mysqli_query($con,$qr);

		  	if(mysqli_num_rows ( $res )>0){

				while ($row = mysqli_fetch_assoc($res)) {

				$result[]=$row;
					}

					$result = array(
		  					'status' =>true ,
		  					'messege'=> 'All data here !',
		  					'user'=>$result
		  					 );

						}
		 					else{
				$result = array(
		  					'status' =>false ,
		  					'messege'=> 'Sorry data not found !',
		  		
		  					 );

		 					}
		 									}

				/////		/// view users 			<--------<

		elseif (isset($_POST['action']) && $_POST['action']=="get_user_by_id")
		 {
				if (isset($_POST['id'])) {
				$id=$_POST['id'];
		  	$qr="select * from user where id = $id";
		  	$res= mysqli_query($con,$qr);
		  if(mysqli_num_rows ( $res )>0){

				while ($row = mysqli_fetch_assoc($res)) {

				$result=$row;
					}

					$result = array(
		  					'status' =>true ,
		  					'messege'=> 'All data here !',
		  					'user'=>$result
		  					 );
						}
										else {
					  $result = array(
					    'status' => false,
					    'message' => 'Data not found'
					     );
					     	}


						}

						else {
					  $result = array(
					    'status' => false,
					    'message' => 'ID is requird !! '
					     );
					}
					}
			
//// edit user work start <--------------<
	elseif (isset($_POST["action"]) &&  $_POST["action"] == 'edit_user')
	{
		
		if (isset($_POST["id"])&&isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])
		&& isset($_POST["contact"])  )
		{
		$id=$_POST['id'];
		$name =$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$contact=$_POST["contact"];
		
		$query="UPDATE `user` SET `name`='$name',`password`='$password',`contact`='$contact',`email`='$email' WHERE id =$id";
		$result=mysqli_query($con,$query);

		if ($result) {
/////////get last id here
		

	
		$result= array('status' => true ,
							'messege'=>'User UPDATE SUCCESS !'
							 );
		}
		else{
		$result= array('status' => false ,
							'messege'=>'User UPDATETION error!!'
							 );
		}
			}
		else{
		$result= array('status' => false ,
							'messege'=>'All field are required!!'
							 );
			}
		
}
/// delete user work start here 
		elseif (isset($_POST["action"]) &&  $_POST["action"] == 'del_user')
		{

if (isset($_POST['id'])) {
	$id = $_POST['id'];
$query="delete from user where id=$id";
		$result=mysqli_query($con,$query);

		if ($result) {
/////////get last id here
		

	
		$result= array('status' => true ,
							'messege'=>'User Delete SUCCESS !'
							 );
		}
		else{
		$result= array('status' => false ,
							'messege'=>'User DELETION error!!'
							 );
		}

	
}


					else {
					  $result = array(
					    'status' => false,
					    'message' => 'id is required'
					     );
					}


		}



					else {
					  $result = array(
					    'status' => false,
					    'message' => 'please select action=view_user or get_user_by_id,edit_user,del_user'
					     );
					}





		    echo json_encode($result);


		?>