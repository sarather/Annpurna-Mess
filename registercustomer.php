<?php
include 'operationregistration.php';
include 'menubar.php';
include 'connection.php';
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
    <title>Register Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <p><br><br><br><br><br><br></p>
    <h2 class="text-center my-3">Customer Registration Page</h2>
    <div class="container d-flex justify-content-center">
        <form onsubmit="return myFun()" method="POST" class="w-50" enctype="multipart/form-data">

            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name"><br>
            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile"><br>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Your UserName"
                autocomplete="off"><br>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email"><br>
            <input type="password" name="password1" class="form-control" id="password1"
                placeholder="Enter Password"><br>
            <input type="password" name="password2" class="form-control" id="password2"
                placeholder="Confirm Password"><br>
            <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender"><br>

            <input type="number" name="aadhar" class="form-control" id="aadhar" placeholder="Enter Your Aadhar"><br>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address"><br>

            <?php inputfields("Registration Date", "registrationdate", "", "date", "date"); ?>
            <input type="number" name="tokens" class="form-control" id="tokens"
                placeholder="Enter Number of tokens"><br>
            <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter token amount"><br>


            <?php inputfields("", "file", "", "file", "file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Register</button>
        </form>

    </div>
    <script type="text/javascript">
    function myFun() {
        var name = document.getElementById('name').value;
        var mobile = document.getElementById('mobile').value;
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password1 = document.getElementById('password1').value;
        var password2 = document.getElementById('password2').value;
        var gender = document.getElementById('gender').value;
        var aadhar = document.getElementById('aadhar').value;
        var address = document.getElementById('address').value;
        var tokens = document.getElementById('tokens').value;
        var amount = document.getElementById('amount').value;
        if (name == "" && mobile == "" && username == "" && email == "" && aadhar == "" && tokens == "") {
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
        if (!(isNaN(name))) {
            alert("Only Characters are allowed !")
            return false
        }
        if (!(/^[A-Za-z ]*$/.test(name))) {
            alert("Name must contains only letters")
            return false
        }
        if (username == "") {
            alert("Please enter username !")
            return false
        }
        if (email == "") {
            alert("Please Enter your email")
            return false
        }
        if (password1 == "" || password2 == "") {
            alert("please enter password")
            return false
        }
        if (password1 !== password2) {
            alert("password didn't matched ")
            return false
        }
        if (password1 == password2 && password1.length < 6) {
            alert("password too short please enter password with more than 6 digit")
            return false
        }
        if (gender == "") {
            alert("Gender must be entered! ")
            return false
        }
        if (aadhar == "") {
            alert("Aadhar is must for registration")
            return false
        }
        if (aadhar.length != 12) {
            alert("Aadhar length must be of 12 digit")
            return false
        }
        if (address == "") {
            alert("Address must be entered")
            return false
        }
        if (tokens == "") {
            alert("there should be token value")
            return false
        }
        if (tokens < 30) {
            alert("token should be greater than or equal to 30 ")
            return false
        }
        if (amount == "") {
            alert("Pleas enter amount it can't be empty")
            return false
        }
        if (amount <= 0) {
            alert("amount can be 0 or negative")
            return false
        }
    }
    </script>
</body>

</html>