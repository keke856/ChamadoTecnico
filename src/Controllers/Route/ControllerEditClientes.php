<?php
 namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";

class ControllerEditClientes implements InterfaceRequest{
  private $entityManager;
  private $repository;
    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
        $this->repository = $this->entityManager->getRepository(Login::class);
    }

     public function processRequest(): void
     {
         $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $update = $this->repository->findOneBy(['id'=>$id]);

        $cliente = $update->getClientes();

        
        
        require __DIR__."/../../View/alterarCliente.php";
     }
 }