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
        
        
        
        <form class="row " method="POST" action="/attendance?id=<?= $chamado->getId();?>&attendance=<?=$tecnicos?>&email=<?= $email?>&company=<?=$company?>&finish=true">
                
                <input type="text" class="form-control text-secondary" value="<?= $chamado->getId();?>" name="id" id="inputEmail4" hidden>
                     
                 <span class="text-secondary">    <strong> EMPRESA:</strong> <?= $company ?></span>
             
                 <span class="text-secondary"></br><strong> NOME:</strong>      <?=$chamado->getName();?></br></span>

                 <span class="text-secondary"></br> <strong>TELEFONE:</strong>  <?= $telephone;?></br></span>

                 <span class="text-secondary"></br> <strong>TELEFONE:</strong>  <?= $chamado->getTelephone();?></br></span>

                 <span class="text-secondary"></br> <strong>Prioridade:</strong>  <?= $chamado->getPriority();?></br></span>
     
                 <span  class="text-secondary"></br><strong> EMAIL:</strong> <?= $email?></span>


        </div>
      
  <div class="col">
 
        <div class="col-lg-5 mb-3 ">
          Status: <select id="inputState" class="form-select" name="position">
            <option selected><?= $chamado->getStatus();?></option>
            <option>Visita Técnica</option>
            <option>Concluido</option>
          </select>
      </div>
      
      <!-- RESULTADO DO OPERADOR TERNARIO -->
      <span class="text-secondary"><strong>Técnico:</strong> <?=$tecnicos;?> </span> <br> 

      <img class="mt-2 btn" data-bs-toggle="modal" data-bs-target="#exampleModal" src="image/<?=$chamado->getImages()?>" width="150px" height="150px">
        
  </div>
</div>
    
    
  
    <hr>
            
                      
    <div class="col-13 mt-3">               
       <label for="exampleFormControlInput1" class="form-label">Descrição</label>
       <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="5" > <?= $chamado->getDescriptions()?></textarea>
    </div>

    <div class="col-13 mt-3">               
       <label for="exampleFormControlInput1" class="form-label">Conclusão</label>
       <textarea class="form-control" name="conclude" id="exampleFormControlTextarea1" rows="5" ><?= $chamado->getConcluded()?></textarea>
    </div>
            
    
   <div class="col-12 mt-3">

      
          <button type="submit" class="btn btn-primary">Salvar</button>
    
      <?php if($chamado->getStatus() !== 'Aguardando' && $chamado->getStatus() !== 'Atendimento'): ?>
            <a href="/envioEmail" class="btn btn-primary">
              Envio de Email
            </a>
      <?php endif;?>
          
            <a href="<?=$voltar?>" class="btn btn-primary">Voltar</a>
      </div>
         
         
          </form>
      </div>     
  </div>
  
 
</div>
    
    
<?php require __DIR__."/../View/htmlPainel/footer.php";  ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="3" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imagem</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img class="mt-2 "  src="image/<?=$chamado->getImages()?>" width="600px" height="450px">
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
    

