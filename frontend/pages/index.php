<?php include_once("../partials/head.php"); ?>
<?php include_once("../partials/navbar.php"); ?>
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h1 class="fw-bold">AidBridge</h1>
    <p class="lead">Requests · Donations · Allocations — made simple</p>
    <a href="../user/register.php" class="btn btn-warning btn-lg me-2">Get Started</a>
    <a href="../user/login.php" class="btn btn-outline-light btn-lg">Login</a>
  </div>
</section>
<div class="container py-5">
  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body">
      <h5><i class="bi bi-megaphone me-2 text-primary"></i>Submit Requests</h5><p class="text-muted">NGOs/Victims add needs with priority.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body">
      <h5><i class="bi bi-heart me-2 text-danger"></i>Donate</h5><p class="text-muted">Donors pledge goods or funds.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body">
      <h5><i class="bi bi-diagram-3 me-2 text-success"></i>Allocate</h5><p class="text-muted">Admins route resources fast.</p>
    </div></div></div>
  </div>
</div>
<?php include_once("../partials/footer.php"); 