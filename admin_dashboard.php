<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            border-radius: 8px;
        }
        .menu {
            margin: 30px auto;
        }
        a {
            display: inline-block;
            margin: 15px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Hi Admin</h1>
    <h2>Dashboard</h2>

    <div class="menu">
        <a href="orders.php">Manage Orders</a>
        <a href="users.php">Manage Users</a>
        <a href="attendance.php">Manage Attendance</a>
    </div>
</body>
</html>
