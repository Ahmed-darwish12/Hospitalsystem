<?php include '../shared/head.php';
 include '../shared/nav.php';
 include '../general/configDB.php';
 include '../general/function.php';
      
if(isset($_POST['send'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $FeildId = $_POST['DoctorId'];
    $insert  = "INSERT INTO `patients` VALUES(NULL , '$name' , '$email','$FeildId')";
    $i = mysqli_query($con , $insert);
    testMesage($i , "INSERT");
}
$select = "SELECT * FROM `doctors`";
$Se = mysqli_query($con , $select);

$name ="";
$email = "";
if(isset($_GET['edit'])){
 $id = $_GET['edit'];
 $select = "SELECT * FROM `doctors`WHERE id = $id ";
 $ss = mysqli_query($con , $select);
 $row = mysqli_fetch_assoc($ss);
 $name =  $row['Name'];
 $email = $row['Email']; 

 if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $FeildId = $_POST['FeildId'];
    $update  = "UPDATE `doctors` SET name = '$name' , email = '$email', FeildId ='$FeildId' WHERE id =$id)";
    $u = mysqli_query($con , $update);
    header("location:/hospital/doctors/list.php");
}

}
auth();
?>
    
<div class="container col-6">
    <h1 class="text-center text-info"> Add Patients</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label> Patient Name</label>
                    <input type="text" value="<?php echo $name?>" name="name" class="form-control">
            </div>
            <div class="form-group">
                    <label> Patient Email</label>
                    <input type="text" value="<?php echo $email?>" name="email" class="form-control">
            </div>
            <div class="form-group">
                    <label> Patient DoctorID</label>
                    
                    <select name="FeildId" class="form-control">

                        <?php foreach($Se as $data){?>                
                        <option value="<?php echo $data['ID']?>"> <?php echo $data['Name']?></option>
                        <?php }?>
                    </select>
            </div>
            <button name="send" class="btn btn-info"> Send Data</button>
            <button name="update" class="btn btn-info"> update Data</button>

            </form>
        </div>
    </div>
</div>




<?php include '../shared/script.php' ?>
