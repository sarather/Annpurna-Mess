<?php
include 'connection.php';
include 'operationregistration.php';

$id = $_GET['updateplansid'];
$sql = "select * from manageplans where pid=$id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

$tokens = $row['ptokens'];
$validty = $row['validty'];
$amount = $row['pamount'];

if (isset($_POST['submit'])) {
    $tokens = mysqli_real_escape_string($mysqli, $_POST['tokens']);
    $validty = mysqli_real_escape_string($mysqli, $_POST['validty']);
    $amount = mysqli_real_escape_string($mysqli, $_POST['amount']);

    $sqls = "update manageplans set ptokens='$tokens',validty='$validty',pamount='$amount' where pid=$id";
    $result = mysqli_query($mysqli, $sqls);

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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
    <h2 class="text-center my-3">Customer Registration Page</h2>
    <div class="container d-flex justify-content-center">
        <form method="POST" class="w-50">
            <?php inputfields("Number Of Tokens", "tokens", $tokens, "number"); ?>
            <?php inputfields("Validity ", "validty", $validty, "text"); ?>
            <?php inputfields("Amount", "amount", $amount, "number"); ?>

            <button class="btn btn-dark" type="submit" name="submit">Update</button>
        </form>

    </div>
</body>

</html>