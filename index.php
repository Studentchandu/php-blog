<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Search setup
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$searchSql = '';
if (!empty($search)) {
    $escapedSearch = $conn->real_escape_string($search);
    $searchSql = "WHERE title LIKE '%$escapedSearch%' OR content LIKE '%$escapedSearch%'";
}

// Pagination setup
$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Count total posts for pagination
$countResult = $conn->query("SELECT COUNT(*) AS total FROM posts $searchSql");
$totalPosts = $countResult->fetch_assoc()['total'];
$totalPages = ceil($totalPosts / $limit);

// Fetch posts
$sql = "SELECT * FROM posts $searchSql ORDER BY created_at DESC LIMIT $offset, $limit";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #8e2de2, #ff6ec4);
            color: #fff;
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        h2, h3 {
            color: #ffffff;
        }

        a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .post a {
            color: black;
            font-weight: normal;
        }

        .post a:hover {
            text-decoration: underline;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 14px;
            background-color: #ffffff;
            border: none;
            color: #4a00e0;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e0d3f7;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            padding: 6px 12px;
            margin: 0 3px;
            background: #e0e0e0;
            color: #333;
            border-radius: 4px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #ffffff;
            color: #4a00e0;
            font-weight: bold;
        }

        .post {
            background-color: white;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<h2>👋 Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<p>
    <a href="create_post.php">✍️ Create New Post</a> |
    <a href="logout.php">🚪 Logout</a>
</p>

<!-- Search Form -->
<form method="GET" action="index.php">
    <input type="text" name="search" placeholder="🔍 Search posts..." value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Search</button>
</form>

<h3>🗂️ All Posts</h3>

<?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="post">
            <h4><?= htmlspecialchars($row['title']) ?></h4>
            <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
            <small>📅 <?= $row['created_at'] ?></small><br>
            <a href="edit_post.php?id=<?= $row['id'] ?>">✏️ Edit</a> |
            <a href="delete_post.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this post?');">🗑️ Delete</a>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>

<!-- Pagination Links -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): 
        $link = "index.php?page=$i";
        if (!empty($search)) $link .= "&search=" . urlencode($search);
    ?>
        <a href="<?= $link ?>" class="<?= ($i == $page) ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>
</div>

</body>
</html>
