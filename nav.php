<?php session_start();
if(isset($_GET['logOut'])){
  session_unset();
  session_destroy();
  header("location:/hospital/Admin/login.php");

}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/hospital/index.php">HOSPITAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
   <?php if($_SESSION['admin']): ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Doctors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/hospital/doctors/Add.php">Add Doctor</a>
          <a class="dropdown-item" href="/hospital/doctors/list.php">List Doctors</a>
        
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patients
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/hospital/patients/Add.php">Add Patient</a>
          <a class="dropdown-item" href="/hospital/patients/list.php">List Patients</a>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/hospital/Admin/addadmin.php">Add Admin</a>
          
        
      </li>
    <form action="">
      <button name= "logOut" class="btn btn-outline-danger my-5 my-sm-0" type="submit">log out</button>
    </form>
     </ul>
     <?php else :?>
      <a href="/hospital/admin/login.php" class="btn btn-outline-success my-5 my-sm-0" type="submit">lOGIN</a>
      <?php endif;?>
   </div>
</nav>
 