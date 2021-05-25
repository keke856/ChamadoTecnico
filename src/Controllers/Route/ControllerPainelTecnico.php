<?php
namespace Microstar\Controllers\Route;

use Doctrine\ORM\Query\Expr\From;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Clientes;
use Microstar\Entity\Login;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";

class ControllerPainelTecnico implements InterfaceRequest{

  use ControllerBgColor;
private $entityManager;
private $repository;
    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
        $this->repository = $this->entityManager->getRepository(Chamados::class);
    }
 
    public function processRequest():void
    {
     $search = filter_input(INPUT_POST,'search',FILTER_SANITIZE_STRING);
  
     $class = Login::class;
     $dql = "SELECT l,c FROM $class l JOIN l.chamados c WHERE c.status = 'Aguardando' ";
     $query = $this->entityManager->createQuery($dql);
  
    /**
      * @Login $login
      */

     $login =  $query->getResult();
   

    

   $h1 = "Aguardando";
     
   require __DIR__."/../../View/painelTecnico.php";
   
       
    }



}