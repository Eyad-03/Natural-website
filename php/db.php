<?php
// php/db.php
$host = 'localhost';
$db   = 'be_natural';   // <-- your DB name
$user = 'root';
$pass = '';             // WAMP default is empty
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (PDOException $e) {
  die('DB connection error: ' . $e->getMessage());
}
