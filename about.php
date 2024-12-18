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

    <!-- About us css -->
    <link rel="stylesheet" href="css/about.css">
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
                    <a href="index.php" class="nav-item nav-link  px-3" style=" margin-right: 5px; font-weight: bold;">Home</a>
                    <a href="blog.php" class="nav-item nav-link  px-3" style="font-weight: bold; margin-right: 5px;">Blog</a>
                    <a href="gallery.php" class="nav-item nav-link  px-3" style="font-weight: bold; margin-right: 5px;">Gallery</a>
                    <a href="about.php" class="nav-item nav-link px-3 active" style="font-weight: bold; margin-right: 5px;">About</a>
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
                <a href="signup.php" class="btn btn-secondary rounded-pill d-inline-flex flex-shrink-0 py-2 px-5">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Get To Know Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">About</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start  -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="img/aboutus.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <div class="about-exp"><span>20 Years Experiance</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-center text-uppercase" style="font-size: 30px;">About Us</h4>
                        <h1 class="display-4 mb-3">We Deliver The Best Quality Plastic.</h1>
                        <p class="mb-4 text-dark" style="font-weight: 500;">At <span class="text-info" style="font-size: 20px;">PolySite</span> we pride ourselves on delivering the best quality plastic products in the industry. Our materials are crafted using state-of-the-art technology to ensure durability, strength, and versatility. Committed to sustainability, we offer eco-friendly options that don't compromise on performance. Whether for industrial, commercial, or personal use, our plastics set the standard for excellence and reliability.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-history text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3" style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;">History and Milestones</a>
                                            <p class="mb-0">PolySite was established in 2000 with a vision to revolutionize the plastic manufacturing industry. Starting as a small family-owned business, we have grown into a leading manufacturer with state-of-the-art facilities and a global customer base. Our journey is a testament to our dedication, innovation, and relentless pursuit of excellence, positioning PolySite as a trusted name in the industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-tint text-white fa-2x"></i></div>
                                        </div>
                                        <div>
                                            <a href="#" class="h4 d-inline-block mb-3" style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;">Satisfied Customer</a>
                                            <p class="mb-0">At PolySite, we pride ourselves on delivering top-quality plastic products that meet and exceed our customers' expectations.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="blog.php" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End  -->

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


    <!-- ABOUT TEAM START -->
    <div class="heading" style="margin-top: 10%;">
        <h1>Our Team</h1>
        <p class="text-dark" style="font-weight: 450;">Our Team is our greatest asset. Comprised of dedicated professionals from diverse backgrounds, our team brings together a wealth of experience and expertise in the plastic manufacturing industry. Each member plays a vital role in driving our mission to deliver high-quality, innovative plastic solutions that meet and exceed our customers' expectations.</p>
    </div>
    <div class="container">
        <section class="about">

        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-content">
                <h2>(Leader) Omaymah</h2>
                <p>Omaymah is the leader of our team. Her ability to inspire and motivate the team ensures that we consistently deliver high-quality results. Trustworthy, dependable and reliable, often demonstrating honesty and integrity in one's work. She has an ability to motivate and guide the team.</p>
            </div>
            <div class="about-image">
                <img src="about_imgs/Omay.jpg" alt="IMAGE">
            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="about_imgs/AhmedRaza.jpeg" alt="IMAGE">
            </div>
            <div class="about-content">
                <h2>Ahmed Raza</h2>
                <p>Trustworthy, dependable and reliable, often demonstrating honesty and integrity in one's work.Your organization levels of unparalleled in the office.who can meet deadlines and prioritize tend to be good coworker. Independent ,self-reliant and able to work autonomously, often taking initiative and working well without close supervision.</p>
            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-content">
                <h2>Ayesha</h2>
                <p>Ayesha bring a wealth of experience and expertise to our project. Her problem-solving skill and collaborative nature make her an invaluable asset to our team, consistently delivering high-quality results.</p>
            </div>
            <div class="about-image">
                <img src="about_imgs/Ayesha.jpeg" alt="IMAGE">
            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="about_imgs/Affan.jpg" alt="IMAGE">
            </div>
            <div class="about-content">
                <h2>Affan Vohra</h2>
                <p>Believe in your team. The truth of what makes a good team player lies in their ability to trust the efforts of their team.They share what they learn and embrace a mentoring role.</p>
            </div>
        </section>
    </div>
    <div class="container" style="margin-bottom: 10%;">
        <section class="about">
            <div class="about-content">
                <h2>Arooba Jahan</h2>
                <p>Team players complete tasks and meet targets. If you're a team player, you understand that your behaviour at work affects the entire team.Maintaining a positive attitude, even when times get tough, exhibits a strong team player.</p>
            </div>
            <div class="about-image">
                <img src="about_imgs/Arooba.jpeg" alt="IMAGE">
            </div>
        </section>
    </div>
    <!-- ABOUT TEAM END -->

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