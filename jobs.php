<?php

require_once "./login/controllerUserData.php"; 

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ./login/reset-code.php');
            }
        }else{
            header('Location: ./login/user-otp.php');
        }
    }
}else{
    header('Location: ./login/login-user.php');
}


include './connection.php';

   $result = mysqli_query($con,"SELECT * FROM addjobs"); 
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
            <a href="index.html"></a>
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
                            <a class="nav-link " aria-current="page" href="./">Home</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link active"  aria-current="page" href="jobs.php">Find Job</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./Candidateoftheweek.php">Candidate of the Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./login/logout-user.php">Logout</a>
                        </li>
                        <!-- <a href="./login/logout-user.php" class="stretched-link"  >
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                          </a>
                        </li> -->
                       
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->



    <!-- job start -->
    <div class="job">

        </center>
        <div class="whorow row">
            <div class="col">
                <img class="whowere" src="./assets/undraw_Hire_re_gn5j.png" alt="" srcset="">
            </div>
            <div class="col para">
                <p id="jobpara">We listen closely to your needs and concerns when it comes to finding the right
                    candidate. We strive to tick all the boxes on your check list of qualification and work consistently
                    with you to meet those expectations. </p>
            </div>
        </div>
        <div class="listofjob">
            <center>
                <h1>TYPES OF PLACEMENT</h1>
            </center>
           <?php
           $fetchjob = "SELECT * FROM addjobs";
           ?>
            <div class="container">
            <div class="row">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                <div class="column" >
                    <a href="job.php?job=<?php echo $row['id'];?>" id="joblist" name="job"><?php echo $row["jobduties"]; ?></a>
                </div>
                <?php $i++;
                }
                ?>
            </div>
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
    <!-- job end -->










    <!-- footer start -->
    <div class="footer">
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


    .listofjob {
        background-color: #F8F5F5;
        text-align: center;
        margin-top: 20px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .listofjob h1 {
        font-size: 27px;
        font-family: 'Poppins';
        font-weight: 600;
    }

    #jobpara {
        font-family: 'Poppins';
        margin-right: 10%;
        width: 80%;

    }

    .jobname {
        color: black;
        font-family: 'Poppins';
        text-decoration: none;

    }

    .listofjob h1 {
        font-family: 'poppins';
    }

    .job {
        margin: 10px;
    }

    @media only screen and (max-width: 600px) {
        #jobpara {
            font-family: 'Poppins';
            /* margin-right: 10%; */
            width: 100%;
        }

        .whowere {
            width: 87%;
            margin-left: 6%;
            /* margin-top: 33px; */
        }
    }
    .column {
  float: left;
  width: 25%;
  padding: 10px;
  background-color: #F8F5F5;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
a#joblist {
    color: black;
    text-decoration: none;
    font-family: 'Poppins';
    font-size: 18px;
}
</style>
