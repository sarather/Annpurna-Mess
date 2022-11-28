<?php
include 'connection.php';
if (isset($_GET['deletefeedbackid'])) {
    $id = $_GET['deletefeedbackid'];

    $sql = "delete from feedback where fid=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo header('location:viewfeedback.php');
    } else {
        die(mysqli_error($mysqli));
    }
}