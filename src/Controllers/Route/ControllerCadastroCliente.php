<?php

namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest ;

class ControllerCadastroCliente implements InterfaceRequest{

  public function processRequest(): void
  {
      require __DIR__."/../../View/cadastroCliente.php";
  }


}