<?php
require 'header.php'
?>

    <?php
include 'connection.php';
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
    <div id="product">
    <h1>Products</h1>


    <button id="toggle-btn" onclick="toggleProduct()">Add Product</button>



    <div id="add-product" class="hidden productAdd">
        <form method="post" action="">

            <input type="file" name="product_image"  required>

            <br>
            <?php include("random_id.php");
            $code = createRandomPassword();
 
							echo `<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>`;
							?>


            <input type="text" name="product_name" placeholder="Product Name" required>
            <br>
            <input type="text" name="product_price" placeholder="Price" required>

            <br>
            <input type="text" name="product_size" placeholder="Size" required>
            <br>
            <input type="text" name="brand" placeholder="Brand Name	" required>

            <br>
            <input type="number" name="qty" placeholder="No. of Stock" required>
            <br>


            Category: <select name="category">
                <option disabled selected value="">Choose a category</option>
                <option>Men</option>
                <option>Women</option>
                <option>Kids</option>
                placeholder="none"
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
                    $product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,10000000000000);
								

                    $name = $code.$_FILES['product_image'] ['name'];
                    $type = $_FILES["product_image"] ["type"];
                    $size = $_FILES["product_image"] ["size"];
                    $temp = $_FILES["product_image"] ["tmp_name"];
                    $error = $_FILES["product_image"] ["error"];
                

                    if ($error > 0){
                        die("Error uploading file! Code $error.");}
                    else
                    {
                        if($size > 30000000000) //conditions for the file
                        {
                            die("Format is not allowed or file size is too big!");
                        }
                        else
                        {
                            move_uploaded_file($temp,"uplodeimg/".$name);




				$q1 = mysqli_query($conn, "INSERT INTO product (product_id,product_name, product_price, product_size, product_image, brand, category)
				VALUES ('$product_name','$product_price','$product_size','$name', '$brand', '$category')");
				
                $q2 = mysqli_query($conn, "INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				header ("location:product.php");
			}}
        }
		
				?>




    <div class="product-search">
        <input type="text" placeholder="search product here">
    </div>

    <div class="product-table">
        <table>

            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Sizes</th>
                    <th>No. of Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>




            </tbody>
            </table>
    </div>
    </div>




</body>

</html>