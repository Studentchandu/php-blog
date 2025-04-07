<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "🚫 Access denied. <a href='login.php'>Login</a>";
    exit();
}
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "✅ Post created. <a href='index.php'>View all posts</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h2>Create Blog Post</h2>
    <form method="POST" action="">
        Title: <input type="text" name="title" required><br><br>
        Content:<br>
        <textarea name="content" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>
