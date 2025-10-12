<?php
session_start();
include "db.php"; // make sure this defines $conn (MySQLi connection)

// create CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

$error = '';
$success = '';
$step = $_GET['step'] ?? 'login'; // step control: login | question | reset

// --- LOGIN LOGIC ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $step === 'login') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // admin hardcoded
    if ($email === 'admin' && $password === 'admin') {
        $_SESSION['user_name'] = 'Admin';
        $_SESSION['user_id'] = 0;
        header('Location: admin_dashboard.php');
        exit;
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $stored_password);
        $stmt->fetch();

        if ($password === $stored_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $email;
            header("Location: admin_dashboard.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
    $stmt->close();
}

// --- STEP 1: VERIFY SECURITY QUESTION ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $step === 'question') {
    $teacher = strtolower(trim($_POST['teacher'] ?? ''));
    if ($teacher === 'ethan') {
        header("Location: login.php?step=reset");
        exit;
    } else {
        $error = "Incorrect answer. Please try again.";
    }
}

// --- STEP 2: RESET PASSWORD ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $step === 'reset') {
    $username = trim($_POST['username'] ?? '');
    $newpass = trim($_POST['newpass'] ?? '');

    if ($username !== '' && $newpass !== '') {
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
        $stmt->bind_param("ss", $newpass, $username);
        if ($stmt->execute() && $stmt->affected_rows > 0) {
            $success = "Password reset successfully! You can now log in.";
            header("refresh:2; url=login.php");
        } else {
            $error = "No such user found or update failed.";
        }
        $stmt->close();
    } else {
        $error = "Please fill all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Twenty 8 Bakery</title>
    <style>
        body {
            font-family: BrushScriptMT, Arial, sans-serif;
            background-image: url('images/back2.jpg');
            background-size: cover;
            margin: 0;
            padding: 30px;
        }
        .header {
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            padding: 20px;
        }
        .nav {
            background-color: salmon;
            overflow: hidden;
            text-align: center;
       
        }
        .nav a {
            color: #fff;
            padding: 14px 20px;
            display: inline-block;
            text-decoration: none;
            font-size: 17px;
        }
        .nav a:hover {
            background-color: #03b300ff;
        }
        .nav a.active {
            background-color: #03b300ff;
        }
        .container {
            max-width: 420px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(34, 240, 99, 0.64);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 14px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background:  #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #8194a9ff;
        }
        .error { color: red; margin-bottom: 10px; }
        .success { color: green; margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="header">
    <img src="images/lastlogo.jpg" alt="Twenty 8 Bakery Logo" height="200" width="400">
</div>
<div class="nav">
    <a href="dashboard.php">Home</a>
    <a href="view_product.php">Product</a>
    <a href="contactus.php">Contact Us</a>
    <a href="aboutus.php">About Us</a>
    <a href="login.php" class="active">Login</a>
</div>

<div class="container">
    <?php if ($step === 'login'): ?>
        <h3>Sign in</h3>
        <?php if ($error) echo "<div class='error'>$error</div>"; ?>
        <form method="post">
            <input type="text" name="email" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <p><a href="login.php?step=question">Forgot password?</a></p>

    <?php elseif ($step === 'question'): ?>
        <h3>Security Question</h3>
        <?php if ($error) echo "<div class='error'>$error</div>"; ?>
        <form method="post" action="?step=question">
            <label>Who is your teacher?</label>
            <input type="text" name="teacher" placeholder="Enter teacher name" required>
            <button type="submit">Submit</button>
        </form>

    <?php elseif ($step === 'reset'): ?>
        <h3>Reset Password</h3>
        <?php if ($error) echo "<div class='error'>$error</div>"; ?>
        <?php if ($success) echo "<div class='success'>$success</div>"; ?>
        <form method="post" action="?step=reset">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="newpass" placeholder="Enter new password" required>
            <button type="submit">Reset Password</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
