<?php
require('vendor/autoload.php');
$con = mysqli_connect('localhost', 'root', '', 'mess');
$id = $_GET['genratetokenid'];

$res = mysqli_query($con, "select * from customerdetails where customerid=$id");
$result = mysqli_query($con, $res);
while ($row = mysqli_fetch_assoc($result)) {
    $actualtokens = $row['tokens'];
}
if (mysqli_num_rows($res) > 0) {
    $html = '<style>table {
        margin: 0 auto;
        border-collapse: collapse;
        border-style: hidden;
        /*Remove all the outside
        borders of the existing table*/
    }
    table td {
        padding: 0.5rem;
        border: 5px solid orange;
    }
    table th {
        padding: 0.5rem;
        border: 5px solid ForestGreen;
    }</style><table class="table">';
    $html .= '<tr><td>Name</td><td>Remaning Tokens</td><td>Phone Number</td><td>Date and Time</td></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= '<tr><td>' . $row['customername'] . '</td><td>' . $row['tokens']  . '</td><td>' . $row['customermobile'] . '</td><td>' . date("Y-m-d h:i:sa") . '</td></tr>';
    }
    $html .= '</table>';
} else {
    $html = "Data not found";
}
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file = 'media/' . time() . '.pdf';
$mpdf->output($file, 'D');
//D
//I
//F
//S
$sqls = "update customerdetails set tokens=tokens-1 where customerid=$id";
$result1 = mysqli_query($con, $sqls);
if ($result1) {

    header('location:view_post.php');
} else {
    die(mysqli_error($mysqli));
}