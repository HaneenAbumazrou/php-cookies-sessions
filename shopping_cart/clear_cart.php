<?php
// Clear the cart by setting the cookie's expiration time to the past
setcookie('shopping_cart', '', time() - 3600, "/");

// Redirect to the cart page
header("Location: cart.php");
exit();
?>
