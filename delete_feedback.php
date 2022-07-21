<?php 
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);

 if (isset($_GET['id'])) {
   $id = $_GET['id'] ; 

   $sql = "DELETE FROM feedback WHERE id = '$id' ";
   $result =mysqli_query($con,$sql);
    if ($result== TRUE)
    {
        header("location:feedback.php");

    }
    else {

    	echo "Error:" . $sql . "br" .$con->error ;
    }

   }
   ?>