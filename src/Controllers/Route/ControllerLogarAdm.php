<?php
namespace Microstar\Controllers\Route;

use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequestAdm;
use Microstar\Controllers\Route\ControllerValidationLoginAdm;
use Microstar\Entity\Tecnicos;
require __DIR__."/../../../vendor/autoload.php";

class ControllerLogarAdm extends ControllerValidationLoginAdm implements InterfaceRequest {
   
   
    protected $entityManager;
    protected $repository;
       
      public function __construct()
        {
            $this->entityManager = (new EntityManagerConnection())->getEntityManager();
            $this->repository = $this->entityManager->getRepository(Tecnicos::class);

        }

        public function processRequest(): void
        {
            $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

              $this->validation($email,$password);
            


                
        }


}