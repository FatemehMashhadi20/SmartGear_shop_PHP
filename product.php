<?php
// Sample Product Data (this could be fetched from a database)
$products = [
    1 => ["name" => "Wireless Headphones", "price" => "$99.99", "desc" => "Crisp sound and noise cancellation.", "image" => "/image/p6.jpg"],
    2 => ["name" => "Smart Watch", "price" => "$149.99", "desc" => "Track your health and stay connected.", "image" => "image/p2.jpg"],
    3 => ["name" => "Portable Speaker", "price" => "$79.99", "desc" => "Big sound in a small package.", "image" => "image/p3.jpg"],
    4 => ["name" => "Laptop Stand", "price" => "$29.99", "desc" => "Ergonomic and adjustable.", "image" => "image/p4.jpg"]
];

// Get product ID from URL
$product_id = $_GET['id'];
$product = $products[$product_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar">
    <div class="logo">SmartGear Shop</div>
    <div class="search-bar">
        <input type="text" placeholder="Search products...">
        <button type="submit">Search</button>
    </div>
    <div class="nav-links">
        <a href="#products">Products</a>
        <a href="#contact">Contact</a>
        <span class="cart">🛒 Cart</span>
    </div>
</nav>

<!-- Product Detail Section -->
<section class="product-detail">
    <div class="product-image">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
    </div>
    <div class="product-info">
        <h1><?php echo $product['name']; ?></h1>
        <p class="price"><?php echo $product['price']; ?></p>
        <p class="description"><?php echo $product['desc']; ?></p>
        <div class="quantity">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1">
        </div>
        <button class="cta-button">Add to Cart</button>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; <?php echo date('Y'); ?> MyShop. All rights reserved.</p>
</footer>

</body>
</html>
