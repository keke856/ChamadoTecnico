<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Email;

require __DIR__."/../../../vendor/autoload.php";

class ControllerCadastrarEmail implements InterfaceRequest{
   private $entityManager;

   public function __construct()
   {
      $this->entityManager = (new EntityManagerConnection())->getEntityManager();
      $this->repository = $this->entityManager->getRepository(Email::class);
   }

   public function processRequest(): void
   {
   $emailEnv = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
   $hidden =  filter_input(INPUT_POST,'hidden',FILTER_VALIDATE_BOOLEAN);

    $email = new Email();

    $email->setEmail($emailEnv);
    
   
    is_null($hidden)? $email->setHidden(false): $email->setHidden($hidden);
   
   
    $this->entityManager->persist($email);
    $this->entityManager->flush();

    header('Location:/cadastro-email');

   
   }

}