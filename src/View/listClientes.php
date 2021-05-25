<?php require __DIR__."/htmlPainel/head.php";?>

<div class="container-fluid">
  <div class="row">
   
 <?php require __DIR__."/htmlPainel/menuPainel.php";?>
    
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
    <div class="row mb-3 mt-4">
      
      <div class="col-6 themed-grid-col"><h2>Painel Técnico</h2></div>
     </div>

     
    <div class="alert alert-<?=!isset($_SESSION['class'])?"":$_SESSION['class']?>" role="alert">
       <?= !isset($_SESSION['message'])?"":$_SESSION['message']?>
    </div>

    <?php  
     unset($_SESSION['message']);
     unset($_SESSION['class']);
    ?>

 <div class="table-responsive">

 <div class="col-6 themed-grid-col"> 
        <form class="d-flex col-9 "  action="/buscar-clientes" method="POST" >
            <input class="form-control me-2" type="search" name="search" placeholder="Buscar Clientes..." aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
       </div>

    <div style="overflow: scroll;  height: 600px; " class="mt-5">
       <h5>Clientes</h5>
   
    <table class="table">

<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Email</th>
    <th scope="col">Nome</th>
    <th scope="clo">Empresa</th>
    <th scope="col">Opções</th>
    
  
  </tr>
</thead>

  <?php foreach($info as $login):
           $clientes = $login->getClientes();
           
    ?>
          
    <tbody>
        <tr>
            <td><?= $login->getId();?></td>
            <td><?= $login->getEmail();?></td>
            <td><?= $login->getName();?></td>
            <td><?= $clientes->getCompany();?></td>
            <td>
            <span class="material-icons" ><a href="/edit-cliente?id=<?= $login->getId();?>"  class="link-dark">more_horiz</a></span>&nbsp;  
            <span class="material-icons ml-3" ><a href="/remover-cliente?id=<?= $login->getId();?>" class="link-dark">delete</a></span>
            </td> 
        
        </tr>
      <tr>
        
    </tbody>
          
    <?php 
       endforeach;
        

      ?>
    </table>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
