<?php
include 'configuration.php';
session_start();

if(!isset($_SESSION['username'])){
  header('location: signup.php');
}


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $product = mysqli_real_escape_string($connection, $_POST['product']);
    $amount = mysqli_real_escape_string($connection, $_POST['amount']);
    $shipping_address = mysqli_real_escape_string($connection, $_POST['shipping_address']);

    $queryinsert = "INSERT INTO `order_bottles` (`name`, `email`, `product`, `amount`, `shipping_address`) VALUES ('$name','$email','$product','$amount','$shipping_address')";
    $resultInsert = mysqli_query($connection, $queryinsert);
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
                    <a href="index.php" class="nav-item nav-link px-3" style=" margin-right: 5px; font-weight: bold;">Home</a>
                    <a href="blog.php" class="nav-item nav-link  px-3" style="font-weight: bold; margin-right: 5px;">Blog</a>
                    <a href="gallery.php" class="nav-item nav-link  px-3" style="font-weight: bold; margin-right: 5px;">Gallery</a>
                    <a href="about.php" class="nav-item nav-link px-3" style="font-weight: bold; margin-right: 5px;">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active px-3" style="font-weight: bold; margin-right: 5px;" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu m-0">
                            <a href="bottles.php" class="dropdown-item active">Bottles</a>
                            <a href="jars.php" class="dropdown-item">Jars</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link px-2" style="font-weight: bold; margin-right: 10px;">Contact</a>
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Order Now</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item text-primary"><a href="bottles.php">Bottles</a></li>
                <li class="breadcrumb-item active text-primary">Order</li>
            </ol>
        </div>
    </div><br>
    <!-- Header End -->


    
    <!-- Order Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5 ">
            <div class="row g-5 ">
                <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h4 class="text-uppercase text-primary">Let’s</h4>
                        <h1 class="display-3 text-capitalize mb-3">Make A Deal</h1>
                    </div>
                    <form action="" method="POST" onsubmit="showAlert()">
                        <div class="row g-4">
                        <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="name" class="form-control border-0" id="name" placeholder="Your Name" name="name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" placeholder="Email" name="email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <select class="form-select form-control bg-white border-0" aria-label=".form-select-sm example" name="product">
                                        <option selected>All</option>
                                        <option>LG 3L BOTTLE</option>
                                        <option>MD 2L BOTTLE</option>
                                        <option>SM 1L BOTTLE</option>
                                    </select>
                                    <label for="product">Product</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <select class="form-select form-control bg-white border-0" aria-label=".form-select-sm example" name="amount">
                                        <option selected>1 Container (12 Boxes)</option>
                                        <option>One Boxes</option>
                                        <option>Two Boxes</option>
                                        <option>Three Boxes</option>
                                        <option>Four Boxes</option>
                                        <option>Five Boxes</option>
                                    </select>
                                    <label for="amount">Amount</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-floating">
                                    <textarea type="text" id="shipping_address" name="shipping_address" class="form-control border-0 msg" style="height: 100px;" required></textarea>
                                    <label for="address">Shipping Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" value="SUBMIT" name="submit" class="btn btn-primary w-100 py-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row g-4">
                        <div class="col-12 mt-5">
                            <div class="h-100 mt-5">
                                <img src="img/order.jpg" alt="IMAGE" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order End -->

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