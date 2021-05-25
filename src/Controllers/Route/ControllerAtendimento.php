<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Login;
use Microstar\Entity\Tecnicos;
use Microstar\Controllers\Route\ControllerBgColor;

require __DIR__."/../../../vendor/autoload.php";
if(!isset($_SESSION)){
    session_start();
}


class ControllerAtendimento implements InterfaceRequest{

use ControllerBgColor;
    private $entityManager;
    private $repository;
        public function __construct()
        {
            $this->entityManager = (new EntityManagerConnection())->getEntityManager();
            $this->repository = $this->entityManager->getRepository(Tecnicos::class);
        }
     
        public function processRequest(): void
        {
    
       
     $usuario= $_SESSION['usuario'];
       
        $class = Login::class;
       
       
        if($_SESSION['type']==='user'){
         $dql = "SELECT l,c FROM $class l JOIN l.chamados c WHERE  c.status = 'Atendimento' AND c.tecnicos= '$usuario' ";
        }else{
            $dql = "SELECT l,c FROM $class l JOIN l.chamados c WHERE  c.status = 'Atendimento'";
        }
         $query = $this->entityManager->createQuery($dql);
         
         /**
          * @var Login $login
          */
       $login =  $query->getResult();
       
       $tecnicos = $this->repository->findAll();

       $h1 = "Atendimento";
       $this->bgColor("Atendimento");
         
       require __DIR__."/../../View/panelFinish.php";
      
}

}