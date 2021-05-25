<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";

class ControllerClienteDelete implements InterfaceRequest{
    
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
        $cliente = $this->repository->findOneBy(['id'=>$id]);
        

        $this->entityManager->remove($cliente);
        $this->entityManager->flush();
        
        $_SERVER['class'] = "success";
        $_SERVER['messager'] = "Cliente removido com sucesso";
       
       header('Location: /list-clientes');
      
    }


}