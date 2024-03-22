<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    // Start or resume session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Get product details from the form submission
    $title = $_POST['title'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $brand = $_POST['brand'];
    $image = $_POST['image'];

    // Prepare item data
    $item = [
        'title' => $title,
        'price' => $price,
        'size' => $size,
        'brand' => $brand,
        'image' => $image
    ];

    // Add the item to the cart
    $_SESSION['cart'][] = $item;

    // Redirect back to the page where the item was added from
    header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    exit;
} else {
    // Redirect back to the page where the item was added from with an error message
    header("Location: {$_SERVER['HTTP_REFERER']}?error=1");
    exit;
}
?>
