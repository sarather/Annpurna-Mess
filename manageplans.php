<?php
include 'connection.php';
include 'menubar.php';
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

</head>
<p><br><br><br><br><br></p>
<h1 class="text-center my-4">Annpurana Mess Plans</h1>
<div>
    <table class="table w-100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Number Of Tokens</th>
                <th scope="col">Validty</th>
                <th scope="col">Amount</th>
                <th scope="col">Operation</th>
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
                <td><button class="btn btn-primary"><a href="updateplans.php?updateplansid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger my-2"><a href="deleteplans.php?deleteplansid=' . $id . '" class="text-light">Delete</a></button>
            </td>
        
            </tr>';
            }


            ?>
        </tbody>

</div>

<body>
    <button class="btn btn-primary my-3"> <a href="addplans.php" class="text-light">Add Plans</a>
    </button>

</body>

</html>