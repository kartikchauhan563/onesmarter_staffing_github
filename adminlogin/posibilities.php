<?php

    include "connection.php";
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:/login.php');
    }
    if (isset($_POST['submit'])) {
        $title=$_POST['title'];

        $description=$_POST['description'];
        
        $image = $_FILES['file']['name'];
        $target_dir = "../posibilitiesimages/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif","svg");
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
          // Insert record
          
          $query="INSERT INTO `posibilitiessection`(`title`, `description`, `image`) VALUES ('$title', '$description','$image')";
          mysqli_query($conn,$query);
          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image);

          if ($result) {
            $_SESSION['message']="Data Inserted";

        }else {
        echo 'Data not inserted';
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        header("location: posibilities.php");
        exit;

    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="author" >
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
    
    <?php include './components/navigation.php' ?>
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
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">

                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">
                                            <?php echo $_SESSION['email']; ?>
                                        </span>
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
                    <div class="card mt-5">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h1 class="mb-0">Add posibilities</h1>

                                    <form action="posibilities.php" method="POST" enctype="multipart/form-data">
                                        <input type="text" class="form-control" name="title" required
                                            placeholder="Title">
                                        <input type="text" class="form-control mt-3" name="description" required
                                            placeholder="Description">

                                    <input type='file' name='file' />

                                        <button class="btn btn-success" type="submit" value="submit"
                                            name="submit">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer -->
            <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">List of Jobs</h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
            <?php

            $result = mysqli_query($conn,"SELECT * FROM posibilitiessection");

            if (mysqli_num_rows($result) > 0) {
            ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                    Sr.no
                    </th>
                    <th scope="col">
                                Title
                    </th>
                  
                    <th scope="col">
                      Description
                    </th>

                    <th scope="col">
                      Image
                    </th>
                    <th scope="col">
                  Operations
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

                      <td><?php echo $row["title"]; ?></td>
                      <td><?php echo $row["description"]; ?></td>
                      <td><?php echo $row["image"]; ?></td>
                      <td><a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-success" name="delete">Delete</a></td>

                      

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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>
<script>
    <?PHP
    if(isset($_SESSION['message'])){
        ?>
        swal({
  title: "<?php echo $_SESSION['message']; ?>",
  
  icon: "success",
  button: "Add More Jobs",
});
        <?php
        
        unset($_SESSION['message']);
    }
?>

</script>
<style>.bg-success {
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