
<?php
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$status="pandding";
$sql="insert into feedback(name ,Email,Phone,message,status)
values  
('$name','$email','$phone','$message','$status');";

$res=mysqli_query($con,$sql);

    
}



?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      
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

    <div class="contain">

<div class="wrapper">

  <div class="form">
    <h4>GET IN TOUCH</h4>
    <h2 class="form-headline">Send us a message</h2>
    <form id="submit-form" method="post">
      <p>
        <input id="name" class="form-input" type="text" name="name" placeholder="Your Name*">
        <small class="name-error"></small>
      </p>
      <p>
        <input id="email" class="form-input" type="email" name="email" placeholder="Your Email*">
        <small class="name-error"></small>
      </p>
      <p class="full-width">
        <input id="company-name" class="form-input" type="text" name="phone" placeholder="Phone" required>
        <small></small>
      </p>
      <p class="full-width">
        <textarea  minlength="20" id="message" cols="30" rows="7" name="message" placeholder="Your Message*" required></textarea>
        <small></small>
      </p>
      <p class="full-width">
        <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
      </p>
      <p class="full-width">
        <input type="submit" class="submit-btn" value="Submit" name="submit" onclick="checkValidations()">
        <button class="reset-btn" onclick="reset()">Reset</button>
      </p>
    </form>
  </div>

  <div class="contacts contact-wrapper">

    <ul>
     
      <span class="hightlight-contact-info">
        <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> 3Rs@gmail.com</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">0785797599</span></li>
      </span>
    </ul>
  </div>
</div>
</div>
<?php include"footer.php"; ?>

    </body>
</html>
