<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'onesmarter-staffing');
$result = mysqli_query($con,"SELECT * FROM employeestory");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onesmarter Staffing</title>

    <?php include './user_components/headerlinks.php' ?>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

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
                            <a class="nav-link active " aria-current="page"  >Home</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="jobs.php">Find Job</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./Candidateoftheweek.php">Candidate of the Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                        </li>
                        <!-- <li>
                        <a href="logout.php" class="dropdown-item">
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
    <!-- header start -->
    <?php include './user_components/header.php'?>
    <!-- header end -->
    <!-- whoweare start -->
    <?php include './user_components/whoweare.php'?>

    <section>
<div class="indiahiring mt-5 mb-5" style="
    text-align: center;
">
    <div class="container">
        <center><h1 style="width: 50%; font-weight:800; ">The Possibilities of <span style="color: red;">Remote
        hiring</span> from India</h1></center>
    <div class="row mt-4 pt-5">

    <?php
    
            $post = mysqli_query($con,"SELECT * FROM posibilitiessection");
    
            
                foreach ($post as $post) {
                    
                    ?>

    <div class="col-md-4" >
        <img src="posibilitiesimages/<?php echo $post['image'];?>" width="88px" alt="">
            <h5  class="mt-2" ><strong><?php echo $post['title'];?></strong></h5>
            <p id="indiahiringpara"><?php echo $post['description'];?></p>

    </div>
    <?php 
                }
    
    ?>


    <!-- <div class="col-4">
        <img src="./assets/india2.png" width="88px" alt="">
            <h5>Headings</h5>
            <p style="width: 50%;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
    </div>
    <div class="col-4">
        <img src="./assets/india3.png" width="88px" alt="">
            <h5>Headings</h5>
            <p style="width: 50%;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
    </div> -->
    </div>
    </div>
</div></section>
    
    <!-- whoweare end -->
    <!-- find job section start -->
    <?php include './user_components/findjob.php'?>
    
    <!-- find job section end  -->
    <?php include './user_components/featuredsection.php'?>
    
    <!-- services section start -->
    <?php include './user_components/services.php'?>

    <!-- technology use  -->
    <!-- <section class="tecnology">
        <div class="row">
            
            <div class="col">
                <img src="./assets/java.png" style="width: 50%; padding:10px " alt="">
                <strong><h4>Java</h4></strong>
            </div>
            <div class="col">
                <img src="./assets/react.png" style="width: 50%; padding:10px " alt="">
                <strong><h4>React Js</h4></strong>

            </div>
            <div class="col">
                <img src="./assets/python.jfif" style="width: 50%; padding:10px " alt="">
                <strong><h4>Python</h4></strong>

            </div>
            <div class="col">
                <img src="./assets/html.png" style="width: 50%; padding:10px " alt="">
                <strong><h4>Html</h4></strong>

            </div>
            <div class="col">
                <img src="./assets/c.png" style="width: 50%; padding:10px " alt="">
                <strong><h4>C</h4></strong>

            </div>
            <div class="col">
                <img src="./assets/chash.jpg" style="width: 50%; padding:10px " alt="">
                <strong><h4>C#</h4></strong>

            </div>
            <div class="col">
                <img src="./assets/django.jpg" style="width: 50%; padding:10px " alt="">
                <strong><h4>Django</h4></strong>

            </div>
            

        </div>
    </section>
  -->
    

    <!-- services section end -->



<!-- details card section starts from here -->
<!-- <section class="details-card">
    <div class="container">
        <div class="row">
        <?php
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'onesmarter-staffing');
    $result = mysqli_query($con,"SELECT * FROM blogadmin");
    
            $post = mysqli_query($con,"SELECT * FROM blogadmin LIMIT 3;");
    
            
                foreach ($post as $post) {
                    
                    ?>

            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="blogimages/<?php echo $post['image'];?>" alt="">
                        <span><h4>heading</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3><?php echo $post['title'];?></h3>
                        <p><?php echo $post['description'];?></p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            

            <?php 
                }
    
    ?>


        </div>
    </div>
</section> -->



    <!-- candidate of the week section -->
    
  
    <?php include './user_components/testimonial.php'?>
   

    <!-- footer start -->
    <?php include './user_components/footer.php' ?>
    <!-- <div class="copyright">
            <center>
                <p>All rights are Rights are Reserved</p>
            </center>
        </div> -->
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
    .footer {
        background-image: url(./assets/897.png);
        padding-left: 13% !important;
        padding-right: 0% !important;
    }

    .testimonials {
    min-height: 75vh;
    display: flex;
    align-items: center;
    background-color: white;
    font-family: 'Open Sans'
}

#demo {
    background: linear-gradient(112deg, #f4433630 50%, antiquewhite 50%);
    max-width: 900px;
    margin: auto
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: rgba(78, 77, 77, 0.856);
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: bold;
    line-height: 2rem
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: rgba(78, 77, 77, 0.856);
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem
    }
}

.carousel-caption img {
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem
    }
}

i {
    background-color: rgb(223, 56, 89);
    padding: 1.4rem
}

@media(max-width:767px) {
    i {
        padding: 0.8rem
    }
}

.carousel-control-prev {
    justify-content: flex-start
}

.carousel-control-next {
    justify-content: flex-end
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset
}
#indiahiringpara{
        text-align: left;width: 58%;margin-left: 87px;
    }
/* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 100px 0;
}
.details-card {
	background: #ecf0f1;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
	position: relative;
	overflow: hidden;
	border-radius: 0;
	z-index: 1;
}

.card-img img {
	width: 100%;
	height: auto;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #1ABC9C;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
/* End card section */</style>

</style>