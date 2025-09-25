<?php
// add_to_cart.php
session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = []; // key: product_id => [title, price, image, qty]
}

if (isset($_POST['add'])) {
  $id    = (int)($_POST['id'] ?? 0);
  $title = trim($_POST['title'] ?? '');
  $price = (float)($_POST['price'] ?? 0);
  $image = trim($_POST['image'] ?? '');

  if ($id > 0 && $title !== '' && $price >= 0) {
    if (isset($_SESSION['cart'][$id])) {
      $_SESSION['cart'][$id]['qty'] += 1;
    } else {
      $_SESSION['cart'][$id] = [
        'title' => $title,
        'price' => $price,
        'image' => $image,
        'qty'   => 1
      ];
    }
  }
  header('Location: cart.php'); // go to cart after adding
  exit;
}

// quantity updates and remove
if (isset($_POST['update'])) {
  foreach ($_POST['qty'] ?? [] as $pid => $q) {
    $pid = (int)$pid;
    $q   = max(0, (int)$q);
    if (isset($_SESSION['cart'][$pid])) {
      if ($q === 0) {
        unset($_SESSION['cart'][$pid]);
      } else {
        $_SESSION['cart'][$pid]['qty'] = $q;
      }
    }
  }
  header('Location: cart.php');
  exit;
}

if (isset($_GET['remove'])) {
  $rid = (int)$_GET['remove'];
  unset($_SESSION['cart'][$rid]);
  header('Location: cart.php');
  exit;
}

header('Location: list.php');
