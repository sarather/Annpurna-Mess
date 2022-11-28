<?php include 'menubar.php';
include 'connection.php';

$sql = "select * from customerdetails";
$result = mysqli_query($mysqli, $sql);
$totalamount = 0;
$totalcustomer = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $totalamount = $totalamount + $row['amount'];
    $totalcustomer += 1;
}
$sql1 = "select * from customerdetails where tokens > 0 ";
$result1 = mysqli_query($mysqli, $sql1);
$activeamount = 0;
$activecustomer = 0;
while ($row = mysqli_fetch_assoc($result1)) {
    $activeamount = $activeamount + $row['amount'];
    $activecustomer += 1;
}
$sql2 = "select * from employeedetails";
$result2 = mysqli_query($mysqli, $sql2);
$totalemployee = 0;
while ($row = mysqli_fetch_assoc($result2)) {
    $totalemployee = $totalemployee + 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body {
        background-color: #d6f5f5;
    }
    </style>
</head>

<body>
    <p><br><br><br><br><br><br><br><br><br><br>
        Total Number of Customers : <?php echo $totalcustomer ?><br>
        Total Number of Active Customer :<?php echo $activecustomer ?><br>
        Total Profit : <?php echo $totalamount ?><br>
        Active Customer Profit : <?php echo $activeamount ?><br>


    </p>
</body>

</html>