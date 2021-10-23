<?php

session_start();

if(!isset($_SESSION['username'])) {
    echo "You are logged out";
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#" target="_blank">Code Smashers</a>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>

            <div class="contact_btn">
                <a href="logout.php">Log Out</a>
            </div>
        </nav>

        <div class="center_content">
            <h1>Hello this is <?php echo $_SESSION['username'] ?></h1>
            <h2>coder / full stack developer</h2>
        </div>

        <div class="social_network">
            <div class="fa_icons">
                <a href="#">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
            </div>
            <div class="fa_icons">
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
            <div class="fa_icons">
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="fa_icons">
                <a href="#">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="grid_sec">
            <img src="./image.png" alt="">
        </div>
    </header>
</body>
</html>