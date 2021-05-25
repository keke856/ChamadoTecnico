<?php

if(!isset($_SESSION)){
session_start();
}

require __DIR__."/htmlPainel/head.php";  
  

?>
<div class="container">
 
  
  <div class="container-sm shadow-lg p-2 mb-3 bg-body rounded w-75 h-auto mt-4 p-5">  
     
     <div class="row ">
   
     <?php 
     $company = filter_input(INPUT_GET,'company',FILTER_SANITIZE_STRING);
     $email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_STRING);
     $telephone = filter_input(INPUT_GET,'telephone',FILTER_SANITIZE_STRING);
     ?>

<div class="row">
        <div class="col">
      
      <!-- OPERADOR TERNARIO PARA EXIBIR O TÉCNICO NA TELA -->
        <?php $tecnicos = $_SESSION['type'] === 'admin' ? $chamado->getTecnicos(): $_SESSION['usuario']; ?>
        
        
        <form class="row " method="POST" action="/attendance?id=<?= $chamado->getId();?>&attendance=<?=$tecnicos?>">

    
    
  
 
            
            
    
   <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Alterar</button>
   </div>
         
         
          </form>
      </div>     
  </div>
  
 
</div>
    
    
<?php require __DIR__."/../View/htmlPainel/footer.php";    
    
    

