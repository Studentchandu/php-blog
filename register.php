<?php
session_start();
include 'db.php'; // Ensure your db.php connects to the database correctly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if username exists
    $checkUser = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($checkUser);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "❌ Username already exists. <a href='login.php'>Click here to Login</a>";
    } else {
        $insert = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            $success = "✅ Registration successful! <a href='login.php'>Click here to Login</a>";
        } else {
            $error = "❌ Error: " . $conn->error;
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
    <hr>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
