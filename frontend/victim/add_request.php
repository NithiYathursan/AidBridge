<?php include_once("../partials/head.php"); ?>
<?php include_once("../partials/navbar.php"); ?>
<div class="container py-5" style="max-width:760px;">
  <div class="card shadow-sm"><div class="card-body p-4">
    <h4 class="mb-3"><i class="bi bi-megaphone me-2 text-danger"></i>Create Aid Request</h4>
    <form id="reqForm">
      <div class="row g-3">
        <div class="col-md-8"><label class="form-label">Title</label><input class="form-control" name="title" required></div>
        <div class="col-md-4"><label class="form-label">Priority</label>
          <select class="form-select" name="priority"><option value="low">Low</option><option value="med" selected>Medium</option><option value="high">High</option></select></div>
        <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" rows="3" name="description"></textarea></div>
        <div class="col-md-4"><label class="form-label">Resource Type</label>
          <select class="form-select" name="resource_type" required>
            <option value="food">Food</option><option value="water">Water</option>
            <option value="medicine">Medicine</option><option value="shelter">Shelter</option>
            <option value="clothes">Clothes</option><option value="funds">Funds</option><option value="other">Other</option>
          </select></div>
        <div class="col-md-4"><label class="form-label">Quantity Needed</label><input type="number" class="form-control" name="qty_needed" min="1" required></div>
        <div class="col-md-4"><label class="form-label">District</label><input class="form-control" name="district" required></div>
        <div class="col-md-6"><label class="form-label">Latitude (optional)</label><input class="form-control" name="lat"></div>
        <div class="col-md-6"><label class="form-label">Longitude (optional)</label><input class="form-control" name="lng"></div>
      </div>
      <input type="hidden" name="source" value="citizen">
      <button class="btn btn-danger w-100 mt-3">Submit Request</button>
    </form>
  </div></div>
</div>
<?php include_once("../partials/footer.php"); ?>
<script>
document.querySelector('#reqForm').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const res=await fetch('../../backend/api/add_request.php',{method:'POST',body:new FormData(e.target)});
  const j=await res.json();
  if(j.ok){ alert('Request created. Tracking code: '+j.tracking_code); e.target.reset(); }
  else alert(j.msg||'Failed to create request');
});
</script>