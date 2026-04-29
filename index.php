<?php
$title = "Welcome to Our Shop";
$subtitle = "Find Your Next Favorite Item";
$cta_text = "Shop Now";
$cta_link = "#products";

// Sample Product Data
$products = [
    ["name" => "Wireless Headphones", "price" => "$99.99", "desc" => "Crisp sound and noise cancellation.", "id" => 1],
    ["name" => "Smart Watch", "price" => "$149.99", "desc" => "Track your health and stay connected.", "id" => 2],
    ["name" => "Portable Speaker", "price" => "$79.99", "desc" => "Big sound in a small package.", "id" => 3],
    ["name" => "Laptop Stand", "price" => "$29.99", "desc" => "Ergonomic and adjustable.", "id" => 4],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
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

<!-- Hero Section -->
<header class="hero">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $subtitle; ?></p>
    <a href="<?php echo $cta_link; ?>" class="cta-button"><?php echo $cta_text; ?></a>
</header>

<!-- Product Section -->
<section id="products" class="products">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <h3><?php echo $product['name']; ?></h3>
            <p><?php echo $product['desc']; ?></p>
            <div class="price"><?php echo $product['price']; ?></div>
            <a href="product.php?id=<?php echo $product['id']; ?>" class="cta-button">View Product</a>
        </div>
    <?php endforeach; ?>
</section>

<!-- Footer -->
<footer>
    <p>&copy; <?php echo date('Y'); ?> MyShop. All rights reserved.</p>
</footer>

</body>
</html>
