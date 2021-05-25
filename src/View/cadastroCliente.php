<?php require __DIR__."/htmlPainel/headCliente.php"; ?>

<div class="container-sm shadow-lg p-2 mb-3 bg-body rounded w-75 ml-5 h-auto mt-4 p-5">



    
  <form class="row g-3" action="/cadastrar-cliente" method="POST">

 <div class="col-5">
    <label class="form-label">Nome</label>
    <input type="text"name="name" class="form-control">
  </div>
  
  <div class="col-3">
    <label class="form-label">Telefone</label>
    <input type="text" name="telephone" class="form-control">
  </div>
  
 <div class="col-4">
    <label class="form-label">Empresa</label>
    <input type="text" name="company" class="form-control">
  </div>

  <div class="col-4">
    <label class="form-label">CPF/CNPJ</label>
    <input type="text" name="cpfCnpj" class="form-control">
  </div>
  
  <div class="col-5">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
  
  <div class="col-3">
    <label  class="form-label">Senha</label>
    <input type="password" name="password" class="form-control" >
  </div>
 
  <div class="col-3">
    <label  class="form-label">Confirmar Senha</label>
    <input type="password" name="passwordConfirm" class="form-control" >
  </div>
 
  <div class="col-6">
    <label class="form-label">Endereço</label>
    <input type="text" name="address" class="form-control">
  </div>

  <div class="col-3">
    <label class="form-label">Bairro</label>
    <input type="text" name="district" class="form-control">
  </div>

  <div class="col-3">
    <label  class="form-label">Cidade</label>
    <input type="text" name="city" class="form-control" >
  </div>
 
  <div class="col-3">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" name="state" class="form-select">
      <option selected>São Paulo (SP)</option>
      <option>Acre (AC)</option>
      <option>Alagoas (AL)</option>
      <option>Amapá (AP)</option>
      <option>Amazonas (AM)</option>
      <option>Bahia (BA)</option>
      <option>Ceará (CE)</option>
      <option>Distrito Federal (DF)</option>
      <option>Espírito Santo (ES)</option>
      <option>Goiás (GO)</option>
      <option>Maranhão (MA)</option>
      <option>Mato Grosso (MT)</option>
      <option>Mato Grosso do Sul (MS)</option>
      <option>Minas Gerais (MG)</option>
      <option>Pará (PA)</option>
      <option>Paraíba (PB)</option>
      <option>Paraná (PR)</option>
      <option>Pernambuco (PE)</option>
      <option>Piauí (PI)</option>
      <option>Rio de Janeiro (RJ)</option>
      <option>Rio Grande do Norte (RN)</option>
      <option>Rio Grande do Sul (RS)</option>
      <option>Rondônia (RO)</option>
      <option>Roraima (RR)</option>
      <option>Santa Catarina (SC)</option>
      <option>São Paulo (SP)</option>
      <option>Sergipe (SE)</option>
      <option>Tocantins (TO)</option>
    </select>
 
  </div>
 
  <div class="col-12">
  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Cadastrar</button>
    <a href="/login" class="btn btn-dark">Voltar</a>
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