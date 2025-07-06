<?php include('includes/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>

<main class="content">
<?php
$q = $_GET['q'] ?? '';
echo "<h1>Kết quả tìm kiếm cho: ".htmlspecialchars($q)."</h1>";

$stmt = $pdo->prepare("SELECT * FROM posts WHERE title LIKE ? OR content LIKE ?");
$like = "%$q%";
$stmt->execute([$like, $like]);

while ($row = $stmt->fetch()) {
    echo "<h2><a href='post.php?slug={$row['slug']}'>{$row['title']}</a></h2>";
    echo "<p>".substr(strip_tags($row['content']),0,100)."...</p>";
}
?>
</main>

<?php include('includes/footer.php'); ?>
