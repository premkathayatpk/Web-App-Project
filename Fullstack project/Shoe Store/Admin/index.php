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