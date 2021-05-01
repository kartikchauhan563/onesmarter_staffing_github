<?php

include 'connection.php';
if (isset($_GET['jobstatus'])) {
    $id=$_GET['jobstatus'];
  
    $qry = mysqli_query($conn,"select * from candidates where id='$id'");
    $row = mysqli_fetch_array($qry);
}

if(isset($_POST['submit'])) // when click on Update button
{
        $jobstatus=$_POST['jobstatus'];
        
        $query="UPDATE `candidates` SET `jobstatus`='$jobstatus' WHERE `id`='$id'";
        $result=mysqli_query($conn,$query);
        if ($result) {
            echo "data updated!";
         }else {
         echo 'Data not updated';
         }
         mysqli_free_result($result);
         mysqli_close($conn);
         header("location: dashboard.php");
 exit;
 }   	

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
    <link rel="icon" href="https://onesmarter.com/assets/images/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->

    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="./dashboard.php">
                    <img src="https://onesmarter.com/assets/images/logo.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="addjob.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Add Jobs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./candidatelist.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">List of Candicates</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./listofjobs.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">List of Jobs</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="./updatejob.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Update Jobs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./listofusers.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">List of Users Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./addcandidateoftheweek.php">
              <i class="fas fa-user-friends"></i>                <span class="nav-link-text">Add Candidate of the Week</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          
        </div>
      </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
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
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">

                                    
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
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Onesmarter Staffing Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                               
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
                    <div class="card mt-5">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h1 class="mb-0">Add New Jobs</h1>

                                    <form action="" method="POST">
                                        <p><?php echo $row['name'] ?></p>
                                        <p><?php echo $row['address'] ?></p>
                                        <p><?php echo $row['state'] ?></p>
                                        <p><?php echo $row['city'] ?></p>
                                        <p><?php echo $row['zip'] ?></p>
                                        <p><?php echo $row['position'] ?></p>
                                        <p><?php echo $row['reservetime'] ?></p>
                                        <p><?php echo $row['resume'] ?></p>
                                          <div class="ml-2">
                                        <input class="form-check-input" type="checkbox" name="jobstatus" id="jobstatus" value="selected" >Check here to select Candidate
                                      </div>
                                        <button class="btn btn-danger" type="submit" value="submit" id="submit"
                                            name="submit">Update Status</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer -->
           
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
<style>.bg-success {
    background-color: #ff3000 !important;
}
.navbar-vertical .navbar-brand-img, .navbar-vertical .navbar-brand > img {
    max-width: 100%;
    max-height: 4rem;
}
</style>