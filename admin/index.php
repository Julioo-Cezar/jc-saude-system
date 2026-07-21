<?php include'includes/header.php';?>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2 p-0">

         <?php include'includes/sidebar.php';?>
        </div>
        <div class="col-md-10">
            <?php include'includes/topbar.php';?>
              <div class="container mt-4">
                    <h1 class="mb-4">
                        Painel Administrativo
                    </h1>
              <div class="row">

        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body bg-primary text-white rounded">
                    <h5 class="card-title fw-bold">Médicos</h5>
                    <h2 class="display-4 fw-bold">0</h2>
                    <p>Total de médicos cadastrados.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-success">
                    <h5 class="card-title">Pacientes</h5>
                    <h2>0</h2>
                    <p>Total de pacientes cadastrados.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-warning">
                    <h5 class="card-title">Consultas</h5>
                    <h2>0</h2>
                    <p>Total de consultas cadastradas.</p>
                </div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-danger">
                    <h5 class="card-title">Especialidades</h5>
                    <h2>0</h2>
                    <p>Total de especialidades cadastradas.</p>
                    </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include'includes/footer.php';?>