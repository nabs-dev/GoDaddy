<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .cart-item { border: 1px solid #ccc; padding: 10px; margin: 10px; }
        .remove { background: red; color: white; padding: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Your Cart</h1>
    <?php
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    foreach ($_SESSION['cart'] as $item) {
        echo "<div class='cart-item'>
                <p>$item</p>
                <form action='process.php' method='POST'>
                    <input type='hidden' name='remove' value='$item'>
                    <button class='remove' type='submit'>Remove</button>
                </form>
              </div>";
    }
    ?>
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>
