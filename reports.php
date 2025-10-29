<!-- File: reports.php -->
<?php
session_start();

// Check if user is admin
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}

// Example statistics (replace with database queries)
$total_donations = 12000;
$total_aid_requests = 45;
$total_users = 80;

// Example data for Chart.js
$donation_types = ['Cash','Goods'];
$donation_counts = [75,45];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Reports</title>
<style>
    body {
        margin:0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#f4f6f8;
        color:#333;
    }
    header {
        background-color: #007bff;
        color:#fff;
        padding:15px 30px;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    header h1 { margin:0; font-size:24px; }
    nav a { color:#fff; text-decoration:none; margin-left:15px; font-weight:500; }
    nav a:hover { text-decoration:underline; }
    .sidebar {
        width:220px;
        background-color:#1a1a1a;
        color:#fff;
        height:100vh;
        position:fixed;
        top:60px;
        left:0;
        padding-top:20px;
    }
    .sidebar a {
        display:block;
        color:#fff;
        text-decoration:none;
        padding:12px 20px;
        margin:5px 0;
    }
    .sidebar a:hover { background-color:#007bff; }
    .main { margin-left:220px; padding:30px; }
    h2 { margin-bottom:20px; }
    .cards {
        display:flex;
        flex-wrap:wrap;
        gap:20px;
        margin-bottom:30px;
    }
    .card {
        flex:1 1 200px;
        background-color:#007bff;
        color:#fff;
        padding:20px;
        border-radius:10px;
        text-align:center;
    }
    .card h3 { margin:10px 0; font-size:28px; }
    .card p { margin:0; font-size:16px; }
    .report-buttons {
        margin-bottom:20px;
    }
    .btn {
        padding:8px 15px;
        margin-right:10px;
        background-color:#28a745;
        color:#fff;
        border:none;
        border-radius:5px;
        cursor:pointer;
        font-size:14px;
        text-decoration:none;
    }
    .btn:hover { background-color:#218838; }
    canvas { background:#fff; border-radius:10px; padding:20px; }
    footer {
        text-align:center;
        padding:15px;
        margin-top:50px;
        font-size:14px;
        background-color:#f4f6f8;
        color:#666;
    }
    @media (max-width:768px){
        .sidebar { width:100%; height:auto; position:relative; }
        .main { margin-left:0; padding:20px; }
        .cards { flex-direction:column; }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<header>
    <h1>Reports</h1>
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
    <h2>Summary</h2>
    <div class="cards">
        <div class="card">
            <p>Total Donations</p>
            <h3><?php echo $total_donations; ?></h3>
        </div>
        <div class="card">
            <p>Total Aid Requests</p>
            <h3><?php echo $total_aid_requests; ?></h3>
        </div>
        <div class="card">
            <p>Total Users</p>
            <h3><?php echo $total_users; ?></h3>
        </div>
    </div>

    <div class="report-buttons">
        <a href="export_report.php?type=pdf" class="btn">Export PDF</a>
        <a href="export_report.php?type=csv" class="btn">Export CSV</a>
    </div>

    <h2>Donation Types</h2>
    <canvas id="donationChart" width="400" height="200"></canvas>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

<script>
const ctx = document.getElementById('donationChart').getContext('2d');
const donationChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($donation_types); ?>,
        datasets: [{
            label: 'Donations',
            data: <?php echo json_encode($donation_counts); ?>,
            backgroundColor: ['#007bff','#28a745'],
            borderColor: ['#fff','#fff'],
            borderWidth: 2
        }]
    },
    options: {
        responsive:true
    }
});
</script>

</body>
</html>
