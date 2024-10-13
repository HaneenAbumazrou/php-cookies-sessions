<?php
// Retrieve the cart items from the cookie
$cart = isset($_COOKIE['shopping_cart']) ? json_decode($_COOKIE['shopping_cart'], true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center">Your Cart</h2>
    <?php if (!empty($cart)) { ?>
        <ul class="list-group">
            <?php foreach ($cart as $item) { ?>
                <li class="list-group-item"><?php echo htmlspecialchars($item); ?></li>
            <?php } ?>
        </ul>
        <a href="clear_cart.php" class="btn btn-danger mt-3">Clear Cart</a>
    <?php } else { ?>
        <p class="text-center">Your cart is empty.</p>
    <?php } ?>
    <a href="index.php" class="btn btn-secondary mt-3">Back to Products</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
