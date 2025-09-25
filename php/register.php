<?php
// php/register.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  exit('Method Not Allowed');
}

require __DIR__ . '/db.php'; // provides $pdo (PDO)

// 1) Collect input
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm  = $_POST['confirm_password'] ?? '';

// 2) Validate
$errors = [];
if ($name === '' || mb_strlen($name) < 2) { $errors[] = 'Please enter your name (min 2 chars).'; }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'Please enter a valid email address.'; }
if (strlen($password) < 6) { $errors[] = 'Password must be at least 6 characters.'; }
if ($password !== $confirm) { $errors[] = 'Password confirmation does not match.'; }

if ($errors) {
  echo '<h3>Registration errors:</h3><ul>';
  foreach ($errors as $e) {
    echo '<li>' . htmlspecialchars($e, ENT_QUOTES, 'UTF-8') . '</li>';
  }
  echo '</ul><p><a href="../html/sign_up.html">Back to Sign Up</a></p>';
  exit;
}

try {
  // 3) Check if email exists
  $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
  $stmt->execute([$email]);
  if ($stmt->fetch()) {
    echo '<p style="color:#b00">This email is already registered.</p>';
    echo '<p><a href="../html/sign_up.html">Back to Sign Up</a></p>';
    exit;
  }

  // 4) Insert new user
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
  $stmt->execute([$name, $email, $hash]);

  header('Location: ../html/sign_in.php?registered=1');
  exit;
} catch (PDOException $e) {
  http_response_code(500);
  echo 'Registration error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
}
