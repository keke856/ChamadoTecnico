<?php

namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest;

require __DIR__."/../../../vendor/autoload.php";

class ControllerLogout implements InterfaceRequest{

   public function processRequest(): void
   {
      if(isset($_SESSION['cliente'])){
        session_unset();
        header('Location: /login');
      }else{
          session_unset();
          header('Location: /loginAdm');
      }

      
     
   }


}