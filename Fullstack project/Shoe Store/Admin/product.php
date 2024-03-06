<?php require 'connection.php'?>
    <h1>Products</h1>


    <button id="toggle-btn" onclick="toggleProduct()">Add Product</button>



    <div id="add-product" class="hidden productAdd">
        <form method="post">

            <input type="file" name="product_image" required>

            <br>


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


            Category: <select>
                <option>Men</option>
                <option>Women</option>
                <option>Kids</option>
                placeholder="none"
            </select>


            <div class="add-button">
                <input type="submit" name="add" value="Add">

                <button>Close</button>
            </div>
        </form>
    </div>
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
    </div>




