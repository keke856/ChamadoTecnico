<?php 
if(!isset($_SESSION['type'])){
    session_start();
}
    ?>
 


      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/painel-tecnico">
            <span class="material-icons">access_time</span>
            Aguardando atendimento
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/atendimento">
            <span class="material-icons">support_agent</span>
              Atendimento
            </a>
          <li class="nav-item">
            <a class="nav-link" href="/chamado-visita-tecnica">
            <span class="material-icons">build</span>
              Visita Técnica
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/chamado-concluido">
            <span class="material-icons">done</span>
              Concluido
            </a>
          </li>     
         
        </ul>


        <?php if($_SESSION['type'] === 'admin'):?>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Ajustes</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="/cadastro-email">
            <span class="material-icons">mail</span>
              Cadastro de Email
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cadastro-tecnico">
            <span class="material-icons">person</span>
              Técnicos
            </a>
          </li>
                 
      <?php  endif;?>
    

          <li class="nav-item">
            <a class="nav-link" href="/list-clientes">
            <span class="material-icons">person</span>
              Clientes
            </a>
          </li>
        
        </ul>
      </div>
    </nav>
  
  