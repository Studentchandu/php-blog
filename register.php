<?php
session_start();
include 'db.php'; // Make sure db.php connects correctly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if username already exists
    $checkUser = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUser);
    
    if ($result->num_rows > 0) {
        echo "❌ Username already exists. Please choose another.";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {
            echo "✅ Registration successful! <a href='login.php'>Login here</a>";
        } else {
            echo "❌ Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>📝 Register</h2>

    <p>
        <a href="login.php">🔐 Login</a> |
        <a href="create_post.php">✍️ Create Post</a> |
        <a href="index.php">🏠 Home</a>
    </p>
    <hr>

    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
