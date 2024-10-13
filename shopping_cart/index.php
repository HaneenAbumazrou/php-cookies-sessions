<?php
// Add product to cart via GET request and store it in a cookie
if (isset($_GET['product'])) {
    $product = $_GET['product'];

    // Retrieve existing cart from cookie, or initialize an empty array
    $cart = isset($_COOKIE['shopping_cart']) ? json_decode($_COOKIE['shopping_cart'], true) : [];

    // Add the new product to the cart
    $cart[] = $product;

    // Update the cookie with the modified cart (valid for 1 day)
    setcookie('shopping_cart', json_encode($cart), time() + 86400, "/");

    // Reload the page to reflect the updated cart
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center">Product List</h2>
    <div class="row">
        <?php
        $products = ['Laptop', 'Phone', 'Tablet', 'Headphones', 'Camera','Mouse'];
        foreach ($products as $product) {
            echo "
            <div class='col-md-4 mb-3'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product</h5>
                        <a href='?product=$product' class='btn btn-primary'>Add to Cart</a>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
    <a href="cart.php" class="btn btn-success mt-3">View Cart</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
