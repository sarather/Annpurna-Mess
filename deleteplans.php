<?php
include 'connection.php';
if (isset($_GET['deleteplansid'])) {
    $id = $_GET['deleteplansid'];

    $sql = "delete from manageplans where id=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:manageplans.php');
    } else {
        die(mysqli_error($mysqli));
    }
}