<?php
include 'connection.php';
if (isset($_GET['deletemenuid'])) {
    $id = $_GET['deletemenuid'];

    $sql = "delete from addmenu where id=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:display.php');
    } else {
        die(mysqli_error($mysqli));
    }
}