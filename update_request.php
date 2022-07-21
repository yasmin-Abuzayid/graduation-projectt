<?php	
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);
											
if (isset($_GET['id'])) {

$update = "update request set status='Accept' where id =".$_GET['id'];
$sql=	mysqli_query($con,$update);
if ($sql== TRUE)
    {
        header("location:requst.php");

    }

}


?>