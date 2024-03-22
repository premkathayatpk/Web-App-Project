<?php include 'header.php'; ?>
<?php include 'Admin/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link src="images/logo.png">
  <title>Shoes Store</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <!-- Main section -->
  <main>
    <center>
      <h1>Featured Products</h1>
    </center>
    <hr>
    <div class="items-container">
      <?php
      $select_brand = "SELECT * FROM `product`";
      $result_brand = mysqli_query($conn, $select_brand);
      while ($row_data = mysqli_fetch_assoc($result_brand)) {
        $product_title =  $row_data['product_name'];
        $product_brand = $row_data['brand'];
        $product_size = $row_data['product_size'];
        $product_price = $row_data['product_price'];
        $product_image = $row_data['product_image'];
        $product_category = $row_data['category'];

        echo "<div class='item-container'>
                <img class='item-image' src='photo/$product_image' alt='item image'>
                <div class='company-name'>$product_brand</div>
                <div class='item-name'>$product_title</div>
                <div class='category'>$product_category</div>
                <div class='size'>Size: $product_size</div>
                <div class='price'>Rs. $product_price</div>
                <form action='addToCart.php' method='POST'>
                  <input type='hidden' name='title' value='$product_title'>
                  <input type='hidden' name='price' value='$product_price'>
                  <input type='hidden' name='size' value='$product_size'>
                  <input type='hidden' name='brand' value='$product_brand'>
                  <input type='hidden' name='image' value='$product_image'>
                  <button type='submit' class='btn-add-cart'>Add to Cart</button>
                </form>
              </div>";
      }
      ?>
    </div>
  </main>

  <script src="index.js"></script>
  <script src="data/items.js"></script>
  <script src="scripts/index.js"></script>
</body>

</html>
<?php include 'footer.php'; ?>
