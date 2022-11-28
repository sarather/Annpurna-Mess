<?php
include 'operationregistration.php';
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

<body>
    <p><br><br><br><br><br></p>
    <h2 class="text-center my-3">Customer Registration Page</h2>
    <div class="container d-flex justify-content-center">
        <form action="displayempolye.php" method="POST" class="w-50" enctype="multipart/form-data">
            <?php inputfields("Name Of Employee", "name", "", "text"); ?>
            <?php inputfields("Phone Number", "phone", "", "number"); ?>
            <?php inputfields("Age", "age", "", "number"); ?>
            <?php inputfields("Gender", "gender", "", "text"); ?>
            <?php inputfields("Aadhar No.", "aadhar", "", "number"); ?>
            <?php inputfields("Address", "address", "", "text"); ?>
            <?php inputfields("Employe Registration Date", "registrationdate", "", "date"); ?>
            <?php inputfields("", "file", "", "file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Register</button>
        </form>

    </div>
</body>

</html>