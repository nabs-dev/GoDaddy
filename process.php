<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['domain'])) {
    $_SESSION['cart'][] = $_POST['domain'];
}

// Remove from cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])) {
    $_SESSION['cart'] = array_diff($_SESSION['cart'], [$_POST['remove']]);
}

// Checkout
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
    $_SESSION['cart'] = []; // Clear cart after checkout
    echo "<h1>Thank You for Your Purchase!</h1>";
    exit;
}

header("Location: cart.php");
?>
