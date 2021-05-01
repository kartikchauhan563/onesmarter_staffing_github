<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'onesmarter-staffing');
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

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                            <a class="nav-link " aria-current="page" href="jobs.php">Find Job</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="#">Candidate of the Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./login/logout-user.php">Logout</a>
                        </li> -->
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
    <div class="image-wrap">
        <div class="img-content">
            <img src="./assets/placeholder.jpeg" alt="">
        </div>
        <div class="overlay"></div>
    </div>
    <div class="banner-content">
        <h1>Our Best Candidates</h1>
        
    </div>
    <!-- job end -->


    <!-- testimonical section start -->
    <section class="section-medium section-arrow--bottom-center section-arrow-primary-color" style="background-color: red;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white text-center">
                <h2 class="section-title "> What Others Say About Us</h2>
                <p class="section-sub-title">
                    We are a passionate digital design agency that specializes in beautiful and easy-to-
                    <br> use digital design &amp; web development services.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-primary t-bordered">
    <div class="container">
        <div class="row testimonial-three testimonial-three--col-three">
            
        <?php
        $result = mysqli_query($con,"SELECT * FROM employeestory");

        $counter=0;
            foreach ($result as $result) { ?>

            
            <div class="col-md-4 testimonial-three-col">
                <div class="testimonial-inner">
                    <div class="testimonial-image" itemprop="image">
                        <img width="180" height="180" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                    <div class="testimonial-content">
                        <p>
                        <?php echo $result['message'];?>                        </p>
                    </div>
                    <div class="testimonial-meta">
                        <strong class="testimonial-name" itemprop="name"><?php echo $result['employeename'];?></strong>
                        <span class="testimonial-job-title" itemprop="jobTitle"></span> – <a class="testimonial-link" href="#" ><?php echo $result['designation'];?></a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>
    <!-- testimonial end -->







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

h1 {
            font-family: 'poppins', sans-serif;
        }

        p {
            font-family: 'poppins', sans-serif;
        }

        .image-wrap {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
        }

        .banner-content {
            position: absolute;
            z-index: 99999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            text-align: center;
            font-size: 1.5em;
            color: #fff;
            line-height: 1.5;
        }

        .img-content img {
            width: 100%;
            height: 100vh;
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: #00000091;
            opacity: .8;
            z-index: 999;
            height: 100%;
        }

        .ban-btn {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
        }

        .btn-red {
            background-color: red;
        }

        .btn-green {
            background-color: #4CAF50;
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











.btn.btn-outline-primary:hover, .bg-primary {
    background-color: #red !important;
}
.section-medium {
    padding: 55px 0px;
}
.testimonial-four blockquote:hover::after, .section-arrow-primary-color.section-arrow--bottom-center:after {
    border-right-color: red;
}
.section-arrow-primary-color.section-arrow--bottom-center:after {
    background-color: red;
    border-right-color: red;
    border-bottom-color: red;
}
.section-arrow--bottom-center:after {
    z-index: 1;
    position: absolute;
    left: 50%;
    margin-left: -15px;
    content: "";
    position: absolute;
    bottom: -15px;
    width: 30px;
    height: 30px;
    border-right: 1px solid #262626;
    border-bottom: 1px solid #262626;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    background-color: #262626;
}
.text-white h1, .text-white h2, .text-white h3, .text-white h4, .text-white h5, .text-white h6 {
    color: white !important;
}
.section-title {
    font-size: 32px;
    font-weight: 600;
    margin-top: 0.45em;
    margin-bottom: 0.35em;
    color: #303133;
    font-family: Poppins;
    letter-spacing: -0.02em;
}
.section-sub-title {
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 400;
    font-family: Poppins;
}
.section-arrow-primary-color.section-arrow--bottom-center:after {
    border-bottom-color: #0cb4ce;
}
.section-arrow-primary-color.section-arrow--bottom-center:after{
    background-color: #0cb4ce;
}
.special-heading.line span:before, .special-heading.line span:after, .footer.footer-minimal, .t-bordered {
    border-top-color: #eaeaea;
}
.t-bordered {
    border-top: 1px solid #eaeaea;
}
.section-primary {
    padding: 75px 0px;
}
section {
    position: relative;
}



.testimonial-two {
    padding: 20px;
    border: 2px solid #0cb4ce;
    border-radius: 2px;
}


.testimonial-two blockquote p:before {
    font-family: 'Playfair Display';
    font-size: 54px;
    color: #0cb4ce;
    font-weight: 900;
    left: 10px;
    color: #FFF;
    content: "“";
    font-style: normal;
    line-height: 1;
    position: absolute;
    top: 5px;
    font-size: 45px;
}

.testimonial-two blockquote p:after {
    font-family: 'Playfair Display';
    font-size: 54px;
    color: #0cb4ce;
    content: "”";
    font-size: 80px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    bottom: -0.5em;
    right: 10px;
    font-weight: 900;
    transform: scaleY(-1);
    font-size: 45px;
    bottom: -5px;
}


.testimonial-two blockquote {
    padding: 15px 15px 15px 48px;
    position: relative;
}

.testimonial-two blockquote p:before,
.testimonial-two blockquote p:after {
    color: #0cb4ce;
    font-weight: 900;
}

.testimonial-two blockquote p {
    font-size: inherit;
    font-weight: inherit;
}

.testimonial-two .testimonial-author p {
    color: #999;
    margin: 0 0 0 25px;
    text-align: left;
}

.testimonial-two .testimonial-author strong {
    display: block;
    padding-top: 10px;
    margin-bottom: -2px;
    font-weight: 500;
    font-size: 14px;
    color: #444;
}

.testimonial-two .testimonial-author span {
    color: #666;
    display: block;
    font-size: 12px;
}

.testimonial-two .testimonial-author .testimonial-author-thumbnail {
    float: left;
    margin-right: 15px;
    width: auto;
}

.testimonial-two .testimonial-author img {
    max-width: 55px;
}

.testimonial-two .testimonial-author {
    margin-left: 12px;
    margin-bottom: 15px;
}


.testimonial-two .owl-theme .owl-nav.disabled + .owl-dots {
    margin-top: 0px;
}

.testimonial-two .owl-theme .owl-dots {
    text-align: left;
    margin-left: 50px;
}

.testimonial-two .owl-carousel .owl-dots .owl-dot.active span, 
.testimonial-two .owl-carousel .owl-dots .owl-dot:hover span {
       border-color: #0cb4ce;
}

.testimonial-two .owl-carousel .owl-dots .owl-dot.active span:before, 
.testimonial-two .owl-carousel .owl-dots .owl-dot:hover span:before {
    background-color: #0cb4ce;
}




.testimonial-three .testimonial-image {
    float: left;
    margin: 0 20px 0 0;
    width: 80px;
    height: 80px;
    border-radius: 100px;
    overflow: hidden;
}

.testimonial-three .testimonial-content {
    overflow: hidden;
}

.testimonial-three .testimonial-meta {
    position: relative;
    overflow: hidden;
    margin-left: 100px;
}


.testimonial-three .testimonial-name {
    display: block;
}


.testimonial-three .testimonial-three-col {
    padding-bottom: 35px;
}

.testimonial-three .testimonial-three-col {
    border-right-style: dashed;
    border-right-width: 1px;
    border-bottom-style: dashed;
    border-bottom-width: 1px;
    border-right-color: #ddd;
    border-bottom-color: #ddd;
    padding: 25px;
}

.testimonial-three .testimonial-three-col:hover {
   background-color:#f7f7f7;
}

.alternate-color .testimonial-three .testimonial-three-col:hover {
   background-color:white;
}

.testimonial-three.testimonial-three--col-two .testimonial-three-col:nth-child(2n) {
    border-right: none;
}

.testimonial-three.testimonial-three--col-two .testimonial-three-col:nth-last-child(-n+2),
.testimonial-three.testimonial-three--col-two .testimonial-three-col:last-child {
    border-bottom: none;
}

.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-child(3n) {
    border-right: none;
}

.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-last-child(-n+3),
.testimonial-three.testimonial-three--col-three .testimonial-three-col:nth-last-child(-n+2),
.testimonial-three.testimonial-three--col-three .testimonial-three-col:last-child {
    border-bottom: none;
}







.testimonial-four .testimonial-author .testimonial-author-thumbnail {
   float: left;
   margin-right: 15px;
   width: auto;
}

.testimonial-four .testimonial-author img {
   max-width: 55px;
}

.testimonial-four .testimonial-author strong {
   display: block;
   padding-top: 10px;
   margin-bottom: -2px;
   font-weight: 500;
   font-size: 14px;
   color: #444;
}

.testimonial-four .testimonial-author span {
   color: #666;
   display: block;
   font-size: 12px;
}

.testimonial-four blockquote {
   padding: 30px;
   width: 100%;
   border-radius: 4px;
   position: relative;
   margin-bottom: 20px;
   padding-bottom: 25px;
   border: 2px solid #eaeaea;
}

.testimonial-four blockquote::after {
   content: "";
   border-right: 2px solid #eaeaea;
   border-bottom: 2px solid #eaeaea;
   -webkit-transform: rotate(55deg);
   -moz-transform: rotate(55deg);
   -ms-transform: rotate(55deg);
   -o-transform: rotate(55deg);
   transform: rotate(55deg);
   position: absolute;
   left: 55px;
   bottom: -12px;
   width: 15px;
   height: 21px;
   overflow: hidden;
   background: white;
}

.testimonial-four .owl-theme .owl-nav.disabled + .owl-dots {
   position: absolute;
   float: right;
   text-align: right;
   right: 3px;
   bottom: 40px;
}

.testimonial-four .testimonial-author {
   position: relative;
   overflow: hidden;
}

.testimonial-four blockquote:hover::after {
   border-right: 2px solid #0cb4ce;
   border-bottom: 2px solid #0cb4ce;
}

.testimonial-four blockquote:hover {
   border: 2px solid #0cb4ce;
}





.testimonial-five blockquote p {
    font-weight: 400;
    font-size: 14.58px;
    line-height: 1.6;
    margin-bottom:0;
}

.testimonial-five .testimonial-author .testimonial-author-thumbnail {
   float: left;
   margin-right: 15px;
   width: auto;
}

.testimonial-five .testimonial-author img {
   max-width: 55px;
}

.testimonial-five .testimonial-author strong {
   display: block;
   padding-top: 10px;
   margin-bottom: -2px;
   font-weight: 600;
   font-size: 13px; 
}

.testimonial-five .testimonial-author span {
   color: #666;
   display: block;
   font-size: 12px;
}

.testimonial-five blockquote {
   padding: 32px 41px 37px;
   width: 100%;
   border-radius: 4px;
   position: relative;
   margin-bottom: 30px; 
   border: 0px solid #eaeaea;
   background-color: #f7f7f7;
}

.testimonial-five blockquote::after {
   content: "";
   border-right: 0px solid #eaeaea;
   border-bottom: 0px solid #eaeaea;
   -webkit-transform: rotate(55deg);
   -moz-transform: rotate(55deg);
   -ms-transform: rotate(55deg);
   -o-transform: rotate(55deg);
   transform: rotate(55deg);
   position: absolute;
   left: 55px;
   bottom: -10px;
   width: 15px;
   height: 21px;
   overflow: hidden;
   background: #f7f7f7;
}

.testimonial-five.testimonial-light blockquote{
   background-color:white;
}
.testimonial-five.testimonial-light blockquote::after {
   background: white;
}


.testimonial-five .owl-theme .owl-nav.disabled + .owl-dots {
   position: absolute;
   float: right;
   text-align: right;
   right: 3px;
   bottom: 40px;
}

.testimonial-five .testimonial-author {
   position: relative;
   overflow: hidden;
}

.testimonial-five blockquote:before {
    content: "“";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 170px;
    color: rgba(189, 189, 189, 0.2);
    position: absolute;
    top: 10px;
    left: 20px;
}
img {
    max-width: 100%;
    height: auto;
}
.section-arrow-primary-color.section-arrow--bottom-center:after {
    background-color: red;
}
</style>
