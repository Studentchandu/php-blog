<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<a href="create_post.php">Create New Post</a> | 
<a href="logout.php">Logout</a>

<h3>All Posts</h3>
<?php while ($row = $result->fetch_assoc()): ?>
    <h4><?= htmlspecialchars($row['title']) ?></h4>
    <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
    <small><?= $row['created_at'] ?></small><br>
    <a href="edit_post.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="delete_post.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this post?');">Delete</a>
    <hr>
<?php endwhile; ?>
