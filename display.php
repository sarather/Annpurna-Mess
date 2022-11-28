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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body {
        background-color: #d6f5f5;
    }
    </style>
</head>

<body background-col>

    <br><br><br><br><br><br><br>
    <p><a href="addmenu.php">Add Menu</a></p>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Vegitable</th>
                <th scope="col">Roti</th>
                <th scope="col">Rice</th>
                <th scope="col">Dal</th>
                <th scope="col">Curd</th>
                <th scope="col">Sweet</th>
                <th scope="col">Special</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from addmenu";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['menuid'];
                    $category = $row['category'];
                    $vegitable = $row['vegitable'];
                    $roti = $row['roti'];
                    $rice = $row['rice'];
                    $dal = $row['dal'];
                    $curd = $row['curd'];
                    $sweet = $row['sweet'];
                    $special = $row['special'];

                    echo '<tr>
                    <th scope="row">' . $category . '</th>
                    <td>' . $vegitable . '</td>
                    <td>' . $roti . '</td>
                    <td>' . $rice . '</td>
                    <td>' . $dal . '</td>
                    <td>' . $curd . '</td>
                    <td>' . $sweet . '</td>
                    <td>' . $special . '</td>
                    <td><button class="btn btn-primary"><a href="updatemenu.php?updatemenuid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="deletemenu.php?deletemenuid=' . $id . '" class="text-light">Delete</a></button>
            </td>
                    
                </tr>';
                }
            }
            ?>

        </tbody>
    </table>


</body>

</html>