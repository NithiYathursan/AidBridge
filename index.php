<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Disaster Relief & Donation Management</title>
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
        letter-spacing: 1px;
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
    .hero {
        text-align: center;
        padding: 120px 20px;
    }
    .hero h2 {
        font-size: 42px;
        margin-bottom: 15px;
    }
    .hero p {
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto 25px;
        line-height: 1.6;
    }
    .hero button {
        background-color: #fff;
        color: #007bff;
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }
    .hero button:hover {
        background-color: #007bff;
        color: #fff;
    }
    footer {
        background-color: rgba(0,0,0,0.5);
        text-align: center;
        padding: 15px;
        position: fixed;
        width: 100%;
        bottom: 0;
        font-size: 14px;
    }
    @media (max-width: 768px) {
        .hero h2 {
            font-size: 32px;
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

<section class="hero">
    <h2>Together, We Bridge Hope and Relief</h2>
    <p>AidBridge connects victims, donors, NGOs, and admins during disaster situations in Sri Lanka — ensuring fast, transparent, and organized aid management.</p>
    <button onclick="window.location.href='login.php'">Get Started</button>
</section>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

</body>
</html>
