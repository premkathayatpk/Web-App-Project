<?php
require ('header.php');
require_once('connection.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
    <div class="product">
    <h1>Products</h1>


    <button id="toggle-btn" onclick="toggleProduct()">Add Product</button>



    <div id="add-product" class="hidden productAdd">
        <form method="post" action="" enctype="multipart/form-data">

        <input type="file" name="product_image" require>
           
            <?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
            <br>
           


            <input type="text" name="product_name" placeholder="Product Name" required>
            <br>
            <input type="number" name="product_price" placeholder="Price" required>

            <br>
            <input type="text" name="product_size" placeholder="Size" required>
            <br>
            <input type="text" name="brand" placeholder="Brand Name	" required>

            <br>
            <input type="number" name="qty" placeholder="No. of Stock" required>
            <br>


            Category: <select name="category">
                <option>Men</option>
                <option>Women</option>
                <option>Kids</option>
              
            </select>


            <div class="add-button">
                <input type="submit" name="add" value="Add">

                <button>Clear</button>
            </div>
        </form>
    </div>


    <?php
			if (isset($_POST['add']))
				{
             

                    // Retrieve form data
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								 // Handle file upload
    $name = $code.$_FILES["product_image"]["name"];
    $temp = $_FILES["product_image"]["tmp_name"];
    $error = $_FILES["product_image"]["error"];

    if ($error !== UPLOAD_ERR_OK) {
        die("Error uploading file! Error code: $error");
    }

    $upload_dir = "../photo/";
    $upload_path = $upload_dir . basename($name);

    // Validate file size
    if ($_FILES["product_image"]["size"] > 3000000) {
        die("File size is too big!");
    }

    // Move uploaded file
    if (!move_uploaded_file($temp, $upload_path)) {
        die("Error moving uploaded file!");
    }

    // Insert product data into database
    $q1 = "INSERT INTO product (product_id, product_name, product_price, product_size, product_image, brand, category)
        VALUES ('$product_code', '$product_name', '$product_price', '$product_size', '$name', '$brand', '$category')";

    $q2 = "INSERT INTO stock (product_id, qty) VALUES ('$product_code', '$qty')";

    if (mysqli_query($conn, $q1) && mysqli_query($conn, $q2)) {
        header("Location: product.php");
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }

    // Close database connection
    //mysqli_close($conn);
}
?>




    <div class="product-search">
        <input type="text" placeholder="search product here">
    </div>

    <div class="product-table">
        <table>

            <thead>
                <tr>
                    <th> Image</th>
                    <th>Product Name</th>
                    <th>Brand</th>
                    <th>Product Price</th>
                    <th>Product Sizes</th>
                    <th>Category</th>

                    <th>No. of Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
    $query = mysqli_query($conn, "SELECT * FROM `product` ORDER BY product_id DESC") or die(mysqli_error($conn));
    while ($fetch = mysqli_fetch_array($query)) {
        $id = $fetch['product_id'];
?>
        <tr class="del<?php echo $id ?>">
            <td><img class="img-polaroid" src="../photo/<?php echo $fetch['product_image'] ?>" height="70px" width="80px"></td>
            <td><?php echo $fetch['product_name'] ?></td>
            <td><?php echo $fetch['brand'] ?></td>

            <td><?php echo $fetch['product_price'] ?></td>
            <td><?php echo $fetch['product_size'] ?></td>
            <td><?php echo $fetch['category'] ?></td>


            <?php
            $query1 = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error($conn));
            $fetch1 = mysqli_fetch_array($query1);

            $qty = $fetch1['qty'];
            ?>

            <td><?php echo $qty ?></td>
            <td style="width:220px;">
                <?php
                echo "<a href='stockin.php?id=" . $id . "' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
                echo "<a href='stockout.php?id=" . $id . "' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a>";
                ?>
            </td>
        </tr>
<?php
    }
?>




            </tbody>
            </table>
    </div>
    </div>




</body>

</html>