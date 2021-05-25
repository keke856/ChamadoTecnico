<?php 
if(!isset($_SESSION)){
  session_start();
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="60; url= /painel-tecnico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>Painel Técnico</title>
  </head>
  <body>
    
    <div class="jumbotron" style="background: #00194a;">
        <h1 class="display-4 text-center" style="color: #ffffff;" >Painel Técnico</h1>
        <h3 class="text-center" style="color: #ffffff;" ><?= $h1?></h3>
        <hr style="color: #ffffff;">
        
        <h6 class="display-6 text-center" style="color: #ffffff;" ></h6>
        <p class="lead text-end" style="color: #ffffff;">Olá, <b><?=$_SESSION['usuario']?></b> / <a href="/logout">Sair</a>&nbsp; </p>     
    </div>
   
    <?php require __DIR__."/htmlPainel/menuPainel.php";?>
   
    <div class="container-sm mt-3">
    
 
    
    <div style="overflow: scroll;  height: 400px; ">
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
                <span class="material-icons" ><a href="/detalhes?id=<?= $chamado->getId();?>&company=<?= $clientes->getCompany()?>&email=<?=$info->getEmail();?>&telephone=<?=$clientes->getTelephone();?>" class="link-dark">more_horiz</a></span>  
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

    
    

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>