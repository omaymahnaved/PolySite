<?php

session_start();

include 'configuration.php';

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
        $query = "UPDATE blog SET  file_name='$update_filename' WHERE id='$stud_id'  ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            if ($_FILES['file_name']['name'] != '') {
                move_uploaded_file($_FILES['file_name']['tmp_name'], "blog_upload_img/" . $_FILES["file_name"]["name"]);
                unlink("blog_upload_img/" . $old_image);
            }
            $_SESSION['status'] = "Data Updated Successfully..!";
            header('Location: blog_admin.php');
        }
    }
}

// DELETE

if (isset($_POST['delete_stud_image'])) {
    $id = $_POST['delete_id'];
    $stud_image = $_POST['del_stud_image'];

    $query = "DELETE FROM blog WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        unlink("blog_upload_img/" . $stud_image);
        $_SESSION['status'] = "Data Deleted Successfully..!";
        header('Location: blog_admin.php');
    } else {
        $_SESSION['status'] = "Data Not Deleted..!";
        header('Location: blog_admin.php');
    }
}
