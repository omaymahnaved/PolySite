<?php
include 'configuration.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location: signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PolySite</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Css Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- NAVBAR CSS LINK -->
    <link href="css/nav.css" rel="stylesheet">

    <!-- css for rating -->
    <style>
        .rating {
            margin: 10px 0;
        }

        .star {
            font-size: 1.5rem;
            color: gold;
        }

        .star.filled {
            color: gold;
        }

        .star:not(.filled) {
            color: gold;
        }
    </style>
</head>

<body>


    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a href="index.php"><img src="img/PolysiteLogo1.png" style="height: 100px;"></a>
            <h4 class="pt-2 px-4 text-info polysite-text" style="font-family: sans-serif; font-weight:bold; font-size: 35px; ">PolySite</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active px-3" style=" margin-right: 5px; font-weight: bold;">Home</a>
                    <a href="blog.php" class="nav-item nav-link px-3" style="font-weight: bold; margin-right: 5px;">Blog</a>
                    <a href="gallery.php" class="nav-item nav-link  px-3" style="font-weight: bold; margin-right: 5px;">Gallery</a>
                    <a href="about.php" class="nav-item nav-link px-3" style="font-weight: bold; margin-right: 5px;">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle  px-3" style="font-weight: bold; margin-right: 5px;" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu m-0">
                            <a href="bottles.php" class="dropdown-item">Bottles</a>
                            <a href="jars.php" class="dropdown-item">Jars</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link px-2" style="font-weight: bold; margin-right: 10px;">Contact</a>
                    <div class="nav-item dropdown px-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo "$_SESSION[username]" ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
                <a href="login.php" class="btn btn-secondary rounded-pill d-inline-flex flex-shrink-0 py-2 px-5">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar & Hero End -->


    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="carouselbg/bg1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-1">
                        <div class="carousel-caption-1-content" style="max-width: 900px;">
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Always Want Safe Plastic For Healthy Life</h1>
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Welcome to PolySite, where innovation meets excellence in plastic manufacturing. We are committed to transforming ideas into high-quality plastic solutions that drive your success.
                            </p>
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carouselbg/bg3.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-2">
                        <div class="carousel-caption-2-content" style="max-width: 900px;">
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Always Want Safe Plastic For Healthy Life</h1>
                            <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">Partner with us to experience unmatched quality, reliability, and innovation in every piece we create. Your vision, our expertise – together, we shape the future of plastics.
                            </p>
                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Feature</h4>
                <h1 class="display-3 text-capitalize mb-3">A Trusted Name In Plastic Industry</h1>
            </div>
            <div class="row g-4">
                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <?php
                    $query1 = "SELECT * FROM `feature` WHERE `id` = '1'";
                    $validate2 = mysqli_query($connection, $query1);
                    while ($show = mysqli_fetch_assoc($validate2)) {
                    ?>
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-hand-holding-water text-white fa-3x"></i></div>
                            <p class="h4 mb-3" style="font-family: sans-serif; font-weight: bold;"><?php echo $show['title'] ?></p>
                            <p class="mb-3"><?php echo $show['description'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <?php
                    $query1 = "SELECT * FROM `feature` WHERE `id` = '2'";
                    $validate2 = mysqli_query($connection, $query1);
                    while ($show = mysqli_fetch_assoc($validate2)) {
                    ?>
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-shield-virus text-white fa-3x"></i></div>
                            <p class="h4 mb-3" style="font-family: sans-serif; font-weight: bold;"><?php echo $show['title'] ?></p>
                            <p class="mb-3"><?php echo $show['description'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <?php
                    $query1 = "SELECT * FROM `feature` WHERE `id` = '3'";
                    $validate2 = mysqli_query($connection, $query1);
                    while ($show = mysqli_fetch_assoc($validate2)) {
                    ?>
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                            <p class="h4 mb-3" style="font-family: sans-serif; font-weight: bold;"><?php echo $show['title'] ?></p>
                            <p class="mb-3"><?php echo $show['description'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <?php
                    $query1 = "SELECT * FROM `feature` WHERE `id` = '4'";
                    $validate2 = mysqli_query($connection, $query1);
                    while ($show = mysqli_fetch_assoc($validate2)) {
                    ?>
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-user-check text-white fa-3x"></i></div>
                            <p class="h4 mb-3" style="font-family: sans-serif; font-weight: bold;"><?php echo $show['title'] ?></p>
                            <p class="mb-3"><?php echo $show['description'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
 <!-- Fact Counter -->
 <div class="container-fluid counter py-5" style="margin-top: 10%;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-thumbs-up fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Happy Clients</h4>
                        <div class="counter-counting">
                            <!-- <span class="text-white fs-2 fw-bold" data-toggle="counter-up">456</span>
                            <span class="h1 fw-bold text-white">+</span> -->
                            <h1 class="text-white">20,000+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-tasks fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Products Manufactured</h4>
                        <div class="counter-counting">
                            <!-- <span class="text-white fs-2 fw-bold" data-toggle="counter-up">513</span>
                            <span class="h1 fw-bold text-white">+</span> -->
                            <h1 class="text-white">50,000+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Employees</h4>
                        <div class="counter-counting">
                            <!-- <span class="text-white fs-2 fw-bold" data-toggle="counter-up">53</span>
                            <span class="h1 fw-bold text-white">+</span> -->
                            <h1 class="text-white">500+</h1>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-heart fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Years Experiance</h4>
                        <div class="counter-counting">
                            <!-- <span class="text-white fs-2 fw-bold" data-toggle="counter-up">53</span>
                            <span class="h1 fw-bold text-white">+</span> -->
                            <h1 class="text-white">15+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter -->

    <!-- Service Start -->
    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Service</h4>
                <h1 class="display-3 text-capitalize mb-3">Protect Your Family with Best Plastic</h1>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-start">
                                        <a href="#" class="h4 d-inline-block mb-3">Plastic Molding</a>
                                        <p class="mb-0">We provide high-quality, custom-molded plastic components designed to meet your specific needs.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-hand-holding-heart text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-start">
                                        <a href="#" class="h4 d-inline-block mb-3">Material Expertise
                                        </a>
                                        <p class="mb-0">Benefit from our extensive knowledge of plastics to choose the best material. Working with various plastics like PET, PC, PP.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-flask text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-start">
                                        <a href="#" class="h4 d-inline-block mb-3">Sustainability</a>
                                        <p class="mb-0">We are committed to eco-friendly practices and sustainability.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-leaf text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="img/plastic-bottle.png" class="img-fluid w-100" alt="IMG">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-fire text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Plastic Fabrication</a>
                                        <p class="mb-0">Our plastic fabrication services cover a wide range of techniques to suit diverse manufacturing needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Prototyping Services</a>
                                        <p class="mb-0">Quickly bring your ideas to life with our efficient prototyping services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-industry text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Industries Served</a>
                                        <p class="mb-0">We cater to various industries with our versatile plastic manufacturing capabilities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp text-dark bg-light rounded" data-wow-delay="0.3s">
                <?php
                $query1 = "SELECT * FROM `feedback`";
                $validate2 = mysqli_query($connection, $query1);
                while ($show = mysqli_fetch_assoc($validate2)) {
                ?>
                    <div class="testimonial-item text-center p-4">
                        <p>
                            <?php echo $show['comment']; ?>
                        </p>
                        <div class="d-block">
                            <h4 class="text-dark"><?php echo htmlspecialchars($show['name']); ?>
                            </h4>
                            <div class="rating">
                                <?php
                                $rating = intval($show['rating']);
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<span class="star filled">&#9733;</span>';
                                    } else {
                                        echo '<span class="star">&#9734;</span>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- FEEDBACK FORM BTN START -->
    <a href="feedback.php" id="btnfeedback">
        <div class=" text-center" style="margin-bottom: 5%;">
            <input class="btn btn-secondary pt-3 pb-3 w-50 rounded-pill" style="font-size: 20px; font-weight:700; color:#fff;" value="Click here to Give Us A Feedback">
        </div>
    </a>
    <!-- FEEDBACK FORM BTN END -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-2 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-2">

                    <div class="position-relative mx-auto text-center">
                        <h3 class="text-primary mb-4">
                            <i class="text-primary me-3">
                                <img src="img/PolysiteLogo1.png" alt="Logo" style="width: 100px;">
                                <a href="index.php"></a>
                            </i>
                            <p style="font-family: sans-serif; font-size: 30px;font-weight: bold;">PolySite</p>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-5 ms-lg-auto">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-0" target="_blank" href="https://pk.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <p class="mb-3"><b class="text-primary" style="font-size: 20px;">PolySite </b> cater to various sectors such as packaging, construction, automotive, electronics, and healthcare, providing essential components and consumer goods.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">About Us</h4>
                        <a href="blog.php"><i class="fas fa-angle-right me-2"></i> Blog </a>
                        <a href="gallery.php"><i class="fas fa-angle-right me-2"></i> Products</a>
                        <a href="feedback.php"><i class="fas fa-angle-right me-2"></i> Feedback</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Useful Links</h4>
                        <a href="about.php"><i class="fas fa-angle-right me-2"></i> About Us </a>
                        <a href="#" target="_blank"><i class="fas fa-angle-right me-2"></i> Site Map</a>
                        <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <a href="https://aptech-education.com.pk/" target="_blank"><i class="fa fa-map-marker-alt me-2"></i> Aptech NN Campus</a>
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> polysite@gmail.com</a>
                        <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>PolySite</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    Designed By <a class="border-bottom text-white" href="#">Omaymah</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>