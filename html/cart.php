<?php
// cart.php
session_start();

$cart = $_SESSION['cart'] ?? [];
$subtotal = 0.0;
foreach ($cart as $pid => $item) {
  $subtotal += $item['price'] * $item['qty'];
}
$shipping = $subtotal > 0 ? 5.00 : 0.00;
$total = $subtotal + $shipping;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart</title>
  <link rel="stylesheet" href="../css/cart.css">
</head>
<body>

<?php

include('nav.php');

?>

<h2 class="title">Your Cart</h2>

<div class="element">
  <form class="card" action="add_to_cart.php" method="post">
    <?php if (!$cart): ?>
      <p style="margin-left:100px">Your cart is empty.</p>
    <?php else: ?>
      <?php foreach ($cart as $pid => $it): ?>
        <div class="item">
          <img src="<?= htmlspecialchars($it['image']) ?>" alt="<?= htmlspecialchars($it['title']) ?>" width="100" height="100">
          <div class="info-product">
            <h4><?= htmlspecialchars($it['title']) ?></h4>
            <span class="price">$<?= number_format($it['price'],2) ?></span>
          </div>
          <div class="quantity-product">
            <label>Qty:</label>
            <input type="number" name="qty[<?= (int)$pid ?>]" value="<?= (int)$it['qty'] ?>" min="0" style="width:60px">
          </div>
          <div style="margin-left:auto; padding:0 10px;">
            <a href="add_to_cart.php?remove=<?= (int)$pid ?>" style="text-decoration:none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a>
          </div>
        </div>
      <?php endforeach; ?>


    <?php endif; ?>
  </form>

  <div class="checkout">
    <div class="checkout-details">
      <span>Subtotal</span>
      <strong>$<?= number_format($subtotal, 2) ?></strong>
    </div>
    <div class="checkout-details">
      <span>Shipping</span>
      <strong>$<?= number_format($shipping, 2) ?></strong>
    </div>
    <hr>
    <div class="checkout-details">
      <span>Total</span>
      <strong>$<?= number_format($total, 2) ?></strong>
    </div>
    <a class="btn-checkout" href="pay.php">Checkout</a>
  </div>
</div>





</body>
</html>
