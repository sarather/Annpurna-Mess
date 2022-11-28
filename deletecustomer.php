<?php
include 'connection.php';
if (isset($_GET['deletecustomerid'])) {
    $id = $_GET['deletecustomerid'];

    $sql = "delete from customerdetails where pid=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:displaycustomer.php');
    } else {
        die(mysqli_error($mysqli));
    }
}