<?php
include('connection.php');

// -----------------------------INSERT INTO---------------------------------------------------

if (isset($_POST['register_btn'])) {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO register(fname,lname,email,pass,phone) VALUES ('$first_name','$last_name','$email','$password','$phone')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // echo "Successfully";
        $_SESSION['status'] = " Data insert Successfully";
        $_SESSION['status_code'] = "success";

        header('location:index.php');
    } else {

        // echo "Failed";
        $_SESSION['status'] = "Failed";
        $_SESSION['status_code'] = "error";
        header('location:register.php');
    }
}

// ---------------------------------------------------UPDATE------------------------------------------------------

if (isset($_POST['register_update_btn'])) {

    $update_id = $_POST['edit_id'];
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $phone = $_POST['phone'];

    echo $update_query = "UPDATE `register` SET fname='$first_name', lname='$last_name', email='$email', pass='$password', phone='$phone' WHERE id='$update_id'";

    $update_query_run = mysqli_query($conn, $update_query);

    if ($update_query_run) {
        // echo "Done";
        $_SESSION['status'] = "Data update Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:index.php");
    } else {
        // echo "Failed";
        $_SESSION['status'] = "Failed";
        $_SESSION['status_code'] = "error";
        header("Location:index.php");
    }
}

// ----------------------------------------------------DELETE-----------------------------------------

if (isset($_POST['register_delete_btn'])) {
    $delete_id = $_POST['delete_id'];

    $dtl_query = "DELETE FROM `register` WHERE id='$delete_id'";
    $dtl_query_run = mysqli_query($conn, $dtl_query);

    if ($dtl_query_run) {
        // echo "Delete Successefully";
        $_SESSION['status'] = "Data Delete Successfully";
        $_SESSION['status_code'] = "success";
        header("Location:index.php");
    } else {
        // echo "Failed";
        $_SESSION['status'] = "Failed";
        $_SESSION['status_code'] = "error";
        header("Location:index.php");
    }
}
?>
