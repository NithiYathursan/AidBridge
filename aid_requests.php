<!-- File: aid_requests.php -->
<?php
session_start();

// Check if user is admin
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}

// Example aid requests array (replace with DB query later)
$requests = [
    ['id'=>1, 'victim'=>'Alice Brown', 'type'=>'Food', 'location'=>'Colombo', 'status'=>'Pending', 'date'=>'2025-10-01'],
    ['id'=>2, 'victim'=>'Bob Smith', 'type'=>'Clothes', 'location'=>'Kandy', 'status'=>'Approved', 'date'=>'2025-10-03'],
    ['id'=>3, 'victim'=>'Charlie Lee', 'type'=>'Medical', 'location'=>'Galle', 'status'=>'Rejected', 'date'=>'2025-10-05'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Aid Requests</title>
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
    header h1 { margin:0; font-size:24px; }
    nav a { color:#fff; text-decoration:none; margin-left:15px; font-weight:500; }
    nav a:hover { text-decoration: underline; }
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
    .sidebar a:hover { background-color: #007bff; }
    .main { margin-left: 220px; padding: 30px; }
    h2 { margin-bottom: 20px; }
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        color: #333;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    table th, table td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
    table th { background-color: #007bff; color: #fff; }
    table tr:hover { background-color: #f1f1f1; }
    .btn { padding: 6px 12px; border:none; border-radius:5px; cursor:pointer; font-size:14px; margin-right:5px; }
    .approve { background-color: #28a745; color: #fff; }
    .reject { background-color: #dc3545; color: #fff; }
    .view { background-color: #17a2b8; color: #fff; }
    footer {
        text-align:center;
        padding:15px;
        margin-top:50px;
        font-size:14px;
        background-color: #f4f6f8;
        color: #666;
    }
    @media (max-width: 768px) {
        .sidebar { width:100%; height:auto; position:relative; }
        .main { margin-left:0; padding:20px; }
        table th, table td { font-size:14px; }
    }
</style>
</head>
<body>

<header>
    <h1>Aid Requests</h1>
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
    <h2>All Aid Requests</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Victim</th>
            <th>Type</th>
            <th>Location</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach($requests as $req): ?>
        <tr>
            <td><?php echo $req['id']; ?></td>
            <td><?php echo $req['victim']; ?></td>
            <td><?php echo $req['type']; ?></td>
            <td><?php echo $req['location']; ?></td>
            <td><?php echo $req['status']; ?></td>
            <td><?php echo $req['date']; ?></td>
            <td>
                <?php if($req['status']=='Pending'): ?>
                    <button class="btn approve">Approve</button>
                    <button class="btn reject">Reject</button>
                <?php endif; ?>
                <button class="btn view">View</button>
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
