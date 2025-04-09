<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

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
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background:linear-gradient(to right, #8e2de2, #ff6ec4);
            color: #333;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: rgba(0,0,0,0.5);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        h2 {
            color: white;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            width: 250px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #0077cc;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #005999;
        }
p {
    color: white;
}

        p a {
            color: white;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .msg {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📝 Register</h2>

        <?php if (isset($error)) echo "<p class='msg' style='color:red;'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p class='msg' style='color:green;'>$success</p>"; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <input type="submit" value="Register">
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
        
    </div>
</body>
</html>
