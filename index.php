<?php include('includes/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>

<main class="content">
    <h1>Bài viết mới nhất</h1>
    <?php
    $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
    while ($row = $stmt->fetch()) {
        echo "<h2><a href='post.php?slug={$row['slug']}'>{$row['title']}</a></h2>";
        echo "<p>".substr(strip_tags($row['content']),0,100)."...</p>";
    }
    ?>
</main>

<?php include('includes/footer.php'); ?>
