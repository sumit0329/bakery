<?php
declare(strict_types=1);
session_start();

// --- include DB ---
include "db.php"; // provides $mysqli

// --- CSRF token creation ---
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posted_csrf = $_POST['csrf_token'] ?? '';
    if (!hash_equals($csrf_token, (string)$posted_csrf)) {
        $error = 'Invalid form submission.';
    } else {
        $email = trim((string)($_POST['email'] ?? ''));
        $password = (string)($_POST['password'] ?? '');

        // --- Admin Hardcoded Check ---
        if ($email === 'admin' && $password === 'admin') {
            $_SESSION['user_name'] = 'Admin';
            $_SESSION['user_id'] = 0; // Optional
            header('Location: admin_dashboard.php');
            exit;
        }

        // --- Database Check for normal users ---
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
            $error = 'Please enter a valid email and password.';
        } else {
            $stmt = $mysqli->prepare('SELECT id, password_hash, name, failed_logins, locked_until FROM users WHERE email = ? LIMIT 1');
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 1) {
                $stmt->bind_result($id, $password_hash, $name, $failed_logins, $locked_until);
                $stmt->fetch();

                if ($locked_until !== null && strtotime($locked_until) > time()) {
                    $error = 'Account locked. Try again later.';
                } else {
                    if (password_verify($password, $password_hash)) {
                        $upd = $mysqli->prepare('UPDATE users SET failed_logins = 0, locked_until = NULL, last_login = NOW() WHERE id = ?');
                        $upd->bind_param('i', $id);
                        $upd->execute();

                        session_regenerate_id(true);
                        $_SESSION['user_id'] = $id;
                        $_SESSION['user_name'] = $name;
                        header('Location: dashboard.php');
                        exit;
                    } else {
                        $failed_logins++;
                        if ($failed_logins >= 5) {
                            $lock_until = date('Y-m-d H:i:s', time() + 15 * 60);
                            $upd = $mysqli->prepare('UPDATE users SET failed_logins = ?, locked_until = ? WHERE id = ?');
                            $upd->bind_param('isi', $failed_logins, $lock_until, $id);
                            $upd->execute();
                            $error = 'Account locked due to multiple failed attempts. Try again in 15 minutes.';
                        } else {
                            $upd = $mysqli->prepare('UPDATE users SET failed_logins = ? WHERE id = ?');
                            $upd->bind_param('ii', $failed_logins, $id);
                            $upd->execute();
                            $error = 'Invalid email or password.';
                        }
                    }
                }
            } else {
                $error = 'Invalid email or password.';
            }
            $stmt->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign in | Twenty 8 Bakery</title>
    <style>
        body {
            font-family: BrushScriptMT, Arial, sans-serif;
            background: #f7f7f7;
            background-image: url('images/back2.jpg');
            background-size: cover;
            margin: 0;
            padding: 30px;
        }
        .header {
            padding: 20px;
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            color: black;
            font-size: 20px;
        }
        .nav {
            background-color: salmon;
            overflow: hidden;
            text-align: center;
        }
        .nav a {
            display: inline-block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .nav a.active {
            background-color: #04AA6D;
            color: white;
        }
        .container {
            max-width: 420px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        input[type="email"], input[type="password"], input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 6px 0 12px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #04AA6D;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #037a4c;
        }
        .error {
            color: #b00020;
            margin-bottom: 12px;
        }
        .small {
            font-size: 0.9rem;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>
            <img src="images/lastlogo.jpg" alt="Twenty 8 Bakery Logo" height="200" width="400">
        </h1>
    </div>
    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="view_product.php">Product</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php" class="active">Login</a>
    </div>
    <div class="container">
        <h3>Sign in</h3>
        <?php if ($error): ?>
            <div class="error"><?=htmlspecialchars($error)?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="hidden" name="csrf_token" value="<?=htmlspecialchars($csrf_token)?>">
            <label for="email">Email / Username</label>
            <input id="email" name="email" type="text" required value="<?=htmlspecialchars($_POST['email'] ?? '')?>">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
            <button type="submit">Sign in</button>
        </form>
        <div class="small">
            <a href="forgot_password.php">Forgotten password?</a>
        </div>
    </div>
</body>
</html>
