
<?php 
session_start();
$server="localhost";
$username="root";
$password="";
$database="3rs";

$con=mysqli_connect($server,$username,$password,$database);
$sql= "SELECT * from users where 1";
// $result=$con->query($sql);
$result=mysqli_query($con,$sql);
function add() {
if($_SESSION["role_type"]=="admin"){
  header('location:add_user.php');

}
}
if(isset($_POST['login']))
{   $email =$_POST['email'];
    $password = $_POST['psw'];
$select = mysqli_query($con,"select * from users where  email ='$email' and password ='$password' ");
$logged_in_user = mysqli_fetch_assoc($select);

if ($logged_in_user['role_type'] == "admin") {
  header("location:add_user.php");}

else{
  echo "<script>alert('not authorized');
</script>";	
} 
}

?>


<!DOCTYPE html>
<html >
  <head>
  <link rel="stylesheet" href="../css/admin.css">

</head>
<body>
    
<?php include"sidbar.php"; ?>   
  

    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="fas fa-bars"></span>
          </label>
          Admin
        </h2>

        

        <div class="user-wrapper">
         <img src="data:image/png;base64,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" width="40px" height="40px" alt="profile-img">
         <div class="">
            <h4>Hi <?php echo $_SESSION["name"] ?></h4>
            <small> Admin</small>
         </div>
        </div>
      </header>

      <main>
       

        <div class="recent-grid">
          <div class="projects">
            <div style="width: 950px;" class="card">
              <div class="card-header">
                <h2>User</h2>
               
             <form action="add_user.php">   <button >add_new_user</button><form>
               


              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                  <thead>
                    <tr>
                      <td>#</td>
                      <td>First Name</td>
                      <td>Last Name</td>
                      <td>Email</td>
                      <td>Password</td>
                      <td>Phone</td>
                      <td>Role Type</td>
                      <td>Edit</td>
                      <td>Delete</td>

                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($result as $row) {   ?>
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['f_name'];?></td>
                      <td><?php echo $row['l_name'];?></td>	
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td> <?php echo $row['role_type'];?> </td>
                      <td> <a href="edit_user.php?id=<?php echo $row['id'];  ?> "class="btn btn-primary"> edit </a></td>
                       <td><a href="delete_user.php?id=<?php echo $row['id'];  ?> "class="btn btn-danger"> Delete</a></td>
                    </tr>
                    <?php } ?>
            
                  </tbody>

                </table>
                </div>
              </div>

            </div>

          </div>
       
          
        </div>  

      </main>
    </div>


</body>
</html>

