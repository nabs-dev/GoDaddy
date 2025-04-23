<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .checkout-box { border: 1px solid #ccc; padding: 20px; margin: 20px; }
    </style>
</head>
<body>
    <h1>Checkout</h1>
    <div class="checkout-box">
        <h2>Summary</h2>
        <?php
        foreach ($_SESSION['cart'] as $item) {
            echo "<p>$item</p>";
        }
        ?>
        <form action="process.php" method="POST">
            <button type="submit" name="checkout">Complete Purchase</button>
        </form>
    </div>
</body>
</html>
