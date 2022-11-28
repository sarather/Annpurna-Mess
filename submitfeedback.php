<?php
include 'operationregistration.php';
include 'connection.php';
include 'menubar1.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);

    $sql = "insert into feedback(fname,fmobile,fmessage) 
    values('$name','$mobile','$message')";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {

        header('location:view_post.php');
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
    <title>Send feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body {
        background-color: #ccffee;
    }
    </style>
</head>

<body>
    <p><br><br><br><br></p>
    <h2 class="text-center my-3">Send Feedback</h2>
    <div class="container d-flex justify-content-center">
        <form onsubmit="return myFun()" method="POST" class="w-50">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
            <span id="username" class="text-danger"></span><br>
            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile">
            <span id="mobile" class="text-danger"></span><br>
            <input type="text" name="message" class="form-control" id="message" placeholder="Enter Message">
            <span id="mobile" class="text-danger"></span><br>


            <button class="btn btn-dark" type="submit" name="submit">Submit Feedback</button>
        </form>

    </div>
    <script type="text/javascript">
    function myFun() {
        var name = document.getElementById('name').value;
        var mobile = document.getElementById('mobile').value;
        var message = document.getElementById('message').value;
        if (name == "" && message == "" && mobile == "") {
            alert("Empty Form can't be submiited !")
            return false
        }
        if (name == "") {
            alert("Please Enter Your Name ")
            return false;
        }
        if (mobile == "" || mobile.length != 10) {
            alert("Please Enter Correct Mobile Number")
            return false;
        }
        if (message == "") {
            alert("Please enter message");
            return false;
        }
        if (!(isNaN(name))) {
            alert("Only Characters are allowed !")
            return false
        }
    }
    </script>
</body>

</html>