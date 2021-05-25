<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";

class ControllerLogar extends ControllervalidationLogin implements InterfaceRequest {

protected $entityManager;
protected $repositoryLogin;

   public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
        $this->repositoryLogin = $this->entityManager->getRepository(Login::class);
    }

    public function processRequest():void
    {
 
     $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
     $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

     $this->validation($email,$password);


 


        
      


    
 


    }








}