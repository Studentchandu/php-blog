<?php
session_start();
include 'db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch the user from database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "✅ Login successful! Welcome, $username.<br><a href='index.php'>Go to Blog</a>";
        } else {
            echo "❌ Invalid password.";
        }
    } else {
        echo "❌ Username not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>🔐 Login</h2>

    <p>
        <a href="register.php">📝 Register</a> |
        <a href="create_post.php">✍️ Create Post</a> |
        <a href="index.php">🏠 Home</a>
    </p>
    <hr>

    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
