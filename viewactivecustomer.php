<?php
include 'connection.php';
include 'menubar.php'
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
            $sql = "select * from customerdetails where tokens != 0";
            $result = mysqli_query($mysqli, $sql);
            $idtemp = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['customerid'];
                $name = $row['customername'];
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