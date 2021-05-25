<?php
namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest;

require __DIR__."/../../../vendor/autoload.php";

class ControllerNovoChamado implements InterfaceRequest{

 public function processRequest(): void
 {
     require __DIR__."/../../View/novoChamado.php";
 }



}