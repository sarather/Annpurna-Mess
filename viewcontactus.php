<?php
include 'connection.php';
include 'menubar.php';
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
<p><br><br><br><br><br></p>
<h1 class="text-center my-4">Contact Us details</h1>
<div>
    <table class="table w-100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from contactus";
            $result = mysqli_query($mysqli, $sql);
            $idtemp = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['contactid'];
                $name = $row['contactname'];
                $email = $row['contactemail'];
                $mobile = $row['contactmobile'];
                $message = $row['contactmessage'];
                $idtemp = $idtemp + 1;
                echo '<tr>
                <td>' . $idtemp . '</td>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $message . '</td>
                <td>
                    <button class="btn btn-danger my-2"><a href="deletecontactus.php?deletecontactusid=' . $id . '" class="text-light">Delete</a></button>
            </td>
        
            </tr>';
            }


            ?>
        </tbody>

</div>

<body>

</body>

</html>