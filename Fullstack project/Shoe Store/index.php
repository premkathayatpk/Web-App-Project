<?php include 'header.php'?>

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
  <!-- Home page -->
  <div class="home">
    <div class=" banner_container">
      <img src="images/banner1.jpg" alt="banner image">
    </div>


    <h1>Feature Items</h1>
    <hr />
    <div class="items-container">

      <div class="item-container">
        <img class="item-image" src="images/photo/1.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>

      <div class="item-container">
        <img class="item-image" src="images/photo/2.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>

      <div class="item-container">
        <img class="item-image" src="images/photo/3.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>

      <div class="item-container">
        <img class="item-image" src="images/photo/4.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>


      <div class="item-container">
        <img class="item-image" src="images/photo/5.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>


      <div class="item-container">
        <img class="item-image" src="images/photo/6.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="addToBag(${item.id})">Add to Cart</button>
      </div>


      <div class="item-container">
        <img class="item-image" src="images/photo/7.jpg" alt="item image">
        <div class="rating"> ⭐ | 1.2k </div>
        <div class="company-name">Nike</div>
        <div class="item-name">Jodan Nike</div>
        <div class="price">
          Rs. 2500
        </div>
        <button class="btn-add-cart" onclick="">Add to Cart</button>
      </div>

    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>
<?php include 'footer.php'?>