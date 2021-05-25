<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Tecnicos;

require __DIR__."/../../../vendor/autoload.php";


    class ControllerAlteracoesTecnico implements InterfaceRequest{
       
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
           $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
           $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
           $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
           $password2 = filter_input(INPUT_POST,'password2',FILTER_SANITIZE_STRING);
           $type= filter_input(INPUT_POST,'type',FILTER_SANITIZE_STRING);

           /**
            * @var Tecnicos update
            */
           $update = $this->repository->findOneBy(['id'=>$id]);

           if($password === $password2 || $password ===""){
          
            $update->setEmail($email);
            $update->setName($name);
            if($password ===""){
            $update->setPassword($update->getPassword());
            }else{
            $update->setPassword($password);
          }
            $update->setType($type);
            $this->entityManager->flush();
   
            $_SESSION['class'] = "success";
            $_SESSION['message'] = "Técnico alterado com sucesso";
          
            header('Location:/cadastro-tecnico');
            exit();
          }
         
          header("Location:/alterar-tecnico?id=$id");
          $_SESSION['class'] = "danger";
          $_SESSION['message'] = "Senhas não conferem";
         
        }


    }