<?php
namespace Microstar\Controllers\Route;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";

class ControllerAlterarTecnico implements InterfaceRequest{

    private $entityManager;
    private $repository;

      public function __construct()
      {
          $this->entityManager = (new EntityManagerConnection())->getEntityManager();
          $this->repository = $this->entityManager->getRepository(Tecnicos::class);

      }

    public function processRequest(): void
    {
       $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $update = $this->repository->findOneBy(['id'=>$id]);

        

        require  __DIR__."/../../View/alterarTecnico.php";
    }




}