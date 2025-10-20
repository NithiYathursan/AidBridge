<?php if (session_status() === PHP_SESSION_NONE) session_start(); $u = $_SESSION['user'] ?? null; ?>
<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="../pages/index.php">
      <i class="bi bi-life-preserver me-2"></i>AidBridge
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="../pages/index.php">Home</a></li>
        <?php if(!$u): ?>
          <li class="nav-item"><a class="nav-link" href="../user/login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="../user/register.php">Register</a></li>
        <?php else: ?>
          <?php if($u['role']==='admin'): ?>
            <li class="nav-item"><a class="nav-link" href="../admin/dashboard.php">Admin</a></li>
          <?php elseif($u['role']==='ngo'): ?>
            <li class="nav-item"><a class="nav-link" href="../ngo/dashboard.php">NGO</a></li>
            <li class="nav-item"><a class="nav-link" href="../ngo/add_request.php">Add Request</a></li>
          <?php elseif($u['role']==='donor'): ?>
            <li class="nav-item"><a class="nav-link" href="../donor/donate.php">Donate</a></li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="../victim/add_request.php">Add Request</a></li>
            <li class="nav-item"><a class="nav-link" href="../victim/track_request.php">Track</a></li>
          <?php endif; ?>
          <li class="nav-item"><a class="nav-link" href="../../backend/api/logout.php">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>