<?php

include "connection.php";

    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:/login.php');
    }
   
$result = mysqli_query($conn,"SELECT * FROM candidates");

 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>OneSmarter Dashboard</title>
  <!-- Favicon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="icon" href="https://onesmarter.com/assets/images/logo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <?php  include './components/navigation.php'; ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-success border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['email']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <!-- <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
       
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">List of Candidates</h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
    <th scope="col">
    Sr.no
    </th>
    <th scope="col">
    Name
    </th>
    <th scope="col">
    Address
    </th>
    <th scope="col">
    State
    </th>
    <th scope="col">
    City
    </th>
    <th scope="col">
    Zipcode
    </th>
    <th scope="col">
    position
    </th>
    <th scope="col">
    Reserve Time
    </th>
    <th scope="col">
    Resume
    </th>
    <th scope="col">
    Select or not
    </th>
    <th scope="col">
    Update status
    </th>
     </tr>
                </thead>
                <tbody>
                <?php
$i=1;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $i ?></td>

    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["state"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["zip"]; ?></td>
    <td><?php echo $row["position"]; ?></td>
    <td><?php echo $row["reservetime"]; ?></td>
 


 
    <td><a href="download.php?file=<?php echo $row['resume']?>"><?php echo $row["resume"]; ?></a></td>
    <td><?php echo $row["jobstatus"]; ?></td>
    <td><a href="selectcandidate.php?jobstatus=<?php echo $row['id'];?>" class="btn btn-success" name="jobstatus">Update Job Status</a></td>

</tr>
<?php
$i++;
}
?>
                </tbody>
              </table>
              <?php
}
else{
    echo "No result found";
}
?>
            </div>
          </div>
        </div>
        
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="" class="font-weight-bold ml-1" target="_blank">Onesmarter</a>
            </div>
          </div>
         
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>

<style>.bg-success{
    background-color: #ff3000 !important;
}
.btn-success{
  background-color: #ff3000 !important;

}

.navbar-vertical .navbar-brand-img, .navbar-vertical .navbar-brand > img {
    max-width: 100%;
    max-height: 4rem;
}

</style>