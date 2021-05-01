<?php
    include "connection.php";
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: ./Sercureaccess/login-user.php');
    }
   $result = mysqli_query($conn,"SELECT * FROM candidates");
?>
<!DOCTYPE html>
<html>

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>OneSmarter Dashboard</title>
  <?php  include './components/csslinks.php'; ?>
  
</head>

<body>
   <?php  include './components/navigation.php'; ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php include './components/topnav.php' ?>
 <!-- Topnav end-->
 <!-- Header start-->
    <?php include './components/dashboardheader.php' ?>
 <!-- Header end-->
  </div>
  <?php include './components/jslinks.php' ?>
</body>

</html>
<style>.bg-success {
    background-color: #ff3000 !important;
}
.navbar-vertical .navbar-brand-img, .navbar-vertical .navbar-brand > img {
    max-width: 100%;
    max-height: 4rem;
}
</style>