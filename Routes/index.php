
<?php

  session_start();

   $path = require __DIR__."/../config-route/config.php";
   

     $login = stripos($url,'/login');
     $cadastro = stripos($url,'/cadastro-cliente');

     if(!isset($_SESSION['logar']) && $login ===false && $cadastro ===false){
      header('Location:/login'); 
    }

     $controlador = $path[$url];
   /** @var InterfaceControladorRequisicao $class */
      $class = new $controlador();
     $class->processRequest();

      

 
    

    

    
    
       
      

    

   
  

    
  
  
  