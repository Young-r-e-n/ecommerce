<!DOCTYPE html>
<html lang="en">

<?php include"navbar.php"; ?>

        <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>Biggest Clothes Sale
                    <br> <span>Up To 50% Off</span>
                </h3>
                <p>SPRING SALE!!! Get up to 50% off of any product purchased from the website from May 20th to August 20. HURRY WHILE STOCKS LAST.</p>
            </div>
            <div class="img">
                <img src="./image/b2.png" alt="">
            </div>
        </section>
        <!-- home content -->
    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Smart Watch</h5>
                        <p>Get to check the time in style with our custom made watches from Tesla</p>
                        <p><strong>$200.30 <strike>$250.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        <p>Whether you want to run or style up... Nike got you covered with CRAZY DEALS spanning all through. "JUST DO IT"</p>
                        <p><strong>$150.10 <strike>$200.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard3.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        <p>Backpacks have never been cheaper... order with us and get sorted</p>
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
$category = "shoes";

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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Attach click event to all "Add to Cart" icons
        const cartIcons = document.querySelectorAll('.add-to-cart');
        
        cartIcons.forEach(icon => {
            icon.addEventListener('click', function () {
                const productId = this.getAttribute('data-product-id');
                
                // Send an AJAX request to add the product to the cart
                fetch('add_to_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `product_id=${productId}`
                })
                .then(response => response.text())
                .then(data => {
                    alert('Product added to cart!');
                    // Optionally, update the cart icon or badge with the number of items
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>

</body>
</>