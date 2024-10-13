<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding items to the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];

    // Store product details in the session
    $_SESSION['cart'][] = ['name' => $product, 'price' => $price];

    // Redirect to avoid resubmission
    header("Location: products.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center mb-4">Product List</h2>
    <div class="row">
        <!-- Sample Products -->
        <?php 
        $products = [
            ['name' => 'Product 1', 'price' => 10],
            ['name' => 'Product 2', 'price' => 20],
            ['name' => 'Product 3', 'price' => 30],
        ];

        foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text">Price: $<?php echo $product['price']; ?></p>
                        <form method="POST">
                            <input type="hidden" name="product" value="<?php echo $product['name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="cart.php" class="btn btn-success mt-3">Go to Cart</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
