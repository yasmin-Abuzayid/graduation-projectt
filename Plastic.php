<?php

session_start();
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['Request']))
{
$weight=$_POST['weight'];
$address=$_POST['address'];
$status="pending";
$kind="Plastic";
$user_id=$_SESSION['id'];
//  echo $_SESSION['id'];

$sql="insert into request(weight ,address, status,kind, user_id)
values  
('$weight','$address','$status','$kind','$user_id');";

$res=mysqli_query($con,$sql);
echo "<script>alert('wait for Acceptance');
</script>";	
		echo "<script>window.location='Plastic.php';</script>";
    
}



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/req.css">       
</head>
<body>
<nav>
  <div class="container">
  <img height="65px;" width="100px" src="../photos_3Rs/logo.png">
  
  <div class="nav-list">
  <a href="customer_service.php" class="active">Customer Service</a>
  <a href="Plastic.php">Plastic</a>
  <a href="Metal.php">Metal</a>
  <a href="Paper.php">Paper</a>
  <a href="../logout.php">LogOut</a>
  </div>
 

</nav>
 

<div style="margin-top:150px" class="page-head"> 
            <div style=" background:  url(https://media.greenmatters.com/brand-img/d-9yrYj4m/0x0/why-is-recycling-important-1587135431361.jpg) 
        no-repeat scroll center top / cover;color:#FFF;background-color:#494C53
    position: relative;
    min-height: 170px;" class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 style="background-color:#111 " class="page-title">Plastic Reqest</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->


<!-- FORM -->
  <form  method="post" id="survey">
  <img style=" border-radius:25px;margin-left:360px; "  width="120px"  height="100px" src="../photos_3Rs/log.jpg" > 
  <h2 style="margin-left:280px; letter-spacing:6px;margin-top:10px; ">Reqest For Plastic  </h2>

    <div class="form-section">
      <label for="weight">weight</label>
      <input type="text" name="weight" id="weight" class="form-input"
        placeholder="weight" >
    </div>


    <div class="form-section">
      <label for="address">address	</label>
      <input type="text" name="address" id="address	" class="form-input"
        placeholder="Your address	" >
    </div>

<!-- AGE -->
    <!-- <div class="form-section">
      <label for="age">Age <span class="clue">(optional)</span> </label>
      <input type="number" name="age" id="age" class="form-input" min="18"
        max="99" placeholder="Your Age">
    </div> -->



 



<!-- SUBMIT -->
    <div class="form-section">
      <button type="submit" name="Request" id="submit"> Submit</button>
    </div>
  </form>

  <?php include"../footer.php"; ?>
</body>
</html>