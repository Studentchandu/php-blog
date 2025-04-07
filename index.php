<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Home</title>
</head>
<body>
    <h2>Welcome to the Blog</h2>
    <p>
        <a href="register.php">📝 Register</a> |
        <a href="login.php">🔐 Login</a> |
        <a href="create_post.php">✍️ Create Post</a> |
        <a href="logout.php">🚪 Logout</a>
    </p>
    <hr>

    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<small>Posted on " . $row['created_at'] . "</small><hr>";
        }
    } else {
        echo "No posts yet.";
    }
    ?>
</body>
</html>
