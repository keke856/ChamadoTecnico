<?php
require __DIR__."/htmlPainel/head.php";  
?>
<div class="container">
  
   <h1 class="">Alterar Cliente</h1>
  
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
        
     <form class="row " method="POST" action="/editar-cliente?id=<?=$update->getId();?>">
              
        <div class="col-5 mb-2">
            <label class="form-label">Nome</label>
            <input type="text"name="name" value="<?=  $update->getName();?>" class="form-control">
        </div>
        
        <div class="col-5 mb-2">
            <label  class="form-label">Email</label>
            <input type="email" name="email" value="<?=  $update->getEmail();?>" class="form-control" >
        </div>
        
        <div class="col-5">
            <label  class="form-label">Nova Senha</label>
            <input type="password" name="password"class="form-control" >
        </div>
        
        <div class="col-5">
            <label  class="form-label">Confirmar Senha</label>
            <input type="password" name="password2" class="form-control" >
        </div>
       
        <div class="col-5 mb-2">
            <label class="form-label">Empresa</label>
            <input type="text"name="company" value="<?=  $cliente->getCompany();?>" class="form-control">
        </div>
        <div class="col-5 mb-2">
            <label class="form-label">CNPJ/CPF</label>
            <input type="text"name="cpfcnpj" value="<?=  $cliente->getCpfCnpj();?>" class="form-control">
        </div>

        <div class="col-5 mb-2">
            <label class="form-label">Estado</label>
            <input type="text"name="state" value="<?=  $cliente->getState()?>" class="form-control">
        </div>

        <div class="col-5 mb-2">
            <label class="form-label">Cidade</label>
            <input type="text"name="city" value="<?=  $cliente->getCity();?>" class="form-control">
        </div>

        <div class="col-5 mb-2">
            <label class="form-label">Bairro</label>
            <input type="text"name="district" value="<?=  $cliente->getDistrict();?>" class="form-control">
        </div>

        <div class="col-5 mb-2">
            <label class="form-label">Telefone</label>
            <input type="text"name="telephone" value="<?=  $cliente->getTelephone();?>" class="form-control">
        </div>
     
      <div class="col-3 mt-3">       
        <button type="submit" class="btn btn-dark">Alterar</button>
        <a href="/list-clientes"  class="btn btn-dark">Voltar</a>
      </div>   
    </form>
  </div>     
</div>
  
 
</div>
    
    
<?php require __DIR__."/../View/htmlPainel/footer.php";    
    
    

