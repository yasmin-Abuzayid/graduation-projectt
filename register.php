<?php
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['register']))
{
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$role_type="customer";
$sql="insert into users(f_name ,Email, Phone,Password, l_name,role_type)
values  
('$fname','$email','$phone','$psw','$lname','$role_type');";

$res=mysqli_query($con,$sql);

    
}



?>


<html lang="en">
<head>
  
    <title>LOGIN</title>
 
 <link rel="stylesheet" href="css/nav.css">
 <link rel="stylesheet" href="css/auth.css">

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
<form action="#" method="post">
    <div class="wrapper">
        <div class="login">
          <div class="login-form">      
            <h1 class="login-title">Register</h1>
            <div class="form-wrapper">
            <div class="input-wrapper">
                 <label class="label" for="f_name">First Name</label>
                <input class="input" type="text" id="f_name" name="f_name" required autocomplete="off"/>
              </div><br>
              <div class="input-wrapper">
                 <label class="label" for="f_name">Last Name</label>
                <input class="input" type="text" id="l_name" name="l_name" required autocomplete="off"/>
              </div><br>
              <div class="input-wrapper">
                 <label class="label" for="email">Phone</label>
                <input class="input" type="text" id="phone" name="phone" required autocomplete="off"/>
              </div><br>
              <div class="input-wrapper">
                 <label class="label" for="email">Email Address</label>
                <input class="input" type="email" id="email" name="email" required autocomplete="off"/>
              </div><br>
          
              <div class="input-wrapper">
                 <label class="label" for="password">Password</label>
                <input class="input" type="password" id="password" name="psw" required/>
              </div><br>
            
              <div class="actions">
                <input class="action" type="submit" name="register" value="Register"/>
                <div class="signup-action">
                  Don't have an account? &nbsp <a class="signup-link" href="login.php">Login</a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="login-decoration">
            
          </div>
        </div>
      </div>
  </form>
</body>
</html>