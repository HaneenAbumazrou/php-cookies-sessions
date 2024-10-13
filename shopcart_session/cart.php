<?php
session_start();

// Handle clearing the cart
if (isset($_POST['clear'])) {
    session_destroy();  // Clear session data
    header("Location: cart.php");
    exit;
}
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

<div class="container my-5">
    <h2 class="text-center mb-4">Your Shopping Cart</h2>

    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td>$<?php echo $item['price']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form method="POST">
            <button type="submit" name="clear" class="btn btn-danger">Clear Cart</button>
        </form>
    <?php else: ?>
        <p class="text-center">Your cart is empty!</p>
    <?php endif; ?>

    <a href="products.php" class="btn btn-secondary mt-3">Back to Products</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
