<?php include('includes/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>

<main class="content">
<?php
$slug = $_GET['slug'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM posts WHERE slug = ?");
$stmt->execute([$slug]);
$post = $stmt->fetch();
if ($post) {
    echo "<h1>{$post['title']}</h1>";
    echo "<p>{$post['content']}</p>";
} else {
    echo "<h2>Không tìm thấy bài viết</h2>";
}
?>
</main>

<?php include('includes/footer.php'); ?>
