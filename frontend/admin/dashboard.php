<?php include_once("../partials/head.php"); ?>
<?php include_once("../partials/navbar.php"); ?>
<div class="container py-4">
  <h4 class="mb-4"><i class="bi bi-speedometer2 me-2 text-primary"></i>Admin Dashboard</h4>
  <div class="row g-3">
    <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted small">Open Requests</div><div class="fs-3 fw-bold" id="statOpen">—</div></div></div></div>
    <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted small">Pledges</div><div class="fs-3 fw-bold" id="statPledges">—</div></div></div></div>
    <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted small">Allocations</div><div class="fs-3 fw-bold" id="statAlloc">—</div></div></div></div>
    <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><div class="text-muted small">Deliveries</div><div class="fs-3 fw-bold" id="statDeliv">—</div></div></div></div>
  </div>
  <div class="row g-4 mt-1">
    <div class="col-lg-7"><div class="card shadow-sm"><div class="card-header fw-semibold">Requests vs Fulfilled</div><div class="card-body"><canvas id="adminChart" height="140"></canvas></div></div></div>
    <div class="col-lg-5"><div class="card shadow-sm"><div class="card-header fw-semibold">Requests Map</div><div class="card-body p-0"><div id="adminMap" style="height:260px;"></div></div></div></div>
  </div>
</div>
<?php include_once("../partials/footer.php"); ?>
<script src="../assets/js/chart.js"></script>
<script src="../assets/js/map.js"></script>
<script>
  AidBridgeCharts.requestsVsFulfilled("adminChart");
  AidBridgeMap.init("adminMap");
  (async()=>{
    try{
      const r=await fetch('../../backend/api/get_dashboard_data.php');
      const j=await r.json();
      if(j.ok){ const d=j.data;
        statOpen.innerText=d.totalOpen??0; statPledges.innerText=d.totalPledges??0;
        statAlloc.innerText=d.totalAlloc??0; statDeliv.innerText=d.totalDeliv??0;
      }
    }catch(e){ console.error(e); }
  })();
</script>