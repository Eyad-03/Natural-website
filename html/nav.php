
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
<div id="navGrid">

<div id="nav">

<div class="nav-img">
  <a href="home.php">
<img src="../media/nature logo.png" alt="">
  </a>
</div>


  <div class="nav-center">

    <div class="dropdown">
      <button class="dropbtn">Shop ▼</button>
      <div class="dropdown-content">
        <a href="list.php">Clothes</a>
        <a href="plants.php">Plants</a>
        <a href="plastic.php">Plastic</a>
        <a href="glass.php">Glass</a>
      </div>
    </div>
    <a href="article.php" class="out-item">Article</a>
    <a href="contact.php" class="out-item">Contact</a>

  </div>




<div class="navBtn">
<a href="cart.php" class="cart"> <i class="fa-solid fa-cart-shopping"></i> cart </a>

<?php if(isset($_SESSION['username'])): ?>
  <a href="profile.php" class="cart">
    <i class="fa-regular fa-circle-user"></i> 
    <?php echo htmlspecialchars($_SESSION['username']); ?>
  </a>
<?php else: ?>
  <a href="sign_in.php" class="cart">
    <i class="fa-regular fa-circle-user"></i> sign
  </a>
<?php endif; ?>

</div>


</div>

</div>


</body>
</html>




