<!-- File: user_management.php -->
<?php
session_start();

// Check if user is admin
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}

// Example users array (replace with database query later)
$users = [
    ['id'=>1, 'fullname'=>'John Doe', 'email'=>'john@example.com', 'role'=>'donor'],
    ['id'=>2, 'fullname'=>'Jane Smith', 'email'=>'jane@example.com', 'role'=>'ngo'],
    ['id'=>3, 'fullname'=>'Admin User', 'email'=>'admin@example.com', 'role'=>'admin'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | User Management</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        color: #333;
    }
    header {
        background-color: #007bff;
        color: #fff;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    header h1 {
        margin: 0;
        font-size: 24px;
    }
    nav a {
        color: #fff;
        text-decoration: none;
        margin-left: 15px;
        font-weight: 500;
    }
    nav a:hover {
        text-decoration: underline;
    }
    .sidebar {
        width: 220px;
        background-color: #1a1a1a;
        color: #fff;
        height: 100vh;
        position: fixed;
        top: 60px;
        left: 0;
        padding-top: 20px;
    }
    .sidebar a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 12px 20px;
        margin: 5px 0;
    }
    .sidebar a:hover {
        background-color: #007bff;
    }
    .main {
        margin-left: 220px;
        padding: 30px;
    }
    h2 {
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        color: #333;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    table th, table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    table th {
        background-color: #007bff;
        color: #fff;
    }
    table tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-right: 5px;
    }
    .edit { background-color: #28a745; color: #fff; }
    .delete { background-color: #dc3545; color: #fff; }
    .add-btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 18px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 15px;
    }
    .add-btn:hover {
        background-color: #0056b3;
    }
    footer {
        text-align: center;
        padding: 15px;
        margin-top: 50px;
        font-size: 14px;
        background-color: #f4f6f8;
        color: #666;
    }
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .main {
            margin-left: 0;
            padding: 20px;
        }
        table th, table td {
            font-size: 14px;
        }
    }
</style>
</head>
<body>

<header>
    <h1>User Management</h1>
    <nav>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="sidebar">
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="user_management.php">Users</a>
    <a href="donations.php">Donations</a>
    <a href="aid_requests.php">Aid Requests</a>
    <a href="reports.php">Reports</a>
    <a href="notifications.php">Notifications</a>
</div>

<div class="main">
    <h2>All Users</h2>
    <a href="add_user.php" class="add-btn">+ Add New User</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['fullname']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo ucfirst($user['role']); ?></td>
            <td>
                <button class="btn edit">Edit</button>
                <button class="btn delete">Delete</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

</body>
</html>
