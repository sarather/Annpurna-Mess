<?php
include 'connection.php';
$db = mysqli_connect('localhost', 'root', '', 'mess');
$id = $_GET['updatemenuid'];
$sql = "select * from addmenu where menuid = $id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$category = $row['category'];
$vegitable = $row['vegitable'];
$roti = $row['roti'];
$rice = $row['rice'];
$dal = $row['dal'];
$curd = $row['curd'];
$sweet = $row['sweet'];
$special = $row['special'];
if (isset($_POST['submit'])) {
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $vegitable = mysqli_real_escape_string($db, $_POST['vegitable']);
    $roti = mysqli_real_escape_string($db,  $_POST['roti']);
    $rice = mysqli_real_escape_string($db,  $_POST['rice']);
    $dal = mysqli_real_escape_string($db, $_POST['dal']);
    $curd = mysqli_real_escape_string($db, $_POST['curd']);
    $sweet = mysqli_real_escape_string($db, $_POST['sweet']);
    $special = mysqli_real_escape_string($db, $_POST['special']);

    $sqls = "update addmenu set menuid=$id, category='$category', vegitable='$vegitable',
     roti='$roti', rice='$rice', dal='$dal', curd='$curd', sweet='$sweet', special='$special' where menuid=$id";



    $result = mysqli_query($db, $sqls);

    if ($result) {

        header('location:display.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>

<body>
    <form onsubmit="return myFun()" method="POST">
        <label for="category">Category</label>
        <input type="text" id="category" name="category" value=<?php echo $category ?>>
        <!-- <select id="category">
            <option value="1">Lunch</option>
            <option value="2">Dinner</option>
        </select> -->
        <label for="vegitable">Vegitable</label>
        <input type="text" id="vegitable" name="vegitable" value=<?php echo $vegitable ?>>
        <label for="roti">Roti</label>
        <input type="text" id="roti" name="roti" value=<?php echo $roti ?>>
        <label for="rice">Rice</label>
        <input type="text" id="rice" name="rice" value=<?php echo $rice ?>>
        <label for="dal">Dal</label>
        <input type="text" id="dal" name="dal" value=<?php echo $dal ?>>
        <label for="curd">Curd</label>
        <input type="text" id="curd" name="curd" value=<?php echo $curd ?>>
        <label for="sweet">Sweet</label>
        <input type="text" id="sweet" name="sweet" value=<?php echo $sweet ?>>
        <label for="special">Special</label>
        <textarea id="special" name="special" value=<?php echo $special ?>></textarea>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
<script type="text/javascript">
function myFun() {
    var category = document.getElementById('category').value
    var vegitable = document.getElementById('vegitable').value
    var roti = document.getElementById('roti').value
    var rice = document.getElementById('rice').value
    var dal = document.getElementById('dal').value
    var curd = document.getElementById('curd').value
    var sweet = document.getElementById('sweet').value
    var special = document.getElementById('special').value

    if (category == "") {
        alert("Category Can't be Empty")
        return false
    }
    if (vegitable == "") {
        alert("Vegitable Can't be Empty")
        return false
    }
    if (roti == "") {
        alert("Roti Can't be Empty")
        return false
    }
    if (rice == "") {
        alert("Rice Can't be Empty")
        return false
    }
    if (dal == "") {
        alert("Dal Can't be Empty")
        return false
    }
    if (curd == "") {
        alert("Curd Can't be Empty")
        return false
    }

}
</script>

</html>