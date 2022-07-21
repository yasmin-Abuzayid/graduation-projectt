<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['login']))
{   $email =$_POST['email'];
    $password = $_POST['psw'];

   $select = mysqli_query($con,"select * from users where  email ='$email' and password ='$password' ");
   if(mysqli_num_rows($select)>0){
    $logged_in_user = mysqli_fetch_assoc($select);
    $_SESSION["name"]=$logged_in_user['f_name'];
     $_SESSION["password"]=$logged_in_user['password'];
     $_SESSION["id"]=$logged_in_user['id'];
     $_SESSION["role_type"]=$logged_in_user['role_type'];


    
if ($logged_in_user['role_type'] == "admin") {
    header("location:admin/index.php");}

if($logged_in_user['role_type']=="customer"){
 header('location:customer/customer_service.php');
   }
   if( $logged_in_user['role_type']=="employee"){
    header('location:employee/index.php');
      }
    

}
else{
    echo '<script language="javascript">';
    echo 'alert(message successfully sent)';  //not showing an alert box.
    echo '</script>';
}
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
            <h1 class="login-title">Login</h1>
            <div class="form-wrapper">
              <div class="input-wrapper">
                 <label class="label" for="email">Email Address</label>
                <input class="input" type="email" id="email" name="email" required autocomplete="off"/>
              </div><br>
              <div class="input-wrapper">
                 <label class="label" for="password">Password</label>
                <input class="input" type="password" id="password" name="psw" required/>
              </div>
              <div class="action-help">
                <a class="help-link" href="#">Forgot your password?</a>
              </div>
              <div class="actions">
                <input class="action" type="submit" name="login" value="Login"/>
                <div class="signup-action">
                  Don't have an account? &nbsp <a class="signup-link" href="register.php">Sign Up</a>
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