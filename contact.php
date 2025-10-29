<!-- File: contact.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Contact Us</title>
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
    .container {
        max-width: 500px;
        margin: 80px auto 50px;
        padding: 30px;
        background-color: rgba(0,0,0,0.6);
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
    }
    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 32px;
    }
    input, textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        font-size: 15px;
    }
    input:focus, textarea:focus {
        outline: none;
        box-shadow: 0 0 5px #00c6ff;
    }
    textarea {
        resize: vertical;
        min-height: 100px;
    }
    button {
        width: 100%;
        padding: 12px;
        background-color: #fff;
        color: #007bff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 10px;
        transition: 0.3s;
    }
    button:hover {
        background-color: #007bff;
        color: #fff;
    }
    .back {
        position: absolute;
        top: 15px;
        left: 20px;
        background-color: rgba(255,255,255,0.2);
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 14px;
        text-decoration: none;
        color: #fff;
    }
    .back:hover {
        background-color: rgba(255,255,255,0.4);
    }
    footer {
        background-color: rgba(0,0,0,0.5);
        text-align: center;
        padding: 15px;
        font-size: 14px;
    }
</style>
</head>
<body>

<a href="index.php" class="back">← Back</a>

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

<div class="container">
    <h2>Contact Us</h2>

    <form action="contact_process.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" name="send">Send Message</button>
    </form>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> AidBridge | All Rights Reserved.
</footer>

</body>
</html>
