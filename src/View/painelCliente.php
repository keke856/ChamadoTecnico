<?= require __DIR__."/htmlPainel/head.php";?>

    <div class="container">

    <div class="alert alert-<?=!isset($_SESSION['class'])?"":$_SESSION['class']?>" role="alert">
       <?= !isset($_SESSION['message'])?"":$_SESSION['message']?>
    </div>

    <?php  
     unset($_SESSION['message']);
     unset($_SESSION['class']);
    ?>


    <a href="/novo-chamado" class="btn btn-dark mt-1 mb-3" >Novo Chamado</a>
  
    <div style="overflow: scroll;  height: 600px; "> 
    
    <table class="table">
    
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Prioridade</th>
            <th scope="col">Status</th>
            <th scope="col">Controles</th>
          
          </tr>
        </thead>
    
          <?php 
          
          foreach($login as $info):
        
            $chamados = $info->getChamado();
            $clientes = $info->getClientes();
            $chamados = $info->getChamado();

          foreach($chamados as $chamado):?>
        <tbody>
            <tr>
                <td><?= $chamado->getId();?></td>
                <td><?=$chamado->getName();?></td>
                <td><?= $chamado->getData()?></td>
                <td><?= $chamado->getPriority()?></td>
                <?= $this->bgColor($chamado->getStatus());?>
                <td class="<?= $_SESSION['bgColor']?>" ><?=$chamado->getStatus();?></td>
                <td>
                <span class="material-icons" ><a href="/detalhes-cliente?id=<?= $chamado->getId();?>&company=<?= $clientes->getCompany()?>&email=<?=$info->getEmail();?>&telephone=<?=$clientes->getTelephone();?>" class="link-dark">more_horiz</a></span>  
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