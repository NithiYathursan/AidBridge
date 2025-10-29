<?php include_once("../partials/head.php"); ?>
<?php include_once("../partials/navbar.php"); ?>
<div class="container py-5" style="max-width:640px;">
  <div class="card shadow-sm"><div class="card-body p-4">
    <h4 class="mb-3"><i class="bi bi-person-plus me-2 text-success"></i>Register</h4>
    <form id="regForm">
      <div class="row g-3">
        <div class="col-md-6"><label class="form-label">Full Name</label><input class="form-control" name="full_name" required></div>
        <div class="col-md-6"><label class="form-label">Phone</label><input class="form-control" name="phone"></div>
        <div class="col-md-8"><label class="form-label">Email</label><input type="email" class="form-control" name="email" required></div>
        <div class="col-md-4"><label class="form-label">Role</label>
          <select class="form-select" name="role" required>
            <option value="victim">Victim</option><option value="donor">Donor</option><option value="ngo">NGO</option>
          </select></div>
        <div class="col-md-6"><label class="form-label">Password</label><input type="password" class="form-control" name="password" required></div>
        <div class="col-md-6"><label class="form-label">Confirm Password</label><input type="password" class="form-control" name="password2" required></div>
      </div>
      <button class="btn btn-success w-100 mt-3">Create Account</button>
    </form>
  </div></div>
</div>
<?php include_once("../partials/footer.php"); ?>
<script>
document.querySelector('#regForm').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const fd=new FormData(e.target);
  if(fd.get('password')!==fd.get('password2')){ alert('Passwords do not match'); return; }
  const res = await fetch('../../backend/api/register.php',{method:'POST',body:fd});
  const j=await res.json();
  if(j.ok){ alert('Account created. Please login.'); location.href='./login.php'; }
  else alert(j.msg||'Registration failed');
});
</script>