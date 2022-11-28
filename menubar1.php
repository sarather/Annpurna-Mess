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
            <a href="view_post.php" class="w3-bar-item w3-button">Annpurana Mess</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="submitfeedback.php" class="w3-bar-item w3-button">Send Feedback</a>
                <a href="changepassword.php" class="w3-bar-item w3-button">Change Password</a>
                <a href="genratetoken.php" class="w3-bar-item w3-button">Genrate Tokens</a>
                <a href="logout.php" class="w3-bar-item w3-button">Logout</a>

            </div>
        </div>
    </div>

</body>

</html>