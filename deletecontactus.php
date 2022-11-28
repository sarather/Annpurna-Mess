<?php
include 'connection.php';
if (isset($_GET['deletecontactusid'])) {
    $id = $_GET['deletecontactusid'];

    $sql = "delete from contactus where id=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:viewcontactus.php');
    } else {
        die(mysqli_error($mysqli));
    }
}