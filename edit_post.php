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

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0c3fc, #8ec5fc);
            padding: 40px;
            text-align: center;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            display: inline-block;
            width: 60%;
        }

        h2 {
            color: #6a1b9a;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4a0072;
        }

        a {
            color: #0077cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✏️ Edit Post</h2>

        <form method="POST">
            <label>Title:</label>
            <input type="text" name="title" value="<?= htmlspecialchars($title) ?>" required>

            <label>Content:</label>
            <textarea name="content" rows="6" required><?= htmlspecialchars($content) ?></textarea>

            <button type="submit">Update</button>
        </form>

        <br>
        <a href="index.php">← Back to Home</a>
    </div>
</body>
</html>
