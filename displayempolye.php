<?php
include 'connection.php';
include 'menubar.php';

$errors = array();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];
    $registrationdate = $_POST['registrationdate'];
    $image = $_FILES['file'];

    if (empty($name)) {
        array_push($errors, "Name is required");
    }

    if (empty($phone)) {
        array_push($errors, "Phone is required");
    }


    $imagefilename = $image['name'];
    $iamgefiletemp = $image['tmp_name'];
    $file_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($file_separate));
    $extensions = array('jpeg', 'jpg', 'png', 'pdf');

    if (in_array($file_extension, $extensions)) {
        $uploade_image = 'images/' . $imagefilename;
        move_uploaded_file($iamgefiletemp, $uploade_image);

        $sql = "insert into employeedetails (name,phone,age,gender,aadhar,address,registrationdate,file) values
        ('$name ','$phone','$age','$gender','$aadhar','$address','$registrationdate','$uploade_image')";

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
<h1 class="text-center my-4">Registered Employee Data</h1>
<div>
    <table class="table w-100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Aadhar</th>
                <th scope="col">Address</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Photo</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from employeedetails";
            $result = mysqli_query($mysqli, $sql);
            $idtemp = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];
                $age = $row['age'];
                $gender = $row['gender'];
                $aadhar = $row['aadhar'];
                $address = $row['address'];
                $registrationdate = $row['eregistrationdate'];
                $image = $row['efile'];
                $idtemp = $idtemp + 1;
                echo '<tr>
                <td>' . $idtemp . '</td>
                <td>' . $name . '</td>
                <td>' . $phone . '</td>
                <td>' . $age . '</td>
                <td>' . $gender . '</td>
                <td>' . $aadhar . '</td>
                <td>' . $address . '</td>
                <td>' . $registrationdate . '</td>
                <td><img src=' . $image . ' /></td>
                <td><button class="btn btn-primary"><a href="updateemployee.php?updateemployeeid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger my-2"><a href="deleteemployee.php?deleteemployeeid=' . $id . '" class="text-light">Delete</a></button>
            </td>
        
            </tr>';
            }


            ?>
        </tbody>

</div>

<body>
    <button class="btn btn-primary my-1"> <a href="manageemploye.php" class="text-light">Add Employee</a>
    </button>
</body>

</html>