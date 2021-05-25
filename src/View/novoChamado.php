
<?php 
  require __DIR__."/htmlPainel/head.php";
?>

  <body>
    

<div class="container  ">

 <div class="">
  <h4 class="display-4 text-center"  >Solicitação de Chamado</h4>
  <hr>
  
  <div class="alert alert-<?=!isset($_SESSION['class'])?"":$_SESSION['class']?>" role="alert">
       <?= !isset($_SESSION['message'])?"":$_SESSION['message']?>
  </div>
    
   <?php  
      unset($_SESSION['message']);
      unset($_SESSION['class']);
     ?>
   
    
    <form class="row g-3 mt-3" action="/solicitar-chamado" method="POST"  enctype="multipart/form-data">
        <div class="col-7">
            <input type="text" class="form-control" placeholder="Nome..." name="name">
        </div>
       
        <div class="col-5">
            <input type="text" class="form-control" placeholder="Telefone" name="telephone">
        </div>

       <div class="col-7">
            <input class="form-control" name="file" type="file" id="formFileMultiple" >
        </div>
       <div class="col">
          <select class="form-select" name="priority">
            <option>Prioridade</option>
            <option>Urgente</option>
            <option>Baixa</option>
            <option>Média</option>
         </select>
        </div>

        <div class="col-20">
            <label class="form-label">Problema:</label>
            <textarea class="form-control" name="description" rows="7"></textarea>
        </div>
        
        <div class="col-20">
            <button class="btn btn-dark mr-5 col-2" type="submit"> Enviar </button>
            <a href="/painel-cliente" class="btn btn-dark ml-3 col-2" >Voltar</a>
        </div>
       
    </form>
    
    
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