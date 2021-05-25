<?php require __DIR__."/htmlPainel/head.php";?>

<div class="container-fluid">
  <div class="row">
   
 <?php require __DIR__."/htmlPainel/menuPainel.php";?>
    
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
    <div class="row mb-3 mt-4">
      
      <div class="col-6 themed-grid-col"><h2>Painel Técnico(<?=$h1?>)</h2></div>
    
      <div class="col-6 themed-grid-col"> 
        <form class="d-flex col-9 "  action="/buscar" method="POST" >
            <input class="form-control me-2" type="search" name="search" placeholder="Buscar Chamado..." aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
       </div>
   
     </div>

 <div class="table-responsive">
    <div style="overflow: scroll;  height: 600px; ">
   
      <table class="table col-sm-12">
    
        <thead>
          <tr>
            <th scope="col-sm-1">ID</th>
            <th scope="col-sm-1">EMPRESA</th>
            <th scope="col-sm-1">Nome</th>
            <th scope="col-sm-1">Data</th>
            <th scope="col-sm-1">Status</th>
            <th scope="col-sm-1">Controles</th>
          
          </tr>
         
        </thead>
        
          <?php 
         
             foreach($login as $info):
        
              $chamados = $info->getChamado();
              $clientes = $info->getClientes();
          
             foreach($chamados as $chamado):
              $status = $chamado->getStatus();
              $this->bgColor($status);
             ?>
   
        <tbody >
            <tr>
                <td><?= $chamado->getId();?></td>
                <td><?= $clientes->getCompany();?></td>
                <td><?= $chamado->getName();?></td>
                <td><?= $chamado->getData();?></td>
                <td class="<?=$_SESSION['bgColor']?>" ><?= $chamado->getStatus()?></td>
                <td>
                <span class="material-icons" ><a href="/finalizar-chamado?id=<?= $chamado->getId();?>&company=<?= $clientes->getCompany()?>&email=<?=$info->getEmail();?>&telephone=<?=$clientes->getTelephone();?>&voltar=<?=$chamado->getStatus()==="Concluido"?"/chamado-concluido": "/chamado-visita-tecnica" ?>" class="link-dark">more_horiz</a></span>  
                </td> 
             
            </tr>
          <tr>
            
        </tbody>
              
        <?php 
         endforeach;
         endforeach;
           ?>
    </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
