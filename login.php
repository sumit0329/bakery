<?php
// login.php
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
    // Basic CSRF check
    $posted_csrf = $_POST['csrf_token'] ?? '';
    if (!hash_equals($csrf_token, (string)$posted_csrf)) {
        $error = 'Invalid form submission.';
    } else {
        // Collect and validate input
        $email = trim((string)($_POST['email'] ?? ''));
        $password = (string)($_POST['password'] ?? '');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
            $error = 'Please enter a valid email and password.';
        } else {
            // Fetch user record
            $stmt = $mysqli->prepare('SELECT id, password_hash, name, failed_logins, locked_until FROM users WHERE email = ? LIMIT 1');
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 1) {
                $stmt->bind_result($id, $password_hash, $name, $failed_logins, $locked_until);
                $stmt->fetch();

                // Check if account is locked
                if ($locked_until !== null && strtotime($locked_until) > time()) {
                    $error = 'Account locked due to multiple failed attempts. Try again later.';
                } else {
                    // Verify password
                    if (password_verify($password, $password_hash)) {
                        // Successful login: reset counters, update last_login, regenerate session id
                        $upd = $mysqli->prepare('UPDATE users SET failed_logins = 0, locked_until = NULL, last_login = NOW() WHERE id = ?');
                        $upd->bind_param('i', $id);
                        $upd->execute();

                        session_regenerate_id(true);
                        $_SESSION['user_id'] = $id;
                        $_SESSION['user_name'] = $name;
                        // Redirect to protected page
                        header('Location: dashboard.php');
                        exit;
                    } else {
                        // Wrong password: increment failed_logins and possibly lock
                        $failed_logins++;
                        if ($failed_logins >= 5) {
                            $lock_until = date('Y-m-d H:i:s', time() + 15 * 60); // 15 minutes
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
                // Do NOT reveal whether email exists — generic message
                $error = 'Invalid email or password.';
            }
            $stmt->close();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Sign in</title>
<style>

body { font-family: BrushScriptMT, sans-serif; background:#f7f7f7; padding:30px; }
.container { max-width:420px; margin:0 auto; background:white; padding:20px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
input[type="email"], input[type="password"]{ width:100%; padding:10px; margin:6px 0 12px; box-sizing:border-box;}
button{ width:100%; padding:10px; }
.error{ color:#b00020; margin-bottom:12px; }
.small { font-size:0.9rem; color:#555; margin-top:10px;}
.header {
  padding: 20px;
  text-align: center;
   background-image: url('images/back4.jpg');
     background-size: 40% 100%;
  color: black;
  font-size: 20px;
}
body {
  background-image: url('images/back2.jpg');
}
.nav {
  background-color: salmon;
  overflow: hidden;
}

/* For styling the links inside the navigation bar */
.nav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* For Changing the color of links on hover */
.nav a:hover {
  background-color: #ddd;
  color: black;
}

/* For adding a color to the active/current link */
.nav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
 

</head>
<body>
   <div class="header">
  <h1 align=center>
        <img src="images/lastlogo.jpg" alt="Sorry its coming..." height="200" width="400">
    </h1>
  
</div>
<div class ="nav"> 
 <h2> 
        <nav align=center>
            <div>
            <a href="dashboard.php">Home</a>|
            <a href="product.php">product</a> |
            <a href="contactus.php">Contact Us</a> |
            <a href="aboutus.php">About Us</a> |
            <a href="login.php">Login</a></div>
        </nav>
    </h2>
</div>
<div class="container">
   
    
  <h3>Sign in</h3>

  <?php if ($error): ?>
    <div class="error"><?=htmlspecialchars($error)?></div>
  <?php endif; ?>

  <form method="post" action="">
    <input type="hidden" name="csrf_token" value="<?=htmlspecialchars($csrf_token)?>">
    <label for="email">Email address</label>
    <input id="email" name="email" type="email" required value="<?=htmlspecialchars($_POST['email'] ?? '')?>">

    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>

    <button type="submit">Sign in</button>
  </form>

  <div class="small">
    <a href="forgot_password.php">Forgotten password?</a> <!-- implement separately -->
  </div>
</div>
</body>
</html>
