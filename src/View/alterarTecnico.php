<?php
require __DIR__."/htmlPainel/head.php";  
?>
<div class="container">
  
   <h1 class="">Alterar Técnico</h1>
  
     <div class="container-sm shadow-lg p-2 mb-3 bg-body rounded w-75 h-auto mt-4 p-5"> 
     

     <div class="alert alert-<?=!isset($_SESSION['class'])?"":$_SESSION['class']?>" role="alert">
       <?= !isset($_SESSION['message'])?"":$_SESSION['message']?>
    </div>

    <?php  
     unset($_SESSION['message']);
     unset($_SESSION['class']);
    ?>   

     <div class="row ">
   
   
<div class="row">
     <div class="col">
        
     <form class="row " method="POST" action="/update-tecnico?id=<?=$update->getId();?>">
              
        <div class="col-5 mb-2">
            <label class="form-label">Nome</label>
            <input type="text"name="name" value="<?=  $update->getName();?>" class="form-control">
        </div>
        
        <div class="col-5 mb-2">
            <label  class="form-label">Email</label>
            <input type="email" name="email" value="<?=  $update->getEmail();?>" class="form-control" >
        </div>
        
        <div class="col-4">
            <label  class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" >
        </div>
        
        <div class="col-4">
            <label  class="form-label">Confirmar Senha</label>
            <input type="password" name="password2" class="form-control" >
        </div>
       
        <div class="col-3 mb-3 ">
          Tipo: <select id="inputState" class="form-select" name="type">
            <option selected>user</option>
            <option>admin</option>
            
          </select>
      </div>
     
      <div class="col-4">       
        <button type="submit" class="btn btn-dark">Alterar</button>
        <a href="/painel-tecnico" class=" btn btn-dark">Voltar</a>
      </div>   
    </form>
  </div>     
</div>
  
 
</div>
    
    
<?php require __DIR__."/../View/htmlPainel/footer.php";    
    
    

