<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Controllers\instructions\InterfaceRequestAdm;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";
class ControllerCadastrarTecnico implements InterfaceRequest {
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
      
    }

    public function processRequest(): void
    {
         $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
         $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
         $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
         $passwordConfirm = filter_input(INPUT_POST,'passwordConfirm',FILTER_SANITIZE_STRING);
         $type = filter_input(INPUT_POST,'type',FILTER_SANITIZE_STRING);
    
if($name ===""|| $email==="" && $password===""||$passwordConfirm==="" && $type===""){
      $_SESSION['class'] = "danger";
      $_SESSION['message'] = "Campos estão vazios";

      header('Location: /cadastro-tecnico');
    exit();
    }

      if($password ===$passwordConfirm){
          $tecnico = new Tecnicos();
          $tecnico->setName($name);
          $tecnico->setEmail($email);
          $tecnico->setPassword($password);
          $tecnico->setType($type);
         
          $this->entityManager->persist($tecnico);
          $this->entityManager->flush();

          $_SESSION['class'] ="success";
          $_SESSION['message'] = " Técnico cadastrado com sucesso";

          header('Location: /cadastro-tecnico');
          exit();

        }else{
            $_SESSION['class'] ="danger";
            $_SESSION['message'] = "Senhas não conferem";
   
          header('Location: /cadastro-tecnico');
        }

         

    }

}