<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .domain-result { border: 1px solid #ccc; padding: 10px; margin: 10px; }
        .add-to-cart { background: green; color: white; padding: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Available Domains</h1>
    <?php
    $domain = $_GET['domain'];
    $extensions = [".com", ".net", ".org"];
    
    foreach ($extensions as $ext) {
        $fullDomain = $domain . $ext;
        echo "<div class='domain-result'>
                <p>$fullDomain</p>
                <form action='process.php' method='POST'>
                    <input type='hidden' name='domain' value='$fullDomain'>
                    <button class='add-to-cart' type='submit'>Add to Cart</button>
                </form>
              </div>";
    }
    ?>
</body>
</html>
