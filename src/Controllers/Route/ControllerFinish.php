<?php

namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Entity\Chamados;
use Microstar\Entity\Tecnicos;




require __DIR__."/../../../vendor/autoload.php";
class ControllerFinish implements InterfaceRequest{




    private $entityManager;
    private $repository;
    
      public function __construct()
      {
          $this->entityManager = (new  EntityManagerConnection())->getEntityManager();
          $this->repository = $this->entityManager->getRepository(Chamados::class);
          $this->tecnicos = $this->entityManager->getRepository(Tecnicos::class);
      }  
    
      public function processRequest(): void
      {
       
         $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
         $voltar = filter_input(INPUT_GET,'voltar',FILTER_SANITIZE_STRING);
        $chamado = $this->repository->findOneBy(['id'=>$id]);
       
         $tecnicos = $this->tecnicos->findAll();
    
        require __DIR__."/../../View/finalizarChamado.php";

       
    }


}