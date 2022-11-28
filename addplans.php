<?php
include 'operationregistration.php';
include 'connection.php';
if (isset($_POST['submit'])) {
    $tokens = mysqli_real_escape_string($mysqli, $_POST['tokens']);
    $validty = mysqli_real_escape_string($mysqli, $_POST['validty']);
    $amount = mysqli_real_escape_string($mysqli, $_POST['amount']);

    $sql = "insert into manageplans (ptokens,validty,pamount) values
    ('$tokens','$validty','$amount')";
    $result = mysqli_query($db, $sqls);

    if ($result) {

        header('location:manageplans.php');
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
    <title>Add Plans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <h2 class="text-center my-3">Customer Registration Page</h2>
    <div class="container d-flex justify-content-center">
        <form action="manageplans.php" method="POST" class="w-50">
            <?php inputfields("Number Of Tokens", "tokens", "", "number"); ?>
            <?php inputfields("Validity ", "validty", "", "text"); ?>
            <?php inputfields("Amount", "amount", "", "number"); ?>

            <button class="btn btn-dark" type="submit" name="submit">Register</button>
        </form>

    </div>
</body>

</html>