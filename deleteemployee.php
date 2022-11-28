<?php
include 'connection.php';
if (isset($_GET['deleteemployeeid'])) {
    $id = $_GET['deleteemployeeid'];

    $sql = "delete from employeedetails where id=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:displayempolye.php');
    } else {
        die(mysqli_error($mysqli));
    }
}