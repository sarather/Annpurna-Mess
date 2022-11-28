<?php
include 'connection.php';
include 'menubar.php';

$errors = array();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
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

        $sql = "insert into customerdetails (customername,customeremail,customerpassword,customergender,customermobile,customeraadhar,customeraddress,registrationdate,tokens,amount,file,customerusername) values
        ('$name ','$email','$password','$gender','$mobile','$aadhar','$address','$registrationdate','$tokens','$amount','$uploade_image','$username')";

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

    <style>
    img {
        width: 100px;
    }
    </style>
</head>
<p><br><br><br><br><br></p>
<h1 class="text-center my-4">Registered Customer Data</h1>
<div>
    <table class="table w-100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Mobile</th>
                <th scope="col">Aadhar</th>
                <th scope="col">Address</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Tokens</th>
                <th scope="col">Amount</th>
                <th scope="col">Photo</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from customerdetails";
            $result = mysqli_query($mysqli, $sql);
            $idtemp = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['customerid'];
                $name = $row['customername'];
                $username = $row['customerusername'];
                $email = $row['customeremail'];
                $gender = $row['customergender'];
                $mobile = $row['customermobile'];
                $aadhar = $row['customeraadhar'];
                $address = $row['customeraddress'];
                $registrationdate = $row['registrationdate'];
                $tokens = $row['tokens'];
                $amount = $row['amount'];
                $image = $row['file'];
                $idtemp = $idtemp + 1;
                echo '<tr>
                <td>' . $idtemp . '</td>
                <td>' . $name . '</td>
                <td>' . $username . '</td>
                <td>' . $email . '</td>
                <td>' . $gender . '</td>
                <td>' . $mobile . '</td>
                <td>' . $aadhar . '</td>
                <td>' . $address . '</td>
                <td>' . $registrationdate . '</td>
                <td>' . $tokens . '</td>
                <td>' . $amount . '</td>
                <td><img src=' . $image . ' /></td>
                <td><button class="btn btn-primary"><a href="updatecustomer.php?updatecustomerid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger my-2"><a href="deletecustomer.php?deletecustomerid=' . $id . '" class="text-light">Delete</a></button>
            </td>
        
            </tr>';
            }


            ?>
        </tbody>

</div>

<body>

</body>

</html>