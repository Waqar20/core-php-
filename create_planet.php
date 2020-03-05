<?php
///////////////// incude connection file with help of require_once method here !!
require_once('connection.php');

if (isset($_POST["action"]) &&  $_POST["action"] == 'create_planet')
{
// print_r($_FILES); die();
	if (isset($_POST["name"]) && isset($_POST["persons"]) && isset($_POST["location"]) && isset($_POST["price"]))
{
$name =$_POST["name"];
$persons=$_POST["persons"];
$location=$_POST["location"];
$price=$_POST["price"];


 if (isset($_FILES["file"]['name'])) {

  $countfiles = count($_FILES['file']['name']);
  //echo $countfiles;die();
for($i=0;$i<$countfiles;$i++){
$filename = $_FILES['file']['name'][$i];
$image='upload/'.$filename;
// Upload file work here
move_uploaded_file($_FILES['file']['tmp_name'][$i],$image);
	 }
 $img = json_encode($_FILES['file']['name']);

}

 else{
$countfiles = count($_FILES);
// $imgg[]="";
for($i=0;$i<$countfiles;$i++){
$filename = $_FILES["file$i"]['name'];
$image='upload/'.$filename;
$imgg []= $filename;
// Upload file work here
move_uploaded_file($_FILES["file$i"]['tmp_name'],$image);

}

 $img = json_encode($imgg);

}




$query="INSERT INTO `planet`(`name`, `persons`, `location`, `price`,img,p_id) VALUES ('$name','$persons','$location',$price,'$img','$countfiles')";
$result=mysqli_query($con,$query);

if ($result) {
///////////get last id here
 // $last_id = $con->insert_id;

//  if (isset($_FILES["file"]['name'])) {

//   $countfiles = count($_FILES['file']['name']);
//   //echo $countfiles;die();
// for($i=0;$i<$countfiles;$i++){
// $filename = $_FILES['file']['name'][$i];
// $image='upload/'.$filename;
// // Upload file work here
// move_uploaded_file($_FILES['file']['tmp_name'][$i],$image);
// $query="INSERT INTO images (p_id,image) VALUES ( '".$last_id."', '".$image."')";
// $con->query($query) or die("query error");  	
//  }
//  $img = json_encode($_FILES['file']['name']);

// }
//  else{
// $countfiles = count($_FILES);
// for($i=0;$i<$countfiles;$i++){
// $filename = $_FILES["file$i"]['name'];
// $image='upload/'.$filename;
// // Upload file work here
// move_uploaded_file($_FILES["file$i"]['tmp_name'],$image);
// $query="INSERT INTO images (p_id,image) VALUES ( '".$last_id."', '".$image."')";
// $con->query($query) or die("query error");
// }


// }
$return_data= array('status' => true ,
					'messege'=>'Planet has been created'
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
					'messege'=>'All field are required!!'
					 );
	}
}elseif (isset($_POST["action"]) &&  $_POST["action"]=='edit_planet')
{
// echo "<pre>";
// print_r($_FILES);die;
if (isset($_POST["name"]) && isset($_POST["persons"]) && isset($_POST["location"]) && isset($_POST["price"]) && isset($_POST["id"]) && isset($_FILES))
{
$id=$_POST['id'];
$name =$_POST["name"];
$persons=$_POST["persons"];
$location=$_POST["location"];
$price=$_POST["price"];

 if (isset($_FILES["file"]['name'])) {

  $countfiles = count($_FILES['file']['name']);
  //echo $countfiles;die();
for($i=0;$i<$countfiles;$i++){
$filename = $_FILES['file']['name'][$i];
$image='upload/'.$filename;
// Upload file work here
move_uploaded_file($_FILES['file']['tmp_name'][$i],$image);
	 }
 $img = json_encode($_FILES['file']['name']);

}

 else{
$countfiles = count($_FILES);
// $imgg[]="";
for($i=0;$i<$countfiles;$i++){
$filename = $_FILES["file$i"]['name'];
$image='upload/'.$filename;
$imgg []= $filename;
// Upload file work here
move_uploaded_file($_FILES["file$i"]['tmp_name'],$image);

}

 $img = json_encode($imgg);

}

 // $img = json_encode($_FILES['file']['name']);

$query="UPDATE `planet` SET `name`='$name',`persons`='$persons',`location`='$location',`price`=$price ,img='$img',p_id='$countfiles' WHERE id =$id";
$result=mysqli_query($con,$query);

if ($result) {
/////////get last id here
$return_data= array('status' => true ,
					'messege'=>'Data UPDATE SUCCESS !'
					 );
}
else{
$return_data= array('status' => false ,
					'messege'=>'Data UPDATETION error!!'
					 );
}
	}
else{
$return_data= array('status' => false ,
					'messege'=>'All field are required!!'
					 );
	}

}

///////////////////////////////////////delete planet work here
elseif (isset($_POST["action"]) &&  $_POST["action"] == 'del_record'){


$id = $_POST["id"];
$query="delete from planet where id ='$id'";

	$con->query($query);
	
$result=mysqli_affected_rows($con);


if($result){

// $query="SELECT * FROM `planet` WHERE id  = $id";
// $res=mysqli_query($con,$query);
// while ($row=mysqli_fetch_array($res)){
// 	$image = json_decode($row['img']);

// // $image= $row['img'];
// 	for ($i=0; $i < $row['pr_id']; $i++) { 

// echo 'upload/'.$image[$i];die();
//  unlink('upload/'.$image[$i]);

// }


// }


$return_data = array(
'status' => true ,
'message' => 'Data deleted '
);

}
else{

$return_data = array(
'status' => false,
'message' => 'not delete' 
);

}






}
else {
$return_data = array(
'status' => false,
'message' => 'please select action=create_planet or edit_planet del_record '
 );
}

echo json_encode($return_data);


/*   
	//post man image work and first image work  
$last_id = $con->insert_id;
 $countfiles = count($_FILES['file']['name']);

		for($i=0;$i<$countfiles;$i++){
		 $filename = $_FILES['file']['name'][$i];
		 $image='upload/'.$filename;
// Upload file work here
	 move_uploaded_file($_FILES['file']['tmp_name'][$i],$image);  	
/////////insert multiple images here 
$query="INSERT INTO images (p_id,image) VALUES ( '".$last_id."', '".$image."')";
	$con->query($query) or die("query error");
}

*/


?>