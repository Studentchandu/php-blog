<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE posts SET title=?, content=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}

$stmt = $conn->prepare("SELECT title, content FROM posts WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($title, $content);
$stmt->fetch();
?>

<h2>Edit Post</h2>
<form method="POST">
    Title: <input type="text" name="title" value="<?= htmlspecialchars($title) ?>" required><br>
    Content: <textarea name="content" required><?= htmlspecialchars($content) ?></textarea><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back to Home</a>
