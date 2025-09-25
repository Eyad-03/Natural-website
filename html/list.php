<?php
session_start();
require_once __DIR__ . '/../php/db.php'; // this must define $pdo

if (!isset($pdo)) { die('No $pdo from db.php'); }   // safety

$stmt = $pdo->query("SELECT id, title, description, price, image_url FROM products ORDER BY id");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products</title>
  <link rel="stylesheet" href="../css/list.css">     <!-- your grid/card CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.
css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bund
le.min.js"></script>
</head>
<body>

<?php

include('nav.php');

?>

<h2 class="title"> <span class="badge bg-success">Clothes</span></h2>

<div id="mainGrid">
  <?php foreach ($products as $p): ?>
    <div class="product">
      <img src="<?= htmlspecialchars($p['image_url']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
      <h4><?= htmlspecialchars($p['title']) ?></h4>
      <p class="desc"><?php echo $p['description']; ?></p> <!-- description -->
      <h3>$<?= number_format($p['price'], 2) ?></h3>
      

      <form action="add_to_cart.php" method="post">
        <input type="hidden" name="id"    value="<?= (int)$p['id'] ?>">
        <input type="hidden" name="title" value="<?= htmlspecialchars($p['title']) ?>">
        <input type="hidden" name="price" value="<?= htmlspecialchars($p['price']) ?>">
        <input type="hidden" name="image" value="<?= htmlspecialchars($p['image_url']) ?>">
        <button class="btn btn-success" type="submit" name="add">Add cart</button>
      </form>
    </div>
  <?php endforeach; ?>
</div>

</body>
</html>
