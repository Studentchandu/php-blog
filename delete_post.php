<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Post deleted!";
    } else {
        echo "❌ Error deleting post: " . $conn->error;
    }
} else {
    echo "❌ No post ID provided.";
}

header("Location: index.php");
exit();
?>
