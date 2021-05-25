<?php

require __DIR__."/htmlPainel/head.php";  
  

?>
<div class="container shadow-lg p-3 mb-5 bg-body rounded mt-5">

    <div class="row ml-5">  
      <div class="col-2">     
          
        </div> 
      
      
     <div class="col">     
          
      
        <table class="table table-borderless ">
          <tbody>
            <tr>
              <th scope="col">Empresa</th>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col">Telefone</th>
              <th scope="col">Técnico</th>
              <th scope="col">Posição</th>
              <th scope="col">Urgencia</th>
              <th scope="col">Data</th>
              
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td ><?= $company;?></td>
              <td><?=$chamado->getName();?></td>
              <td><?= $telephone;?></td>
              <td><?=$chamado->getTelephone();?></td>
              <td><?=$chamado->getTecnicos();?></td>
              <td><?=$chamado->getStatus();?></td>
              <td><?=$chamado->getPriority();?></td>
              <td ><?=$chamado->getData();?></td>
            </tr>
            <tr>
          </tbody>
        </table>
    
      </div> 
 
 
      <div class="col-2">     
         
        </div> 


    </div>    
      
        
    <hr>

      
       <div class="mb-3">
         <label class="form-label">Descrição</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" ><?=$chamado->getDescriptions();?></textarea>
       </div>

         
       <div class="mb-3">
         <label class="form-label">Conclusão</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" ><?=$chamado->getConcluded();?></textarea>
       </div>
       
  <a href="<?=$_SERVER['HTTP_REFERER']?>" type="button" class="btn btn-primary"> Voltar</a>

</div>
<?php require __DIR__."/../View/htmlPainel/footer.php";    
    
    

