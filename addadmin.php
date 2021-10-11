<?php include '../Shared/head.php';
 include '../shared/nav.php';
 include '../general/configDB.php';
 include '../general/function.php';

 if(isset($_POST['signup'])){
 $email = $_POST['username'];
 $password = $_POST['password'];
 $insert = "INSERT INTO `admin` VALUES (NULL , '$email', '$password')";
 $i = mysqli_query($con , $insert);
 }
 auth();

 if($_SESSION['admin']=='Ahmed@yahoo.com'){

 
 ?>

     
 <div class="container col-6">
     <h2 class="text-info text-center"> Signup Page</h2>
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
                     <button name="signup" class="btn btn-info"> sign Up</button>
            </form>
         </div>
         </div>  
     </div>
<?php
}else{
    echo "not autorized";
}


include '../Shared/script.php'?>