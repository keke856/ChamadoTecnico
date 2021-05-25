<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";

class ControllerRemoverTecnico implements InterfaceRequest{
   
    private $entityManager;
    private $repository;

    public function __construct()
   {
      $this->entityManager = (new EntityManagerConnection())->getEntityManager();     
   }

   public function processRequest(): void
   {
           $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
          $tecnico = $this->entityManager->getReference(Tecnicos::class,$id);

          $this->entityManager->remove($tecnico);
          $this->entityManager->flush();

          header('Location:/cadastro-tecnico');
   }

}