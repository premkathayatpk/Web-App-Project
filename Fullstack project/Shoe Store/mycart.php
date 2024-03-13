<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  <div class="mycart">
    <h1>My Cart</h1>
    <form>
      <table>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Size</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Add</th>
          <th>Remove</th>
          <th>Subtotal</th>

        </tr>
        <tr>
          <td><img src="images/women/1.png" alt=""></td>
          <td>Goldstar</td>
          <td>8</td>
          <td>1</td>
          <td>2500</td>
          <td>+</td>
          <td>-</td>
          <td>2500</td>
        </tr>
        <tr>
          <td><img src="images/men/1.png" alt=""></td>
          <td>Nike</td>
          <td>9</td>
          <td>2</td>
          <td>3000</td>
          <td>+</td>
          <td>-</td>
          <td>6000</td>
        </tr>
      </table>
      <div class="totalAmount">
        <h3> Total Amount(Rs): </h3>
        <button onclick="">Empty Cart</button>
      </div>
      <div class='purchase'>
        <a href='#'>Continue Shopping</a>
        <button onclick="">Purchase</button>
      </div>

    </form>

    <div class="bag-page">
      <div class="bag-items-container">
      </div>
      <div class="bag-summary">
      </div>

    </div>
  </div>
</body>

</html>