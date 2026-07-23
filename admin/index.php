<?php
// Carrega o documento HTML, as dependências visuais e a abertura do corpo da página.
include'includes/conexao.php';
include'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2 p-0">

         <?php
         // Menu principal compartilhado entre as páginas administrativas.
         include'includes/sidebar.php';
         ?>
        </div>
        <div class="col-md-10">
            <?php
            // Área reservada para informações da sessão do usuário e ações globais.
            include'includes/topbar.php';
            ?>
              <div class="container mt-4">
                    <h1 class="mb-4">
                        Painel Administrativo
                    </h1>
              <!-- Os indicadores serão preenchidos com dados reais quando o banco de dados for integrado. -->
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
<?php
// Finaliza o documento HTML aberto pelo cabeçalho.
include'includes/footer.php';
?>
