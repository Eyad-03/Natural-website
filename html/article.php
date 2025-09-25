<?php
// ---- database connection (edit user/pass if needed) ----
$host = "localhost";
$user = "root";
$pass = "";
$db   = "be_natural";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// ---- get articles ----
$sql = "SELECT id, title, received_date, accepted_date, published_online_date, image_url, article_url
        FROM articles
        WHERE is_active = 1
        ORDER BY id DESC";
$result = $conn->query($sql);

// small helper to print date nicely if present
function fmt_date($d) {
  if (!$d || $d === "0000-00-00") return "";
  return date("d M Y", strtotime($d));
}

// ---- (optional) normalize URL to include scheme ----
function normalize_url($u) {
  if (!$u) return "#";
  if (stripos($u, "http://") === 0 || stripos($u, "https://") === 0) return $u;
  return "https://" . ltrim($u, "/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Articles</title>
  <link rel="stylesheet" href="../css/article.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.
css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bund
le.min.js"></script>
</head>
<body>

<?php

include('nav.php');

?>

  <!-- your page header / navbar can stay as-is -->

  <!-- grid container expected by your CSS -->
  <div id="mainGrid">
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <?php
          $title   = htmlspecialchars($row['title']);
          $img     = htmlspecialchars($row['image_url']);
          $link    = htmlspecialchars(normalize_url($row['article_url']));
          $rec     = fmt_date($row['received_date']);
          $acc     = fmt_date($row['accepted_date']);
          $pub     = fmt_date($row['published_online_date']);
        ?>
        <div class="griditem">
          <img src="<?php echo $img; ?>" alt="article image">

          <h2><?php echo $title; ?></h2>

          <p style="line-height:1.6; margin-top:8px;">
            <?php if ($rec): ?>Received <?php echo $rec; ?>, <?php endif; ?>
            <?php if ($acc): ?>Accepted <?php echo $acc; ?>, <?php endif; ?>
            <?php if ($pub): ?>Published online: <?php echo $pub; ?><?php endif; ?>
          </p>

          <!-- button + anchor match your CSS (.griditem button .griditem a) -->
          <button class="btn btn-success">
            <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
              Read
            </a>
          </button>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p style="margin:40px;">No articles yet.</p>
    <?php endif; ?>
  </div>

</body>
</html>
<?php $conn->close(); ?>
