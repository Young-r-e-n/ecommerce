<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the product to the cart (for simplicity, we'll just store the product ID)
    $_SESSION['cart'][] = $productId;

    // Return success message
    echo "Product added to cart";
} else {
    echo "Failed to add product to cart";
}
?>
