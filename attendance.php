<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance Management</title>
    <style>
        body { font-family: Arial; text-align: center; }
        h2 { background-color: #007BFF; color: white; padding: 15px; border-radius: 8px; }
        form { width: 50%; margin: 20px auto; text-align: left; }
        input, button { width: 100%; padding: 8px; margin: 10px 0; }
        button { background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        table { width: 90%; margin: 30px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #007BFF; color: white; }
    </style>
</head>
<body>

<h2>Attendance Management</h2>
<a href="admin_dashboard.php">← Back to Dashboard</a>

<form method="POST" action="">
    <label>User ID:</label>
    <input type="number" name="user_id" required>
    <button type="submit" name="clock_in">Clock In</button>
    <button type="submit" name="clock_out">Clock Out</button>
</form>

<?php
// CLOCK IN
if (isset($_POST['clock_in'])) {
    $user_id = intval($_POST['user_id']);

    // Check if user already clocked in
    $check = $conn->query("SELECT * FROM attendance WHERE user_id='$user_id' AND clock_out IS NULL");
    if ($check && $check->num_rows > 0) {
        echo "<p style='color:red;'>You are already clocked in!</p>";
    } else {
        $sql = "INSERT INTO attendance (user_id, clock_in) VALUES ('$user_id', NOW())";
        if ($conn->query($sql)) {
            echo "<p style='color:green;'>Clocked in successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: ".$conn->error."</p>";
        }
    }
}

// CLOCK OUT
if (isset($_POST['clock_out'])) {
    $user_id = intval($_POST['user_id']);
    $result = $conn->query("SELECT * FROM attendance WHERE user_id='$user_id' AND clock_out IS NULL ORDER BY id DESC LIMIT 1");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];

        // Calculate total minutes between clock in and now
        $calc = $conn->query("SELECT TIMESTAMPDIFF(MINUTE, clock_in, NOW()) AS minutes_diff FROM attendance WHERE id='$id'");
        $minutes_row = $calc->fetch_assoc();
        $minutes = $minutes_row['minutes_diff'];

        // Convert to hours (1 hour = 60 minutes)
        $hours_worked = round($minutes / 60, 2);

        // Update record
        $update = "
            UPDATE attendance 
            SET clock_out = NOW(),
                hours_worked = '$hours_worked'
            WHERE id = '$id'
        ";

        if ($conn->query($update)) {
            echo "<p style='color:green;'>Clocked out successfully! Hours worked: $hours_worked hrs</p>";
        } else {
            echo "<p style='color:red;'>Error: ".$conn->error."</p>";
        }
    } else {
        echo "<p style='color:red;'>No active clock-in found for this user.</p>";
    }
}

// DISPLAY RECORDS
$result = $conn->query("SELECT * FROM attendance ORDER BY id DESC");
if ($result && $result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Clock In</th>
                <th>Clock Out</th>
                <th>Hours Worked</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['user_id']}</td>
                <td>{$row['clock_in']}</td>
                <td>" . ($row['clock_out'] ? $row['clock_out'] : '-') . "</td>
                <td>" . ($row['hours_worked'] !== null ? $row['hours_worked'] . ' hrs' : '-') . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No attendance records found.</p>";
}
?>

</body>
</html>
