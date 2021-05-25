<?php

 namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Email;

require __DIR__."/../../../vendor/autoload.php";

class ControllerRemoverEmail implements InterfaceRequest{
   private $entityManager;
   
    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
    }

    public function processRequest(): void
    {

        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

       $email = $this->entityManager->getReference(Email::class,$id);

       $this->entityManager->remove($email);
       $this->entityManager->flush();

       header('Location: /cadastro-email');
    }



}