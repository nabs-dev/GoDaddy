<?php
session_start();
include 'db.php';
?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoDaddy Clone - Home</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; }
        header { background-color: #111; color: #fff; padding: 20px; text-align: center; font-size: 24px; }
        nav { background-color: #222; display: flex; justify-content: center; gap: 20px; padding: 10px 0; }
        nav a { color: #fff; text-decoration: none; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s; }
        nav a:hover { background-color: #444; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; text-align: center; }
        .search-box input[type="text"] { width: 60%; padding: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; }
        .search-box button { padding: 15px 25px; background-color: #0073e6; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; }
        .search-box button:hover { background-color: #005bb5; }
        footer { background-color: #111; color: #fff; text-align: center; padding: 15px 0; margin-top: 40px; }
        @media (max-width: 768px) { .search-box input[type="text"] { width: 80%; } }
    </style>
</head>
<body>
<header>GoDaddy Clone - Domain Finder</header>
<nav>
    <a href="index.php">Home</a>
    <a href="cart.php">Cart</a>
</nav>
<div class="container">
    <div class="search-box">
        <form action="search.php" method="GET">
            <input type="text" name="domain" placeholder="Search for a domain..." required>
            <button type="submit">Search</button>
        </form>
    </div>
</div>
<footer>&copy; <?php echo date('Y'); ?> GoDaddy Clone. All Rights Reserved.</footer>
