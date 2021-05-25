
<?php


  session_start();

   $path = require __DIR__."/../config-route/configAdm.php";


     $existe = stripos($url,'loginAdm');

   if(!isset($_SESSION['logadoAdm']) && $existe ===false ){
      header('Location:/loginAdm'); 
    }

     $controlador = $path[$url];
   /** @var InterfaceControladorRequisicao $class */
      $class = new $controlador();
     $class->processRequest();

      