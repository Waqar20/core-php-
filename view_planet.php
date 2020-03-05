<?php

///////////////// incude connection file with help of require_once method here !!
require_once('connection.php');

// echo "hello";die();

//////////////////////////get record

//   *multi img select query {   SELECT name , image from planet INNER JOIN images on planet.id=images.p_id   }///
if (isset($_POST['action']) && $_POST['action']=="get_allplanet_record")
 {
	

  $qr="SELECT id , name, persons,location,price,img FROM planet";
  $res= mysqli_query($con,$qr);
      
      if($res){
              
              while ($row = mysqli_fetch_assoc($res)) {
                $data[]=$row;
               //  $img = json_decode($row['img']);

        			}
    	 
       $result = array(
            'status' =>true ,
            'messege'=> 'All data here !',
            'user'=> $data

           );
      } 
      else
      {
        $result = array(
            'status' =>false ,
            'messege'=> 'Something Error !',
           
           );
      }
 					
         
}


/////////////////////////get by id
elseif (isset($_POST['action']) && $_POST['action']=="get_rec_by")
 {
		if (isset($_POST['id'])) {
		$id=$_POST['id'];
  	// $qr="select planet.id, name, persons,location,price ,image FROM planet INNER JOIN images on planet.id=p_id where planet.id=$id";
    $qr ="SELECT * FROM planet where id =$id";
  	$res= mysqli_query($con,$qr);
  	if($res){
$data[]="";
      		while ($row = mysqli_fetch_assoc($res)) {

        		$data[]=$row;

      		}

      $result = array(
        'status' =>true ,
        'messege'=> 'All data here !',
        'user'=>$data
         );

		}else{

      $result = array(
            'status' =>false ,
            'messege'=> 'Something Error!',
          
             );

    }
 					
 
	} 
  else {

    $result = array(
            'status' =>false ,
            'messege'=> 'id not found!',
         
             );

  }

}
  else {

    $result = array(
            'status' =>false ,
            'messege'=> 'action =get_rec_by,get_allplanet_record require'
             );

  }

    echo json_encode($result);

?>