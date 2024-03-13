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

            <input type="file" name="image"   required/>
           

            <br>
           


            <input type="text" name="product_name" placeholder="Product Name" required>
            <br>
            <input type="number" name="product_price" placeholder="Price" required>

            <br>
            <input type="number" name="product_size" placeholder="Size" required>
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
    if (isset($_POST['add'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_size = $_POST['product_size'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $qty = $_POST['qty'];
        
        //insesrt img
        $filename = $_FILES["image"]["name"];

        $tempname = $_FILES["image"]["tmp_name"];  
    
            $folder = "uplods/".$filename;   
           // $sql = "INSERT INTO products (image) VALUES ('$filename')";

            // function to execute above query
    
           
    
            // Add the image to the "image" folder"
    
            if (move_uploaded_file($tempname, $folder)) {
    
                $msg = "Image uploaded successfully";
    
            }else{
    
                $msg = "Failed to upload image";
    
        }
    
    
    
   
    

    

           

            // Insert product details including photo name into product table
            $sql1 = "INSERT INTO products (product_name, product_price, product_size, brand, category,image)
                     VALUES ('$product_name','$product_price','$product_size', '$brand', '$category',$filename )";
                     
                          mysqli_query($dbname, $sql);   
            if ($conn->query($sql1) === TRUE) {
                // Retrieve the last inserted product_id
                $product_id = $conn->insert_id;
                
                // Insert stock details into stock table with corresponding product_id
                $sql2 = "INSERT INTO stock (product_id, qty) VALUES ('$product_id', '$qty')";
                if ($conn->query($sql2) === TRUE) {
                    header("location: product.php");
                } else {
                    echo "Error inserting stock details: " . $conn->error;
                }
            }
            $result = mysqli_query($db, "SELECT * FROM image");
        }

            $conn->close();
        
    
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