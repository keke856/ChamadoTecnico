<?php require __DIR__."/htmlPainel/head.php";?>

<div class="container-fluid">
  <div class="row">
   
 <?php require __DIR__."/htmlPainel/menuPainel.php";?>
    
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
    <div class="row mb-3 mt-4">
      
      <div class="col-6 themed-grid-col"><h2>Painel Técnico</h2></div>
    
      <div class="col-6 themed-grid-col"> 
      
     </div>

 <div class="table-responsive">

 <div class="alert alert-<?=!isset($_SESSION['class'])?"":$_SESSION['class']?>" role="alert">
       <?= !isset($_SESSION['message'])?"":$_SESSION['message']?>
    </div>

    <?php  
     unset($_SESSION['message']);
     unset($_SESSION['class']);
    ?> 
    <div style="overflow: scroll;  height: 600px; ">
   
    <div class="container-sm shadow-lg p-2 mb-3 bg-body rounded w-75 h-auto p-5">   
    <h5>Técnicos</h5> 
    
   
     
<div class="row ">
   
  <form class="row g-3" action="/cadastrar-tecnico" method="POST">

        <div class="col-5">
          <label class="form-label">Nome</label>
          <input type="text"name="name"  class="form-control">
          
        </div>
        
        <div class="col-5">
          <label  class="form-label">Email</label>
          <input type="email" name="email"  class="form-control" >
        </div>
        
        <div class="col-3">
          <label  class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" >
        </div>

        <div class="col-3">
          <label  class="form-label">Confirmar Senha</label>
          <input type="password" name="passwordConfirm" class="form-control" >
        </div>

        <div class="col-3 ">
        <label  class="form-label"> Tipo:</label>
                <select id="inputState" class="form-select" name="type">
                  <option selected>user</option>
                  <option>admin</option>
                  
                </select>
            </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-dark">Cadastrar</button>
          <a href="/painel-tecnico" class="btn btn-dark"> Voltar </a>
        </div>

</form>
   
   
</div>

<div class="container mt-3">
   
 <table class="table">

 <thead>
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Email</th>
     <th scope="col">Nome</th>
     <th scope="col">Permissão</th>
     <th scope="col">Opções</th>
     
   
   </tr>
 </thead>

   <?php foreach($tecnicos as $tecnico):?>
     <tbody>
         <tr>
             <td><?= $tecnico->getId();?></td>
             <td><?= $tecnico->getEmail();?></td>
             <td><?= $tecnico->getName();?></td>
             <td><?=$tecnico->getType();?></td>
             <td>
             <span class="material-icons" ><a href="/alterar-tecnico?id=<?= $tecnico->getId();?>" class="link-dark">more_horiz</a></span>&nbsp;  
             <span class="material-icons ml-3" ><a href="/remover-tecnico?id=<?= $tecnico->getId();?>" class="link-dark">delete</a></span>
             </td> 
         
         </tr>
       <tr>
         
     </tbody>
           
     <?php 
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
