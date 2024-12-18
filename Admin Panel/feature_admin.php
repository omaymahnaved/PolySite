<?php
include 'configuration.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="admin_panel.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Online</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin_panel.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="feature_admin.php" class="nav-item nav-link active"><i class="fas fa-cogs me-2"></i>Feature</a>
                    <a href="blog_admin.php" class="nav-item nav-link"><i class="fab fa-blogger-b me-2"></i>Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-box-open me-2"></i>Products</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bottles_admin.php" class="dropdown-item">Bottles</a>
                            <a href="jars_admin.php" class="dropdown-item">Jars</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bottles_admin_order.php" class="dropdown-item">Bottles</a>
                            <a href="jars_admin_order.php" class="dropdown-item">Jars</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="admin_panel.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown px-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo "$_SESSION[adminname]"?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Upload Button -->
            <div class="container-fluid text-center" style="margin-top: 4%;">
                <a href="feature_admin_upload.php" class="btn btn-primary w-100 rounded-pill" style="font-size: 20px; font-weight:bold; ">Click Here to Upload Data</a>
            </div>

            <!-- Feature Table -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-white">
                                <h4 class="text-dark text-center mt-3">Uploaded Feature</h4>
                            </div>
                            <div class="card-body">

                                <?php
                                if (isset($_SESSION['status']) && $_SESSION != '') {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-weight: bold; font-size: 20px;">
                                        <?php echo $_SESSION['status']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <?php
                                $query = "SELECT * FROM feature";
                                $query_run = mysqli_query($connection, $query);
                                ?>
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="color:black; font-size: 21px;">ID</th>
                                                <th style="color:black; font-size: 21px;">Title</th>
                                                <th style="color:black; font-size: 21px;">Description</th>
                                                <th style="color:black; font-size: 21px;">Edit</th>
                                                <th style="color:black; font-size: 21px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td>
                                                            <a href="feature_admin_edit.php?editid=<?php echo $row['id']; ?>" class="btn btn-danger rounded-pill">EDIT</a>
                                                        </td>
                                                        <td>
                                                            <form action="feature_admin_code.php" method="POST" class="d-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                <input type="hidden" name="del_stud_image" value="<?php echo $row['title']; ?>">
                                                                <input type="hidden" name="del_stud_image" value="<?php echo $row['description']; ?>">
                                                                <button type="submit" name="delete_stud_image" class="btn btn-danger rounded-pill">DELETE</button>
                                                            </form>

                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                            } else {
                                                ?>

                                                <tr>
                                                    <td>No record available</td>
                                                </tr>

                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottle Table End -->













            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>