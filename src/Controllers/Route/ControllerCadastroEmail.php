<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Email;

require __DIR__."/../../../vendor/autoload.php";

class ControllerCadastroEmail implements InterfaceRequest{

    private $entityManager;
    private $repository;
       public function __construct()
       {
          $this->entityManager = (new EntityManagerConnection())->getEntityManager();
          $this->repository = $this->entityManager->getRepository(Email::class);
       }

        public function processRequest(): void
        {

            $emails = $this->repository->findAll();

            require __DIR__."/../../View/CadastroEmail.php";
        }



}