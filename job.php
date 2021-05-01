<?php
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='onesmarter-staffing';

    if (isset($_GET['job'])) {
        $id=$_GET['job'];
      
        $conn= mysqli_connect($hostname,$username,$password,$dbname);
    
        $qry = mysqli_query($conn,"select * from addjobs where id='$id'");
        $row = mysqli_fetch_array($qry);
    }

    
if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $position=$_POST['position'];
    $reservetime=$_POST['reservetime'];

    $resume = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
   
    #upload directory path
    $uploads_dir = 'resumes';
   #TO move the uploaded file to specific location
   move_uploaded_file($tname, $uploads_dir.'/'.$resume);

    $connect= mysqli_connect($hostname,$username,$password,$dbname);
    $query="INSERT INTO `candidates`(`name`, `address`, `state`, `city`, `zip`, `position`, `reservetime`, `resume`) VALUES ('$name','$address','$state','$city','$zip','$position','$reservetime','$resume')";
    $result=mysqli_query($connect,$query);
        if ($result) {
           echo "data inserted";
        }else {
        echo 'Data not inserted';
        }
        mysqli_free_result($result);
        mysqli_close($connect);
        header("location: jobs.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onesmarter Staffing</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,800&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <img id="logo" src="./assets/logo.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="jobs.php">Find Job</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Candidate of the Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Contact Us</a>
                        </li>
                        <li>
                        <a href="logout.php" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- hiresection start -->
    <div class="hiresection">
        <div class="hirerow row">
            <div class="col">
                <h1>Hiring Hiring <br> Hiring! </h1>
                <p>Looking for a <?php echo $row['jobduties'] ?> <br>
                    Job?</p>
            </div>
            <div class="col">
                <img class="hireimage" src="./assets/Component.png" alt="">
            </div>
        </div>
    </div>
    <!-- hiresection end -->

    <!-- job description section start -->
    <div class="jobcontent">

        <h1><?php echo $row['jobduties'] ?></h1>
        <i class="bi bi-clock"></i> 9 minutes ago
<p><?php echo $row['additionalinformation'] ?>
</p>        
        <p>
        <ul>
            <li>Company Name: <?php echo $row['companyname'] ?> </li>
            <li>Job Location: <?php echo $row['joblocation'] ?></li>
            <li>Salary Range: <?php echo $row['salaryrange'] ?></li>
            <li>Experience : <?php echo $row['experience'] ?></li>
            <li>Workschedule: <?php echo $row['workschedule'] ?></li>
            <li>Qualification: <?php echo $row['qualification'] ?></li>
            <li>Job Duties: <?php echo $row['jobduties'] ?></li>

        </ul>

        </p>
    </div>
    <!-- job description section end -->


    <div class="applyjobsection">
        <div class="applyjobrow row">
            <div class="col text-center">
                <img src="./assets/undraw_Resume_re_hkth.png" style="width: 60%;" alt="">
            </div>
            <div class="col">
                <div class="regiform">
                    <form action="job.php" method="POST" enctype="multipart/form-data">
                        <center>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                            <input type="text" class="form-control" name="state" placeholder="State">
                            <input type="text" class="form-control" name="city" placeholder="City">
                            <input type="text" class="form-control" name="zip" placeholder="Zip Code">
                            <input type="text" class="form-control" name="position" placeholder="Position applying for" value="<?php echo $row['jobduties'] ?>">
                            <input type="text" class="form-control" name="reservetime"
                                placeholder="Reserve a time for screening Interview">
                            <div class="row">
                                <div class="col"><input type="File" name="file">
                                </div>
                                <div class="col"> <button class="btn btn-danger" type="submit" value="submit" name="submit">Submit</button></div>
                            </div>

                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- footer start -->
    <div class="footer pt-5">
        <div class="footerrow row">
            <div class="col">
                <img id="footerlogo" src="./assets/logo.png" alt="" srcset="">
                <p> <i class=" bi bi-geo-alt-fill" style="color: red;"></i> Beavercreek, Ohio, USA
                </p>
                <p><i class=" bi bi-envelope-fill" style="color: red;"></i> info@onesmarter.com</p>
                <p><i class=" bi bi-telephone-fill" style="color: red;"></i> +19373446241</p>


            </div>
            <div class="col">
                <h1 class="footerheading">Explore</h1>
                <p>By Coverage</p>
                <hr class="horiline">
                <p>By Company Type</p>
                <hr class="horiline">
                <p>By State</p>

            </div>

            <div class="col">
                <h1 class="footerheading">Our Company</h1>
                <p>About Us</p>
                <hr class="horiline">
                <p>FAQ</p>
                <hr class="horiline">
                <p>President Q&A</p>
                <hr class="horiline">
                <p>Press Releases</p>
                <hr class="horiline">
                <p>Legal</p>


            </div>

            <div class="col">
                <h1 class="footerheading">
                    Industry Info
                </h1>
                <p>News</p>
            </div>

        </div>
    </div>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</body>

</html>
<style>
    img.hireimage {
        width: 80%;

    }

    .hiresection {
        background-color: red;
        padding-top: 70px;
        padding-bottom: 20px;
        padding-left: 87px;
    }

    .hiresection h1 {
        font-family: 'Poppins';
        color: white;
        font-size: 46px;
        font-weight: 900;
    }

    .hiresection p {
        font-family: 'Poppins';
        color: #ffffff9c;
        margin-top: 27px;
    }

    .jobcontent {
        margin-right: 10%;
        margin-left: 10%;
        padding-top: 25px;
        padding-bottom: 25px;

    }

    .jobcontent h1 {
        font-family: 'Poppins';
    }

    .jobcontent p {
        font-family: 'Poppins';
        margin-top: 10px;
    }

    li {
        font-family: 'Poppins';
    }

    .regiform {
        margin-right: 150px;
        margin-bottom: 50px;
    }

    @media only screen and (max-width: 600px) {
        .hirerow {
            display: block;
        }

        .applyjobrow.row {
            display: block;
        }

        .regiform {
            margin-right: 50px;
            margin-bottom: 50px;
            margin-left: 50px;
        }

        .hiresection {
            background-color: #12356D;
            padding-top: 70px;
            padding-bottom: 20px;
            padding-left: 45px;
        }

    }
</style>