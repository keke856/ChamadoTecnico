<?php
namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";
class ControllerTecnico implements InterfaceRequest{
         
    private $entityManager;
    private $repository;

      public function __construct()
      {
          $this->entityManager = (new EntityManagerConnection())->getEntityManager();
          $this->repository = $this->entityManager->getRepository(Tecnicos::class);

      }

    public function processRequest(): void
    {
          
           $tecnicos = $this->repository->findAll();

           
        require __DIR__."/../../View/cadastroTecnico.php";


    }


}