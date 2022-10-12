<?php
include 'operationregistration.php';
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
        <form action="displaycustomer.php" method="POST" class="w-50" enctype="multipart/form-data">
            <?php inputfields("Name", "name", "", "text"); ?>
            <?php inputfields("E-Mail", "email", "", "email"); ?>
            <?php inputfields("Password", "password1", "", "password"); ?>
            <?php inputfields("Confirm Password", "password2", "", "password"); ?>
            <?php inputfields("Gender", "gender", "", "text"); ?>
            <?php inputfields("Mobile No.", "mobile", "", "number"); ?>
            <?php inputfields("Aadhar No.", "aadhar", "", "number"); ?>
            <?php inputfields("Address", "address", "", "text"); ?>
            <?php inputfields("Registration Date", "registrationdate", "", "date"); ?>
            <?php inputfields("Number Of Tokens", "tokens", "", "number"); ?>
            <?php inputfields("Amount Paid", "amount", "", "number"); ?>
            <?php inputfields("", "file", "", "file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Register</button>
        </form>

    </div>
</body>

</html>