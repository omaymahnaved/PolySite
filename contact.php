<?php
include 'configuration.php';
session_start();

if(!isset($_SESSION['username'])){
  header('location: signup.php');
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $subject = mysqli_real_escape_string($connection, $_POST['subject']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    $queryinsert = "INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $resultInsert = mysqli_query($connection, $queryinsert);
    if ($connection->query($queryinsert) === TRUE) {
        $message = "Form submitted successfully!";
        $message_class = "alert-success";
    } else {
        $message = "Error: " . $queryinsert . "<br>" . $connection->error;
        $message_class = "alert-danger";
    }
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- NAVBAR CSS LINK -->
    <link href="css/nav.css" rel="stylesheet">
    
    <!-- Alert on submission -->
    <script>
        function showAlert() {
            alert('Form submitted successfully!');
        }
    </script>
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
                    <a href="about.php" class="nav-item nav-link px-3" style="font-weight: bold; margin-right: 5px;">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle  px-3" style="font-weight: bold; margin-right: 5px;" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu m-0">
                            <a href="bottles.php" class="dropdown-item">Bottles</a>
                            <a href="jars.php" class="dropdown-item">Jars</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link active px-2" style="font-weight: bold; margin-right: 10px;">Contact</a>
                    <div class="nav-item dropdown px-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo "$_SESSION[username]"?></span>
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Contact Us</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h4 class="text-uppercase text-primary">Let’s Connect</h4>
                        <h1 class="display-3 text-capitalize mb-3">Send Your Message</h1>
                        <!-- <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    </div>
                    <form action="" method="POST" onsubmit="showAlert()">
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $name = $_POST["name"];
                                    if (!preg_match("/^[a-zA-Z\s]{3,20}$/", $name)) {
                                        $errors1[] = "Only letters, white space, and hyphens allowed in the name.";
                                    }
                                    foreach ($errors1 as $error) {
                                        echo "<p style='color: red; margin-top:7px;'>$error</p>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $email = $_POST["email"];
                                    if (!preg_match("/^[A-Za-z0-9._]{3,20}@[a-zA-Z]{5,10}\.[a-zA-Z]{2,3}$/", $email)) {
                                        $errors2[] = "Invalid Email..!.";
                                    }
                                    foreach ($errors2 as $error) {
                                        echo "<p style='color: red; margin-top:7px;'>$error</p>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="phone" placeholder="Phone" name="phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $pjone = $_POST["phone"];
                                    if (!preg_match("/^[0-9]{11}+$/", $phone)) {
                                        $errors3[] = "Invalid Phone Number..!";
                                    }
                                    foreach ($errors3 as $error) {
                                        echo "<p style='color: red; margin-top:7px;'>$error</p>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 subject" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $subject = $_POST["subject"];
                                    if (!preg_match("/^[a-zA-Z0-9._@*,-]{40}+$/", $subject)) {
                                        $errors4[] = "Only Letters, Numbers, WhiteSpace, and Basic Punctuation Allowed.";
                                    }
                                    foreach ($errors4 as $error) {
                                        echo "<p style='color: red; margin-top:7px;'>$error</p>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 msg" placeholder="Leave a message here" id="message" style="height: 240px" name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $message = $_POST["message"];
                                    if (!preg_match("/^[a-zA-Z0-9,\s]{10,500}/", $message)) {
                                        $errors5[] = "Only Letters, Numbers, WhiteSpace, and Basic Punctuation Allowed.";
                                    }
                                    foreach ($errors5 as $error) {
                                        echo "<p style='color: red; margin-top:7px;'>$error</p>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-12">
                                <button type="submit" value="SUBMIT" name="submit" class="btn btn-primary w-100 py-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">Aptech North Nazimabad Center</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">polysite@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">03468125700</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="h-100 overflow-hidden">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57886.72953463055!2d66.9964644440918!3d24.93477479779082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1721218399174!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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