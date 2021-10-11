<?php include '../Shared/head.php';
 include '../shared/nav.php';
 include '../general/configDB.php';
 include '../general/function.php';


 if(isset($_POST['login'])){
 $email = $_POST['username'];
 $password = $_POST['password'];

 $select = "SELECT * FROM `admin` WHERE username ='$email' and password ='$password'";
$sss = mysqli_query($con,$select);
$numRows = mysqli_num_rows($sss);
$row = mysqli_fetch_assoc($sss);
  
if($numRows > 0 ){
    echo "true";
    $_SESSION['admin'] = $email;
    header("location:/hospital/index.php");
}else{
    echo "false";
}

 }
 
 print_r($_SESSION);
 ?>

     
 <div class="container col-6">
     <h2 class="text-info text-center"> Login Page</h2>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group ">
                    <label> User Email</label>
                    <input type="text" name="username" class="form-control">
                     </div>
                     <div class="form-group">
                    <label> User Password</label>
                    <input type="text" name="password" class="form-control">
                     </div>
                     <button name="login" class="btn btn-info"> Login</button>
            </form>
         </div>
         </div>  
     </div>
<?php include '../Shared/script.php'?>