
<?php

session_start();


  $logado = $_SESSION["logado"];

 switch($logado){
  case "logado":



  
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta http-equiv="refresh" content="120; url= painel.php">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>Busca</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../View/painelConcluidos.php">Concluidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../View/painelAtendimento.php">Atendimento</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="../View/painelVisitaTecnica.php">Visita Técnica</a>
        </li>
      </ul>
  <!-- bUSCA  -->
      <form class="d-flex" method="POST" action="../Controllers/ControllersChamado.php?acao=4">
        


<div class="form-check mr-2" >
  <input class="form-check-input" type="radio" name="empresa" id="flexRadioDefault2" checked >
  <label class="form-check-label" for="flexRadioDefault2">
    Empresa
  </label>
</div>
   
        <input class="form-control me-2" type="search"  name="info" placeholder="Busca..." aria-label="Search">
        <button class="btn btn-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<div class="jumbotron" style="background: #00194a;">
  <h1 class="display-4 text-center" style="color: #ffffff;" >Painel do Administrador</h1>
  <hr style="color: #ffffff;">
  
  <h6 class="display-6 text-center" style="color: #ffffff;" >Busca</h6>
  <p class="lead text-center" style="color: #ffffff;">Sistema em fase Beta.</p>
 
  </div>

  
  <div class="container">
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Empresa</th>
            <th scope="col">Nome</th>
            <th scope="col">Status</th>
            <th scope="col">Data</th>
            <th scope="col">Controles</th>
          
          </tr>
        </thead>
        
            <?php
         $busca = $_GET['buscar']??null;
        
         if ($busca != 1){
          foreach (array_reverse($chamados) as $chamado){ ?>
            <tbody>
        <tr>
            
            <?php  echo "<td>$chamado->id </td>"?>
            <?php echo "<td>$chamado->empresa</td>"; ?>
            <?php echo "<td>$chamado->nome</td>"; ?>
           
            <?php 
          

            switch($chamado->posicao){
                case "Concluido":
                  echo "<td class='bg-success'>$chamado->posicao</td>"; 
                  break;
                  case "Visita Técnica":
                      echo "<td class='bg-danger'>$chamado->posicao</td>"; 
                      break;
                      case "Atendimento":
                          echo "<td class='bg-info'>$chamado->posicao</td>"; 
                          break;
                          case"Aguardando":
                              echo "<td class='bg-warning'>$chamado->posicao</td>"; 
                              break;

            }
            
            ?>
           
           
            <?php echo "<td>$chamado->dt_chamado</td>"; ?>
           <td>
            <span class="material-icons" data-bs-toggle="modal" data-bs-target="#exampleModal" ><a href="#" class="link-dark" >delete_sweep</a></span>
            <span class="material-icons" ><a href="../View/detalhes.php?id=<?php echo $chamado->id ?>" class="link-dark">more_horiz</a></span>&nbsp &nbsp &nbsp     
            </td> 
           
           
           
            </tr>
        <tr>
          
      </tbody>
            <?php } 
         }
         ?>
        
      </table>
  



<!-- Modal confirmação de exclusão-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h5>Deseja excluir esse Chamado ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary"><a href="../Controllers/ControllersChamado.php?acao=3&id=<?php echo $chamado->id?>" class="link-light" >Sim</a></button>
      </div>
    </div>
  </div>
</div>


    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php  
 break;
default: 
echo "Acesso negado";
break;

}
?>