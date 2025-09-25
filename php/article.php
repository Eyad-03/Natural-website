<?php
// Natural/html/article.php
require_once __DIR__ . '/db.php';

// Simple query (newest first)
$sql = "SELECT id, title, image_path, received_date, accepted_date, published_date, article_url
        FROM articles
        ORDER BY COALESCE(published_date, created_at) DESC";
$result = $mysqli->query($sql);
if (!$result) {
  die('Query error: ' . $mysqli->error);
}

// Small helper to format a date or show '-'
function fmt($d) {
  if (!$d) return '-';
  $ts = strtotime($d);
  return $ts ? date('d M Y', $ts) : '-';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Article</title>
  <link rel="stylesheet" href="article.css">
  <style>
    /* Optional: keep images contained */
    .griditem img { object-fit: cover; }
    .meta { color:#444; line-height:1.5; margin: 8px 0 16px; }
    .title { font-weight: 700; margin: 8px 0 10px; }
    .btn-read { display:inline-block; }
  </style>
</head>
<body>

  <!-- your site header / navbar goes here -->

  <div id="mainGrid">
    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="griditem">
        <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Article image">

        <h2 class="title">
          <?php echo htmlspecialchars($row['title']); ?>
        </h2>

        <div class="meta">
          Received <?php echo fmt($row['received_date']); ?>,
          Accepted <?php echo fmt($row['accepted_date']); ?>,<br>
          Published online: <?php echo fmt($row['published_date']); ?>
        </div>

        <button class="btn-read">
          <a href="<?php echo htmlspecialchars($row['article_url'] ?: '#'); ?>">
            Read
          </a>
        </button>
      </div>
    <?php endwhile; ?>
  </div>

</body>
</html>
