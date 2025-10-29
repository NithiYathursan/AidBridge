<?php include_once("../partials/head.php"); ?>
<?php include_once("../partials/navbar.php"); ?>
<div class="container py-5" style="max-width:520px;">
  <div class="card shadow-sm"><div class="card-body p-4">
    <h4 class="mb-3"><i class="bi bi-box-arrow-in-right me-2 text-primary"></i>Login</h4>
    <form id="loginForm">
      <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" name="email" required></div>
      <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control" name="password" required></div>
      <div class="mb-3"><label class="form-label">Role</label>
        <select class="form-select" name="role" required>
          <option value="victim">Victim</option><option value="donor">Donor</option>
          <option value="ngo">NGO</option><option value="admin">Admin</option>
        </select></div>
      <button class="btn btn-primary w-100">Login</button>
    </form>
    <p class="small mt-3 text-muted">No account? <a href="./register.php">Register</a></p>
  </div></div>
</div>
<?php include_once("../partials/footer.php"); ?>
<script>
document.querySelector('#loginForm').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const res = await fetch('../../backend/api/login.php',{method:'POST',body:new FormData(e.target)});
  const j = await res.json();
  if(j.ok){
    const role=j.user.role;
    if(role==='admin') location.href='../admin/dashboard.php';
    else if(role==='ngo') location.href='../ngo/dashboard.php';
    else if(role==='donor') location.href='../donor/donate.php';
    else location.href='../victim/add_request.php';
  } else alert(j.msg||'Login failed');
});
</script>