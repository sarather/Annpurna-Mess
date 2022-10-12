<?php
include 'connection.php';

$errors = array();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];
    $registrationdate = $_POST['registrationdate'];
    $tokens = $_POST['tokens'];
    $amount = $_POST['amount'];
    $image = $_FILES['file'];

    if (empty($name)) {
        array_push($errors, "Name is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password1 != $password2) {
        array_push($errors, "Password does't matched");
    }
    $password = md5($password1);
    $imagefilename = $image['name'];
    $iamgefiletemp = $image['tmp_name'];
    $file_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($file_separate));
    $extensions = array('jpeg', 'jpg', 'png', 'pdf');

    if (in_array($file_extension, $extensions)) {
        $uploade_image = 'images/' . $imagefilename;
        move_uploaded_file($iamgefiletemp, $uploade_image);

        $sql = "insert into customerdetails (name,email,password,gender,mobile,aadhar,address,registrationdate,tokens,amount,file) values
        ('$name ','$email','$password','$gender','$mobile','$aadhar','$address','$registrationdate','$tokens','$amount','$uploade_image')";

        $result = mysqli_query($mysqli, $sql);
        if ($result) {
            echo "<div class=\"alert alert-success\" role=\"alert\">
            <strong>Success</strong> Data Inserted Succesfully !
          </div>";
        } else {
            die(mysqli_error($mysqli));
        }
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
</body>

</html>