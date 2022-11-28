<?php
include 'operationregistration.php';
include 'connection.php';

$id = $_GET['updatecustomerid'];
$sql = "select * from customerdetails where id = $id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$gender = $row['gender'];
$mobile = $row['mobile'];
$aadhar = $row['aadhar'];
$address = $row['address'];
$registrationdate = $row['registrationdate'];
$tokens = $row['tokens'];
$amount = $row['amount'];
$image = $row['file'];
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
    $aadhar = mysqli_real_escape_string($mysqli, $_POST['aadhar']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $tokens = mysqli_real_escape_string($mysqli, $_POST['tokens']);
    $amount = mysqli_real_escape_string($mysqli, $_POST['amount']);

    $sqls = "update customerdetails set name='$name',email='$email',gender='$gender',mobile=$mobile,aadhar=$aadhar,
    address='$address',tokens=$tokens,amount=$amount where id=$id";

    $result = mysqli_query($mysqli, $sqls);

    if ($result) {

        header('location:displaycustomer.php');
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
        <form method="POST" class="w-50" enctype="multipart/form-data">
            <?php inputfields("Name", "name", $name, "text"); ?>
            <?php inputfields("E-Mail", "email", $email, "email"); ?>
            <?php inputfields("Gender", "gender", $gender, "text"); ?>
            <?php inputfields("Mobile No.", "mobile", $mobile, "number"); ?>
            <?php inputfields("Aadhar No.", "aadhar", $aadhar, "number"); ?>
            <?php inputfields("Address", "address", $address, "text"); ?>

            <?php inputfields("Number Of Tokens", "tokens", $tokens, "number"); ?>
            <?php inputfields("Amount Paid", "amount", $amount, "number"); ?>
            <?php inputfields("", "file", $image, "file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Update</button>
        </form>

    </div>
</body>

</html>