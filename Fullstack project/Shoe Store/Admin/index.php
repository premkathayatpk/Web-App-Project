<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <!-- navbar -->

    <div class="navbar">
        <div class="nav-logo">
            <a href="#" onclick="showPage('home')">
                <span class="icon">
                    <img src="image/logo.png" alt="icone">
                </span>
                <br>
                <span class="logo-title"> Shoe Store</span>
            </a>
        </div>

        <div class="nav-items">
            <a href="#" onclick="showPage('home')">
                <span class="icon">
                    <i class="fa-solid fa-house"></i> </span>
                Dashboard
            </a>
            <a href="#" onclick="showPage('product')">
                <span class=" icon">
                    <i class="fa-solid fa-layer-group"></i> </span>
                Product
            </a>

            <a href="#" onclick="showPage('order')">
                <span class="icon">
                    <i class="fa-solid fa-cart-shopping"></i> </span>
                Order
            </a>


            <a href="#" onclick="showPage('customer')">
                <span class="icon">
                    <i class="fa-solid fa-users"></i>
                </span>
                Customer
            </a>

            <a href="#" onclick="showPage('report')">
                <span class="icon">
                    <i class="fa-solid fa-book"></i> </span>
                Report
            </a>



            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </div>
    </div>


    <!-- Header section -->
    <header class="header">
        <div class="menu-icon">
            <i class="fa-solid fa-bars"></i>
        </div>


        <div class="search">

            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search here">


        </div>

        <div class="user">
            <img src="image/prem.jpg" alt="Admin">
        </div>
    </header>




    <!-- main section -->
    <div class="main">

        <!-- Home page -->
        <div id="home" class="page">
            <?php include 'dashbord.php'?>
            
            <?php include 'report.php' ?>
        </div>




        <!-- --Customer page---------- -->
        <div id="customer" class="page">

           <?php include 'customer.php'?>

        </div>

        <!-- Order page -->
        <div id="order" class="page">
<?php include 'order.php' ?>
            
        </div>

        <!-- Product page -->

        <div id="product" class="page">
           <?php           include 'product.php' ?>
            </div>


           

        </div>

        <!-- report page -->

        <div id="report" class="page">
           <?php include 'report.php' ?>

    </div>
   


    <script src="admin.js">

    </script>
</body>

</html>