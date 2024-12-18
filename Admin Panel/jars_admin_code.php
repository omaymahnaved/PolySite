<?php
include 'configuration.php';

session_start();

if (!isset($_SESSION['adminname'])) {
    header('location: login.php');
}

if (isset($_POST['save_stud_image'])) {
    $errors = array();

    $file_size = $_FILES['stud_image']['size'];
    $file_name = $_FILES['stud_image']['name'];
    $file_type = $_FILES['stud_image']['type'];
    $file_tmp = $_FILES['stud_image']['tmp_name'];
    $id = mysqli_real_escape_string($connection, $_POST['j_id']);
    $title = mysqli_real_escape_string($connection, $_POST['j_title']);
    $description = mysqli_real_escape_string($connection, $_POST['j_description']);
    $price = mysqli_real_escape_string($connection, $_POST['j_price']);

    // extension in lowercase only
    $file_ext = strtolower(end(explode('.', $_FILES['stud_image']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) == false) {
        $errors[] = "pls choose png or jpg or jpeg";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size should be 2MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "jars_upload_img/" . $file_name);
        $query = "INSERT INTO `product_jar_upload`(`id`,`file_name`, `title`, `description`,`price`) VALUES ('$id','$file_name','$title','$description','$price')";
        $validate = mysqli_query($connection, $query);
        echo "File uploaded successfully!";
        header('Location: jars_admin.php');
    } else {
        print_r($errors);
    }
}

// EDIT AND UPDATE IMAGE

if (isset($_POST['update_stud_image'])) {
    $stud_id = $_POST['id'];
    $new_image = $_FILES['file_name']['name'];
    $old_image = $_POST['stud_image_old'];

    if ($new_image != '') {
        $update_filename = $_FILES['file_name']['name'];
    } else {
        $update_filename = $old_image;
    }

    if ($update_filename != $old_image) {
        $query = "UPDATE product_jar_upload SET  file_name='$update_filename' WHERE id='$stud_id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            if ($_FILES['file_name']['name'] != '') {
                move_uploaded_file($_FILES['file_name']['tmp_name'], "jars_upload_img/" . $_FILES["file_name"]["name"]);
                unlink("jars_upload_img/" . $old_image);
            }
            $_SESSION['status'] = "Data Updated Successfully..!";
            header('Location: jars_admin.php');
        }
    }
}


// DELETE

if (isset($_POST['delete_stud_image'])) {
    $id = $_POST['delete_id'];
    $stud_image = $_POST['del_stud_image'];

    $query = "DELETE FROM product_jar_upload WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        unlink("jars_upload_img/" . $stud_image);
        $_SESSION['status'] = "Data Deleted Successfully..!";
        header('Location: jars_admin.php');
    } else {
        $_SESSION['status'] = "Data Not Deleted..!";
        header('Location: jars_admin.php');
    }
}
