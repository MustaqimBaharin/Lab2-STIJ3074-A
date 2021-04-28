<?php
session_start();
if ($_SESSION["session_id"]) {
    $username = $_SESSION["email"];
    $name = $_SESSION["name"];
    $menu = $_GET['menu'];
} else {
    echo "<script> alert('Session not available. Please login')</script>";
    echo "<script> window.location.replace('../html/login.html')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Subjects Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/fatimah.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
        <h1>Fatimah Nasi Kandar Self-Pickup</h1>
        <p>Origin from Perlis, Since 1996</p>

    </div>
    <div class="topnavbar">
        <a href="menu.php">Menu</a>
        <a href="myorder.php">My Order</a>
        <a href="#">My Profile</a>
        <a href="../html/login.html" class="right">Logout</a>
    </div>
    <center>

        <body style="background-color:#002879;color:white">
            <h3>Welcome <?php echo $name ?></h3>
            <?php
        echo "<h3> Selected " . $menu . "</h3>";
        ?>
            <h3>Please select pickup time around</h3>
    </center>
    <div class="main">
        <div class="row">

            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=3pm" style="text-decoration:none; color:#000000">
                    <div class="card" type="submit">
                        <h3>3.00 PM </h3>
                    </div>
                </a>
            </div>

            <div class="column-card">
                <a href="timet.php?menu=<?php echo $menu ?>&time=4pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>4.00 PM</h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">

            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=5pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>5.00 PM</h3>
                    </div>
                </a>
            </div>

            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=6pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>6.00 PM</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">

            <div class="column-card">
                <a href="time.php?menu=<?php echo $menum ?>&time=7pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>7.00 PM</h3>

                    </div>
                </a>
            </div>
            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=8pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>8.00PM</h3>
                    </div>
                </a>
            </div>
        </div>
        </a>

        <div class="row">
            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=9pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>9.00PM</h3>
                    </div>
                </a>
            </div>
            <div class="column-card">
                <a href="time.php?menu=<?php echo $menu ?>&time=10pm" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <h3>10.00PM</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="bottomnavbar">
        <a href="../index.html">Home</a>
    </div>
</body>
</html>




