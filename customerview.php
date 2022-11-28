<?php
include 'connection.php';
session_start();
//include 'menubar1.php';
$customer = $_SESSION['user_name'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><br><br><br><br>
    <p>
        Name: <?php echo "hello " . $customer ?><br>
        Total Number of Tokens Remaning : <br>
        End Date :
    </p>
</body>

</html>