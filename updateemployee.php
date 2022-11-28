<?php
include 'operationregistration.php';
include 'connection.php';

$id = $_GET['updateemployeeid'];
$sql = "select * from employeedetails where id = $id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$phone = $row['phone'];
$age = $row['age'];
$gender = $row['gender'];
$aadhar = $row['aadhar'];
$address = $row['address'];
$registrationdate = $row['eregistrationdate'];
$image = $row['efile'];

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);

    $aadhar = mysqli_real_escape_string($mysqli, $_POST['aadhar']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);


    $sqls = "update employeedetails set name='$name',phone='$phone',age=$age,gender='$gender',aadhar=$aadhar,
    address='$address' where id=$id";

    $result = mysqli_query($mysqli, $sqls);

    if ($result) {

        header('location:displayempolye.php');
    } else {
        die(mysqli_error($mysqli));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center my-3">Customer Registration Page</h2>
    <div class="container d-flex justify-content-center">
        <form action="displayempolye.php" method="POST" class="w-50" enctype="multipart/form-data">
            <?php inputfields("Name Of Employee", "name", $name, "text"); ?>
            <?php inputfields("Phone Number", "phone", $phone, "number"); ?>
            <?php inputfields("Age", "age", $age, "number"); ?>
            <?php inputfields("Gender", "gender", $gender, "text"); ?>
            <?php inputfields("Aadhar No.", "aadhar", $aadhar, "number"); ?>
            <?php inputfields("Address", "address", $address, "text"); ?>
            <?php inputfields("", "file", "", "file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Update</button>
        </form>

    </div>
</body>

</html>