<?php require __DIR__."/htmlPainel/head.php";?>

<div class="container-fluid">
  <div class="row">
   
 <?php require __DIR__."/htmlPainel/menuPainel.php";?>
    
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
    <div class="row mb-3 mt-4">
      
      <div class="col-6 themed-grid-col"><h2>Painel Técnico</h2></div>

  
     </div>

 <div class="table-responsive">

    <div style="overflow: scroll;  height: 600px; ">
   
    <div class="container-sm shadow-lg p-2 mb-3 mt-4 bg-body rounded w-75 h-auto p-5">    
    <h5>Cadastro de Email</h5> 
          <div class="row ">
   
            <form class="row g-3" action="/cadastrar-email" method="POST">
            
                <div class="col-5">
            
                    <input type="text" class="form-control w-100" name="email" placeholder="E-mail">
                </div>
                
                <div class="form-check">
                   <input class="form-check-input" type="checkbox" name="hidden">
                  
                   <label class="form-check-label" for="flexCheckChecked">
                    Copia Oculta
                   </label>
                </div>
            
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark mb-3">Salvar</button>
                </div>


                
            </form>

  
            </div>     
      
  
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">E-mail</th>
            <th scope="col">E-mail Oculto</th>
            <th scope="col">Controles</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach( $emails as $email): ?>
            <tr>
                <td><?= $email->getId();?></td>
                <td><?= $email->getEmail();?></td>
                <td><?php echo $hidden = $email->getHidden()===true? "Sim":"Não";?></td>
                <td>
                <span class="material-icons "><a href="/remover-email?id=<?= $email->getId();?>" class="text-dark">delete</a></span>
                </td> 
             
            </tr>

            <?php endforeach;?>
          <tr>
            
        
 
       </tbody>
    
  </table>

   

      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
