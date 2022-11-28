<?php
include 'operationregistration.php';
include('dbConfig.php');
include 'menubar1.php';
$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn, "select * from customerdetails where customerusername = '$user'");
$rowr = mysqli_fetch_array($query);
$id = $rowr['customerid'];
if (isset($_POST['submit'])) {
    $pass1 = mysqli_real_escape_string($conn, $_POST['new1']);
    $pass2 = mysqli_real_escape_string($conn, $_POST['new2']);
    if ($pass1 != $pass2) {
        die(mysqli_error($conn));
    } else {
        $pass = md5($pass1);
        $sql = "update customerdetails set customerpassword='$pass' where customerid='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {

            header('location:view_post.php');
        } else {
            die(mysqli_error($conn));
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
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body {
        background-color: #ccffee;
    }
    </style>
</head>

<body>
    <p><br><br><br></p>
    <h2 class="text-center my-3">Change Password</h2>
    <div class="container d-flex justify-content-center">
        <form onsubmit="return myFun()" method="POST" class="w-50">
            <input type="password" name="new1" class="form-control" id="new1" placeholder="Enter New Password">
            <span id="new1" class="text-danger"></span><br>
            <input type="password" name="new2" class="form-control" id="new2" placeholder="Confirm Password">
            <span id="new2" class="text-danger"></span><br>


            <button class="btn btn-dark" type="submit" name="submit">Change Password</button>
        </form>

    </div>
    <script type="text/javascript">
    function myFun() {
        var pass1 = document.getElementById('new1').value;
        var pass2 = document.getElementById('new2').value;
        if (pass1 == "" || pass2 == "") {
            alert("Empty Form Can't be submitted")
            return false
        }
        if (pass1 != pass2) {
            alert("Sorry ! Password didn't matched ")
            return false
        }
        if (pass1 == pass2 && pass1.length < 6) {
            alert("Password length must be greater than 6")
            return false
        }
    }
    </script>
</body>

</html>