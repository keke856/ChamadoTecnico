<?php

namespace Microstar\Controllers\Route;

use Doctrine\ORM\Query\Expr\From;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Clientes;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";
if(!isset($_SESSION)){
  session_start();
}


class ControllerPainelCliente implements InterfaceRequest {
use ControllerBgColor;
private $entityManager;
private $repositoryLogin;
   
public function __construct()
    {
      $this->entityManager = (new EntityManagerConnection)->getEntityManager();
      // $this->repositoryLogin= $this->entityManager->getRepository(Login::class);
    }

    public function processRequest(): void
    {
   
     
        /**
         * @var Login logins
         */

      $email = $_SESSION['email'];
  
         $class = Login::class;
         $dql ="SELECT l,c FROM $class l JOIN l.chamados c WHERE l.email ='$email' ORDER BY  c.id DESC ";
 
       $query =  $this->entityManager->createQuery($dql);
  

         $login = $query->getResult();

    
        require __DIR__."/../../View/painelCliente.php";
          
     
       
    }


}