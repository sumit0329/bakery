<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
    <style>
        body { font-family: Arial; text-align: center; }
        h2 { background-color: #007BFF; color: white; padding: 15px; border-radius: 8px; }
        form { width: 50%; margin: 20px auto; text-align: left; }
        input, button { width: 100%; padding: 8px; margin: 10px 0; }
        button { background-color: #007BFF; color: white; border: none; border-radius: 5px; }
        table { width: 80%; margin: 30px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #007BFF; color: white; }
    </style>
</head>
<body>

<h2>Attendance Management</h2>
<a href="admin_dashboard.php">← Back to Dashboard</a>

<form method="POST" action="">
    <label>User ID:</label>
    <input type="number" name="user_id" required>

    <label>Clock In:</label>
    <input type="datetime-local" name="clock_in" required>

    <label>Clock Out:</label>
    <input type="datetime-local" name="clock_out" required>

    <button type="submit" name="save_attendance">Save Attendance</button>
</form>

<?php
if (isset($_POST['save_attendance'])) {
    $user_id = $_POST['user_id'];
    $clock_in = $_POST['clock_in'];
    $clock_out = $_POST['clock_out'];
    $hours_worked = (strtotime($clock_out) - strtotime($clock_in)) / 3600;

    $sql = "INSERT INTO attendance (user_id, clock_in, clock_out, hours_worked)
            VALUES ('$user_id', '$clock_in', '$clock_out', '$hours_worked')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Attendance saved! Hours: " . round($hours_worked, 2) . "</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

$result = $conn->query("SELECT * FROM attendance");
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>User ID</th><th>Clock In</th><th>Clock Out</th><th>Hours Worked</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['user_id']}</td><td>{$row['clock_in']}</td><td>{$row['clock_out']}</td><td>" . round($row['hours_worked'], 2) . "</td></tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
