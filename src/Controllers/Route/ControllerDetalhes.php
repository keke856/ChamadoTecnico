<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";

class ControllerDetalhes implements InterfaceRequest{
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
    $chamado = $this->repository->findOneBy(['id'=>$id]);
   
    // $tecnicos = $this->tecnicos->findAll();

  
     require __DIR__."/../../View/detalhes.php";
      
   
   


}


}