<?php include 'header.php'?>
<?php include 'Admin/connection.php'?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
<!-- Main section -->
<main>
        <div class="items-container">
        <?php
 $select_brand = "select *from `product`";
 $result_brand = mysqli_query($conn,$select_brand);


while($row_data = mysqli_fetch_assoc($result_brand)){
  $product_category =$row_data['category'];

  $product_brand = $row_data['brand'];
  $product_size = $row_data['product_size'];
  $product_price =$row_data['product_price'];
  $product_image =$row_data['product_image'];
  $product_title =  $row_data['product_name'];

 
  if($product_category== 'Kids'){

  echo " <div class='item-container'>
  <img class='item-image' src='photo/$product_image' alt='item image'>
  <div class='company-name'>$product_brand</div>
  <div class='item-name'>$product_title</div>

  <div class='size'>
   Size: $product_size
</div>
  <div class='price'>
    Rs. $product_price
  </div>
 
  <button class='btn-add-cart' onclick=''>Add to Cart</button>
</div>";

}
 }
?>
</body>

</html>
<?php include 'footer.php'?>