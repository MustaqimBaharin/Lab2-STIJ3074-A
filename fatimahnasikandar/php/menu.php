<?php
session_start();

if ($_SESSION["session_id"]) {
    $username = $_SESSION["email"]; // carry email user
    $name = $_SESSION["name"]; // carry name user
}else{
    echo "<script> alert('Session not available. Please login')</script>"; // session finish
    echo "<script> window.location.replace('../html/login.html')</script>"; // return to login page
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Main Page</title>
    <!--Menu page Tittle-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/fatimah.js"></script>
    <!--reference JavaScript-->
    <link rel="stylesheet" href="../css/style.css">
    <!--reference CSS style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--reference cloudflare stylesheet-->

</head>

<body>
    <div class="header">
        <!--Header content with web name-->
        <h1>Fatimah Nasi Kandar Self-Pickup</h1>
        <p>Origin from Perlis, Since 1996</p>

    </div>
    <div class="mobile-container">
        <!--mobile container-->
        <div class="topnavbar">
            <!--Top Navigation Bar-->
            <a href="menu.php">Menu</a>
            <!--Navigation to Menu Page-->

            <div id="myLinks">
                <a href="myorder.php">My Order</a>
                <!--Navigation to My Order Page-->
                <a href="#">My Profile</a>
                <!--Navigation to My Profile Page-->
                <a href="../html/login.html" class="right" onclick="logout()">Logout</a>
                <!--Navigation to Logout and return to Login Page-->
            </div>
            <!--Burger icon menu-->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <center>

        <body style="background-color:#002879;color:white">
            <h3>Welcome <?php echo $name ?></h3>
            <!--carry and echo user name-->
            <h3>Please select your order</h3>
            <!--carry and echo order from menu page-->
    </center>

    <div class="main">
        <div class="row">
            <!--class by row-->
            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/ayam.jpg" style="width:80px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Ayam Goreng</h3>
                    <p style="color:rgb(0, 0, 0);">RM5.00</p>
                    <a href="cart.php?menu=Nasi Ayam Goreng">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
                </a>
            </div>

            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/fatimahlogo.png" style="width:100px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Ayam Madu</h3>
                    <p style="color:rgb(0, 0, 0);">RM6.00</p>
                    <a href="cart.php?menu=Nasi Ayam Madu">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!--class by row-->
            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/fatimahlogo.png" style="width:100px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Daging</h3>
                    <p style="color:rgb(0, 0, 0);">RM5.00</p>
                    <a href="cart.php?menu=Nasi Daging">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
                </a>
            </div>

            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/fatimahlogo.png" style="width:100px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Ikan</h3>
                    <p style="color:rgb(0, 0, 0);">RM6.00</p>
                    <a href="cart.php?menu=Nasi Ikan">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!--class by row-->
            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/fatimahlogo.png" style="width:100px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Sotong</h3>
                    <p style="color:rgb(0, 0, 0);">RM9.00</p>
                    <a href="cart.php?menu=Nasi Sotong">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
                </a>
            </div>

            <div class="column-card">
                <!--class for column card-->
                <div class="card" type="submit">
                    <img src="../images/fatimahlogo.png" style="width:100px">
                    <!--nasi kandar menu image-->
                    <h3 style="color:rgb(0, 0, 0);">Nasi + Udang</h3>
                    <p style="color:rgb(0, 0, 0);">RM7.00</p>
                    <a href="cart.php?menu=Nasi Udang">
                        <!--carry details to cart page-->
                        <p><button>Add to Cart</button></p>
                        <!--submit button to cart page-->
                    </a>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="bottomnavbar">
        <!--Bottom Navigation Bar-->
        <a href="../index.html">Home</a>
        <!--Navigation to Landing Page-->
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    </script>

</body>

</html>