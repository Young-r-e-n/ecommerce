<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize cart items array
$cartItems = [];

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartProductIds = implode(',', $_SESSION['cart']);
    $sql = "SELECT * FROM products WHERE id IN ($cartProductIds)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cartItems[] = $row;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Cart Page Content -->
    <div class="container" id="cart-page">
        <h1 class="text-center">Your Shopping Cart</h1>
        <div class="row" style="margin-top: 30px;">
            <?php if (!empty($cartItems)) { ?>
                <?php foreach ($cartItems as $item) { ?>
                    <div class="col-md-3 col-sm-6 col-12 py-3">
                        <div class="card">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                            <div class="card-body">
                                <h3><?php echo $item['name']; ?></h3>
                                <p><?php echo $item['description']; ?></p>
                                <h5>$<?php echo $item['price']; ?></h5>
                                <form method="POST" action="remove_from_cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>Your cart is empty.</p>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
