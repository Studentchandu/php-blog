<?php
session_start();
include 'db.php'; // DB connection

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo "🚫 Access denied. Please <a href='login.php'>log in</a>.";
    exit();
}

// Check if post ID is given in URL
if (!isset($_GET['id'])) {
    echo "❌ Post ID not found.";
    exit();
}

$post_id = $_GET['id'];

// Fetch current post data
$sql = "SELECT * FROM posts WHERE id=$post_id";
$result = $conn->query($sql);

if ($result->num_rows != 1) {
    echo "❌ Post not found.";
    exit();
}

$post = $result->fetch_assoc();

// Update the post when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_title = $_POST['title'];
    $new_content = $_POST['content'];

    $update_sql = "UPDATE posts SET title='$new_title', content='$new_content' WHERE id=$post_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "✅ Post updated successfully!";
        header("Location: index.php"); // Redirect after update
        exit();
    } else {
        echo "❌ Error updating post: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>
<p>
    <a href="index.php">🏠 Home</a> |
    <a href="create_post.php">✍️ Create Post</a> |
    <a href="logout.php">🚪 Logout</a>
</p>
<hr>

<h2>Edit Blog Post</h2>

<form method="POST" action="">
    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="5" cols="30" required><?php echo htmlspecialchars($post['content']); ?></textarea><br><br>

    <input type="submit" value="Update Post">
</form>
</body>
</html>
