<?php
include 'connection.php';
include 'menubar2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Plans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body {
        background-color: #e6e6ff;
    }
    </style>
</head>
<p><br><br><br></p>
<h1 class="text-center my-4">Annpurana Mess Plans</h1>
<div>
    <table class="table w-100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Number Of Tokens</th>
                <th scope="col">Validty</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from manageplans";
            $result = mysqli_query($mysqli, $sql);
            $idtemp = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['pid'];
                $tokens = $row['ptokens'];
                $validty = $row['validty'];
                $amount = $row['pamount'];
                $idtemp = $idtemp + 1;
                echo '<tr>
                <td>' . $idtemp . '</td>
                <td>' . $tokens . '</td>
                <td>' . $validty . '</td>
                <td>' . $amount . '</td>
            
        
            </tr>';
            }


            ?>
        </tbody>

</div>

<body>


</body>

</html>