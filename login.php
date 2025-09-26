<?php
session_start();
include "db.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $result=$conn->query("SELECT * FROM users WHERE username='$username'");
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        if(password_verify($password,$row["password"])){
            $_SESSION["user"]=$username;
            header("Location: dashboard.php");
            exit();
        }
    }
    echo "Invalid login.";
}
?>
<form method="POST">
<h2>Login</h2>
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button type="submit">Login</button>
</form> 
