<?php include '../shared/head.php';
 include '../shared/nav.php';
 include '../general/configDB.php';
 include '../general/function.php';
 $select = "SELECT patients.ID , patients.Name patients , patients.Email , doctors.Name doc FROM patients JOIN doctors ON
 patients.DoctorId = doctors.ID";
$sel = mysqli_query($con , $select);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `patients` WHERE ID = $id";
    $d = mysqli_query($con , $delete);
    testMesage($d ,$delete);
    header("location:/hospital/doctors/list.php");
}
auth();
?>
    
    <div class="container col-6">
      <h1 class="text-center text-info"> Patient List</h1>
    <div class="card">
        <div class="card-body">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>FeildID</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($sel as $data){ ?>
            <tr>
                <th><?php echo $data['ID']?> </th>
                <td><?php echo $data['patients']?> </td>
                <td><?php echo $data['Email']?> </td>
                <td><?php echo $data['doc']?> </td>
                <td><a href="add.php?edit=<?php echo $data['ID']?>" class="btn btn-info"> Edit</a></td>
                <td><a href="list.php?delete=<?php echo $data['ID']?>" class="btn btn-danger"> Delete</a></td>

            </tr>
            <?php }?>
        </table>

          </div>

        </div>
        </div>






<?php include '../shared/script.php' ?>
