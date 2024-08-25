<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Check if the cart exists and the product is in the cart
    if (isset($_SESSION['cart'])) {
        $key = array_search($productId, $_SESSION['cart']);
        if ($key !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }

    // Redirect back to the cart page
    header("Location: cart.php");
    exit();
}
?>
