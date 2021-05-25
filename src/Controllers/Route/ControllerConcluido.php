<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Controllers\Route\ControllerBgColor;
use Microstar\Entity\Chamados;
use Microstar\Entity\Login;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";
if(!isset($_SESSION)){
    session_start();
}




class ControllerConcluido implements InterfaceRequest {
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
            $dql = "SELECT l,c FROM $class l JOIN l.chamados c WHERE  c.status = 'Concluido' AND c.tecnicos= '$usuario' ORDER BY c.id DESC";
         }else{
            $dql = "SELECT l,c FROM $class l JOIN l.chamados c WHERE  c.status = 'Concluido'ORDER BY c.id DESC";
         }
        
         $query = $this->entityManager->createQuery($dql);
         
         /**
          * @var Login $login
          */
        $login =  $query->getResult();
       
       $tecnicos = $this->repository->findAll();

       $h1 = "Concluidos";
       $this->bgColor("Concluido");
     
       require __DIR__."/../../View/panelFinish.php";
}





}







    






















?>