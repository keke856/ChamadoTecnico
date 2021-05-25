<?php
namespace Microstar\Controllers\Route;

use Doctrine\ORM\EntityManager;
use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Clientes;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";
class ControllerEditarCliente implements InterfaceRequest{
    
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
       
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST,'password2',FILTER_SANITIZE_STRING);
        $company = filter_input(INPUT_POST,'company',FILTER_SANITIZE_STRING);
        $cpfcnpj = filter_input(INPUT_POST,'cpfcnpj',FILTER_SANITIZE_STRING);
        $state = filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
        $district = filter_input(INPUT_POST,'district',FILTER_SANITIZE_STRING);
        $telephone = filter_input(INPUT_POST,'telephone',FILTER_SANITIZE_STRING);

      
     

      if($password ===$password2 || $password===""){
       $cliente = $update->getClientes();
      
       $update->setName("$name"); 
       $update->setEmail("$email");
       if($password===""){
        $password = $update->getPassword();
        $update->setPassword("$password");
       }else{
       $update->setPassword("$password");
    }
       $cliente->setCompany("$company");
       $cliente->setCpfCnpj(" $cpfcnpj");
       $cliente->setState("$state");
       $cliente->setCity("$city");
       $cliente->setDistrict("$district");
       $cliente->setTelephone("$telephone");

        $_SESSION['class'] ="success";
        $_SESSION['message'] = "Usuário alterado com sucesso";
       
        $this->entityManager->flush();

        header('Location:/list-clientes');

        exit();

    }

    $_SESSION['class'] ="danger";
    $_SESSION['message'] = "Senhas não conferem";
    header("Location:/edit-cliente?id=$id");
      

    }












}