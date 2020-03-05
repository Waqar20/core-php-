<?php
session_start();
if (isset($_SESSION['user'])) {
  
  header("location:index.php");
}
else{
$_SESSION["messege"]="Invalid email or password !!";

  header("location:login.php");
}

?>