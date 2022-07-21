
<?php 
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);
$sql= "SELECT * from feedback where status='Accept'";

$result=mysqli_query($con,$sql);

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/test.css">
</head>
<body>
<nav>
  <div class="container">
    <img height="65px;" width="100px" src="photos_3Rs/logo.png">
  
  <div class="nav-list">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="Our_Services.php">Our Services</a>
  <a href="contact.php">Contact Us</a>
  <a href="testamonial.php">testamonial</a>
  <a href="register.php" class="active">sign up </a>
  <a href="login.php" class="active">Login</a>
  </div>
 

</nav>
<?php foreach ($result as $row) {   ?>
<div class="albums">
    <div class="album">
      <img class="album__artwork" src="https://t4.ftcdn.net/jpg/02/60/24/95/360_F_260249535_5PUI2qJ2hdmhbAiEiBcvHPC8ckTpN6rJ.jpg">
      <div class="album__details">
        <h2><?php echo $row['name'];?></h2>
        <p class="album__artist"><?php echo $row['email'];?></p>
        <p class="album__desc"><?php echo $row['message'];?></p>
      </div>
    </div>
  
  </div>
  <?php } ?>
  <?php include"footer.php"; ?>      
  
</body>

    </html>