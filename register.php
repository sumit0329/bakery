<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    if($conn->query($sql)) echo "User registered. <a href='login.php'>Login</a>";
    else echo "Error: ".$conn->error;
}
?>
<form method="POST">
<h2>Register</h2>
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Register</button>
</form>
