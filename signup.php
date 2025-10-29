<!-- File: signup.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AidBridge | Signup</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #007bff, #00c6ff);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background-color: rgba(0,0,0,0.6);
        padding: 40px 30px;
        border-radius: 10px;
        width: 100%;
        max-width: 450px;
        text-align: center;
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
    }
    h2 {
        margin-bottom: 20px;
    }
    input, select {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        font-size: 15px;
    }
    input:focus, select:focus {
        outline: none;
        box-shadow: 0 0 5px #00c6ff;
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
    a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin-top: 10px;
    }
    a:hover {
        text-decoration: underline;
    }
    .back {
        position: absolute;
        top: 15px;
        left: 20px;
        background-color: rgba(255,255,255,0.2);
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 14px;
    }
    .back:hover {
        background-color: rgba(255,255,255,0.4);
    }
</style>
</head>
<body>

<a href="index.php" class="back">← Back</a>

<div class="container">
    <h2>Create Your Account</h2>

    <form action="signup_process.php" method="POST">
        <select name="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="donor">Donor</option>
            <option value="ngo">NGO</option>
            <option value="victim">Victim</option>
        </select>

        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>

        <button type="submit" name="signup">Signup</button>

        <a href="login.php">Already have an account? Login</a>
    </form>
</div>

</body>
</html>
