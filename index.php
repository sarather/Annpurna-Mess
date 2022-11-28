<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    body {
        font-family: "Times New Roman", Georgia, Serif;
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
            <a href="#home" class="w3-bar-item w3-button">Annpurana Mess</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="adminPage.php" class="w3-bar-item w3-button">Admin Login</a>
                <a href="login.php" class="w3-bar-item w3-button">Customer Login</a>
                <a href="viewplans.php" class="w3-bar-item w3-button">View Plans</a>
                <a href="ContactUs.php" class="w3-bar-item w3-button">Contact Us</a>

            </div>
        </div>
    </div>

    <div class="w3-content" style="max-width:1100px">

        <!-- Menu Section -->
        <div class="w3-row w3-padding-64" id="menu">
            <div class="w3-col l6 w3-padding-large">
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
                    }
                }
                ?>
                <h1 class="w3-center">Our Menu</h1><br>
                <h2 class="w3-center"><?php echo $category; ?></h2><br>
                <h4>Vegitable</h4>
                <p class="w3-text-grey"><?php echo $vegitable; ?></p><br>

                <h4>Roti</h4>
                <p class="w3-text-grey"><?php echo $roti; ?></p><br>

                <h4>Rice</h4>
                <p class="w3-text-grey"><?php echo $rice; ?></p><br>

                <h4>Dal</h4>
                <p class="w3-text-grey"><?php echo $dal; ?></p><br>

                <h4>Crud</h4>
                <p class="w3-text-grey"><?php echo $curd; ?></p><br>
                <h4>Sweet</h4>
                <p class="w3-text-grey"><?php echo $sweet; ?></p><br>
                <h4>Special</h4>
                <p class="w3-text-grey"><?php echo $special; ?></p><br>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <div class="w3-col l6 w3-padding-large">
                <img src="photo/homeb.jpg" class="w3-round w3-image" alt="Menu" style="width:100%"><br><br>
                <img src="photo/homeb1.jpg" class="w3-round w3-image" alt="Menu" style="width:100%">
            </div>
        </div>

        <!-- About Section -->
        <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="photo/ca.jpg" class="w3-round w3-image" alt="Table Setting" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">About Annpurana Mess</h1><br>
                <h5 class="w3-center">Tradition since 2022</h5>
                <p class="w3-large">The Annpurana Mess was founded in Gwalior by Mr. Ritik and team.
                    Annpurana Mess is popular vegitarian choice for its authenticity. Aims to provide
                    food in the most homely manner taking care of all the hygiene in the process of making food.
                    Selecting the best quality ingredients and keeping it as much pocket friendly as possible.


                    <span class="w3-tag w3-light-grey">seasonal</span> ingredients.
                </p>
                <p class="w3-large w3-text-grey w3-hide-medium">
                    People coming here and eating their meals feels as if they are eating Home Cooked Food.</p>
            </div>
        </div>
        <!-- Footer -->
        <footer class="w3-center w3-light-grey w3-padding-32">
            <p>Created By :<a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Ritik Chetna Sakshi
            </p>
        </footer>


</html>