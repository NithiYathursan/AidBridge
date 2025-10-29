<!-- File: about.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | About Us</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #007bff, #00c6ff);
        color: #fff;
    }
    header {
        background-color: rgba(0,0,0,0.6);
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
        margin: 0 15px;
        font-weight: 500;
    }
    nav a:hover {
        text-decoration: underline;
    }
    .content {
        max-width: 900px;
        margin: 80px auto 50px;
        padding: 0 20px;
        line-height: 1.6;
    }
    h2 {
        font-size: 36px;
        margin-bottom: 20px;
        text-align: center;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    ul li {
        background-color: rgba(255,255,255,0.1);
        margin: 10px 0;
        padding: 12px 15px;
        border-radius: 5px;
    }
    footer {
        background-color: rgba(0,0,0,0.5);
        text-align: center;
        padding: 15px;
        font-size: 14px;
    }
    @media (max-width: 768px) {
        h2 {
            font-size: 28px;
        }
        nav a {
            margin: 0 8px;
            font-size: 14px;
        }
    }
</style>
</head>
<body>

<header>
    <h1>🌍 AidBridge</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<div class="content">
    <h2>About AidBridge</h2>
    <p>
        AidBridge is a web-based platform designed to **connect victims, donors, NGOs, and administrators** during disaster situations in Sri Lanka.
        The system ensures that aid requests are managed efficiently and resources are delivered transparently.
    </p>

    <h3>Key Features</h3>
    <ul>
        <li>Role-based login for Admin, Donor, NGO, and Victim.</li>
        <li>Submit and track disaster aid requests.</li>
        <li>Manage donations, both cash and goods.</li>
        <li>Allocate resources and track deliveries.</li>
        <li>Receive real-time notifications and updates.</li>
        <li>View analytics dashboards and download PDF/CSV reports.</li>
        <li>Integrated Google Maps for location-based requests.</li>
    </ul>

    <p>
        Our mission is to ensure **rapid, organized, and transparent disaster relief**, making a meaningful impact during times of need.
    </p>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

</body>
</html>
