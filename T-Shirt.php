<!DOCTYPE html>
<html lang="en">
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
            <button id="btn-login"><a href="login.php">Login</a></button>
            <button id="btn-signup"><a href="signup.php">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
    <!-- top navbar -->

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





        <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>Biggest Clothes Sale
                    <br> <span>Up To 50% Off</span>
                </h3>
                <p>SPRING SALE!!! Get up to 50% off of any product purchased from the website from May 20th to August 20. HURRY WHILE STOCKS LAST.</p>
            </div>
            <div class="img">
                <img src="image/IMG_3789.jpg" alt="">
            </div>
        </section>
        <!-- home content -->
    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="image/IMG_3790.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Supreme X Jackie Chan</h5>
                        <p>Supreme tshirts all sizes available</p>
                        <p><strong>$20.30 <strike>$25.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="image/IMG_3791.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Supreme X Nasty Nas</h5>
                        <p>all sizes availble from small to 6XL</p>
                        <p><strong>$15.10 <strike>$20.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="image/IMG_3792.jpg" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Supreme X Welcome to Jamaica</h5>
                        <p>all sizes availble from small to 6XL</p>
                        <p><strong>$50.10 <strike>$60</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <p>SPRING SALE!!! Get up to 50% off of any product purchased from the website from May 20th to August 20. HURRY WHILE STOCKS LAST.</p>
        </div>
    </div>
    <!-- banner -->
 <!-- product cards -->
 <?php

$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the category from the URL parameter
$category = "T-shirt";

// Prepare the SQL statement to fetch products by category
$sql = "SELECT * FROM products WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $category);
$stmt->execute();
$result = $stmt->get_result();
?>
<div class="container" id="product-cards">
    <h1 class="text-center"><?= strtoupper($category) ?> PRODUCTS</h1>
    <div class="row" style="margin-top: 30px;">
        <?php
        // Database connection and query execution remain the same
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display the product card with responsive grid classes
                echo '
                <div class="col-md-3 col-sm-6 col-12 py-3">
                    <div class="card">
                        <img src="' . $row['image'] . '" alt="' . $row['name'] . '">
                        <div class="card-body">
                            <h3>' . $row['name'] . '</h3>
                            <p>' . $row['description'] . '</p>
                            <div class="star">';
                
                // Display star rating
                for ($i = 0; $i < $row['rating']; $i++) {
                    echo '<i class="fas fa-star checked"></i>';
                }

                echo '</div>
                            <h5>$' . $row['price'] . ' <strike>$' . $row['original_price'] . '</strike> 
                            <span><i class="fa-solid fa-cart-shopping add-to-cart" data-product-id="' . $row['id'] . '"></i></span></h5>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No products found in this category.</p>";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</div>


 <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p>The shop is bursting with an array of exciting products, each one carefully curated to cater to diverse tastes and needs. From trendy clothing and accessories to innovative gadgets and gizmos, there's something for everyone. The shelves are stocked with premium skincare and haircare products, alongside a vast selection of books, games, and puzzles for entertainment. Gourmet foodies will delight in the artisanal treats and specialty teas, while home decor enthusiasts will find unique pieces to elevate their living spaces. With new arrivals constantly updating the inventory, customers are sure to discover something fresh and fascinating with every visit.</p>

    <hr>
</div>
    <!-- product -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Best Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
<!-- offer -->






<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Fashion</h3>
                <p>The shop showcases stylish clothing and trendy accessories for everyone.
                </p>
                <p>
                    Sasha <br>
                    Chantal <br>
                    Benard <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+254-729(671)748</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>benardobi10970@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="policy.php">Privacy policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>The shop offers personalized styling, alterations, and gift wrapping services.</p>
                <ul>
                    <li><a href="#">Smart phone</a></li>
                    <li><a href="#">Smart watch</a></li>
                    <li><a href="#">Airpods</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p>Reach us easily on our social media platforms below in case you have complains, compliments or want to enquire about a product</p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>TH3 CLVN</strong>.All Rights Reserved
    </div>
    <div class="credits">
        Designed By <a href="#">Benard Obiero</a>
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="40px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</p>