<?php
include('dbConfig.php');

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    die();
}



$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn, "select * from customerdetails where customerusername = '$user'");
$rowr = mysqli_fetch_array($query);
$id = $rowr['customerid'];


$query1 = mysqli_query($conn, "select * from customerdetails where customerid = '$id'");
$result = mysqli_num_rows($query1);

?>
<hr>
<br><br>




<?php
for ($i = 1; $i <= $result; $i++)
    $row =  mysqli_fetch_array($query1)
?>

<?php
$Date = $row['registrationdate'];
$validitydate;
if ($row['tokens'] <= 120 && $row['tokens'] > 60) {

    $validitydate = date('Y-m-d', strtotime($Date . ' + 80 days'));
} else if ($row['tokens'] <= 60 && $row['tokens'] > 30) {

    $validitydate = date('Y-m-d', strtotime($Date . ' + 45 days'));
} else if ($row['tokens'] <= 30) {

    $validitydate = date('Y-m-d', strtotime($Date . ' + 20 days'));
}
?>

<h2> Welcome :<?php echo $row['customername'] ?> </h2>
<h3>Username : <?php echo $row['customerusername'] ?> </h3>
<h4> Validty Upto : <?php echo $validitydate ?> </h4>
<h4> Remaning Tokens : <?php echo $row['tokens'] ?> </h4>


<head>
    <title>Home page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    body {
        font-family: "Times New Roman", Georgia, Serif;
        background-color: #ccffee;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="view_post.php" class="w3-bar-item w3-button">Annpurana Mess</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="submitfeedback.php" class="w3-bar-item w3-button">Send Feedback</a>
                <a href="changepassword.php" class="w3-bar-item w3-button">Change Password</a>
                <a href="genratetoken.php?genratetokenid=<?php echo $id ?>" class="w3-bar-item w3-button">Genrate
                    Tokens</a>
                <a href="index.php" class="w3-bar-item w3-button">Logout</a>
            </div>
        </div>
    </div>

</body>