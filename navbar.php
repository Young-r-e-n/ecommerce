<?php
session_start(); // Start the session to check login status

// Example cart item count
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            <?php if (!isset($_SESSION['user_id'])): ?>
                <!-- Show Login and Sign up buttons if session is not started -->
                <button id="btn-login"><a href="login.php">Login</a></button>
                <button id="btn-signup"><a href="signup.php">Sign up</a></button>
            <?php else: ?>
                <!-- Show User icon and Cart icon with item count if session is started -->
                <div class="dropdown">
                    <i class="fa-solid fa-user dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <a href="cart.php">
                <i class="fa-solid fa-cart-shopping">
    <span class="cart-count">
        <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
    </span>
</i>
                    <span class="cart-count"><?= $cartItemCount ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <!-- top navbar -->
<script>
  .then(data => {
    alert('Product added to cart!');
    
    // Update the cart count
    const cartCountElement = document.querySelector('.cart-count');
    cartCountElement.textContent = parseInt(cartCountElement.textContent) + 1;
})

</script>
    <div class="home-section">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" width="180px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clothes.php">Clothes</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                      <li><a class="dropdown-item" href="T-Shirt.php">T-Shirt</a></li>
                      <li><a class="dropdown-item" href="Hoodies.php">Hoodies</a></li>
                      <li><a class="dropdown-item" href="Pants.php">Pants</a></li>
                      <li><a class="dropdown-item" href="SportShoes.php">Sport Shoes</a></li>
                      <li><a class="dropdown-item" href="Smartwatches.php">Smart Watch</a></li>
                      <li><a class="dropdown-item" href="Glasses.php">Glasses</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->
    </div>
</body>
