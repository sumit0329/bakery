<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Users Management</title>
    <style>
        body { font-family: Arial; text-align: center; }
        h2 { background-color: #007BFF; color: white; padding: 15px; border-radius: 8px; }
        form { width: 50%; margin: 20px auto; text-align: left; }
        input, button { width: 100%; padding: 8px; margin: 10px 0; }
        button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        table { width: 80%; margin: 30px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #007BFF; color: white; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<h2>Users Management</h2>
<a href="admin_dashboard.php">← Back to Dashboard</a>

<?php
$message = '';
if (isset($_POST['add_user'])) {
    $user_id = $_POST['user_id'];
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $message = "<p class='error'>Username already exists!</p>";
    } else {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (id, username, password) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($sql);
        $insert_stmt->bind_param("iss", $user_id, $username, $password_hashed);
        if ($insert_stmt->execute()) {
            $message = "<p class='success'>User added successfully!</p>";
        } else {
            $message = "<p class='error'>Error: " . $conn->error . "</p>";
        }
        $insert_stmt->close();
    }
    $stmt->close();
}
if ($message) echo $message;
?>

<form method="POST" action="">
    <label>User ID:</label>
    <input type="number" name="user_id" required>

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="add_user">Add User</button>
</form>

<?php
$result = $conn->query("SELECT id, username FROM users ORDER BY id ASC");
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
              </tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
