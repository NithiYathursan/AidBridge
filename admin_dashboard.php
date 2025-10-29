<!-- File: admin_dashboard.php -->
<?php
session_start();

// Example: check if user is admin
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}

// Example stats (these will come from database later)
$total_users = 120;
$total_donors = 45;
$total_ngos = 15;
$total_requests = 30;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Admin Dashboard</title>
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
    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .card {
        flex: 1 1 200px;
        background-color: #007bff;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
    }
    .card:hover {
        background-color: #0056b3;
    }
    .card h3 {
        margin: 10px 0;
        font-size: 28px;
    }
    .card p {
        margin: 0;
        font-size: 16px;
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
        .card-container {
            flex-direction: column;
        }
    }
</style>
</head>
<body>

<header>
    <h1>Admin Dashboard</h1>
    <nav>
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
    <h2>Welcome, Admin!</h2>
    <div class="card-container">
        <div class="card">
            <p>Total Users</p>
            <h3><?php echo $total_users; ?></h3>
        </div>
        <div class="card">
            <p>Total Donors</p>
            <h3><?php echo $total_donors; ?></h3>
        </div>
        <div class="card">
            <p>Total NGOs</p>
            <h3><?php echo $total_ngos; ?></h3>
        </div>
        <div class="card">
            <p>Pending Requests</p>
            <h3><?php echo $total_requests; ?></h3>
        </div>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

</body>
</html>
