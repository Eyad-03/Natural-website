<?php
// php/login_process.php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  exit('Method Not Allowed');
}

require __DIR__ . '/db.php'; // provides $pdo (PDO)

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
  echo '<p style="color:red">Please enter a valid email and password.</p>';
  echo '<p><a href="../html/sign_in.php">Back to Sign In</a></p>';
  exit;
}

try {
  $stmt = $pdo->prepare("SELECT id, name, password_hash FROM users WHERE email = ? LIMIT 1");
  $stmt->execute([$email]);
  $user = $stmt->fetch(); // assoc by default from db.php

  if ($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name']    = $user['name'];
    header('Location: ../html/home.php'); // adjust if your home path differs
    exit;
  }

  echo '<p style="color:red">Invalid email or password.</p>';
  echo '<p><a href="../html/sign_in.php">Try again</a></p>';
} catch (PDOException $e) {
  http_response_code(500);
  echo 'Login error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
}

