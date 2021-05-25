<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest  as InstructionsInterfaceRequest;
use Microstar\Entity\Clientes;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";

class ControllerCadastrarCliente implements InstructionsInterfaceRequest{
  private $entityManger;
  private $repository;

  public function __construct()
  {
     $this->entityManger = (new EntityManagerConnection())->getEntityManager();
     $this->repository = $this->entityManger->getRepository(Login::class);
  }
    
  public function processRequest(): void
  {
  $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
  $telephone= filter_input(INPUT_POST,'telephone',FILTER_SANITIZE_STRING);
  $company =   filter_input(INPUT_POST,'company',FILTER_SANITIZE_STRING);
  $cpfCnpj =   filter_input(INPUT_POST,'cpfCnpj',FILTER_SANITIZE_STRING);
  $email =   filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
  $password =  filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
  $passwordConfirm = filter_input(INPUT_POST,'passwordConfirm',FILTER_SANITIZE_STRING);
  $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
  $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
  $district = filter_input(INPUT_POST,'district',FILTER_SANITIZE_STRING);
  $state = filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING);

 if($this->repository->findOneBy(['email'=>$email])){
   $_SESSION['class'] = "danger";
   $_SESSION['message'] = "Esse email já está sendo ultilizado";
  
   header('Location:/login');
   exit();
 }
 
  
  if($password ===$passwordConfirm){

 
  $login = new Login();

  $login->setName($name);
  $login->setEmail($email);
  $login->setPassword($password);

  $clientes = new Clientes();
  
  $clientes->setTelephone($telephone);
  $clientes->setCompany($company);
  $clientes->setCpfCnpj($cpfCnpj);
  $clientes->setAddress($address);
  $clientes->setDistrict($district);
  $clientes->setCity($city);
  $clientes->setState($state);
  $login->setClientes($clientes);
  $clientes->setLogin($login);
 
   
   $this->entityManger->persist($login);
   $this->entityManger->flush();

   
   $_SESSION['class'] = "success";
   $_SESSION['message'] = "Cadastro Realizado com sucesso";


  header('Location:/login');

  }else{
    $_SESSION['class'] = "danger";
    $_SESSION['message'] = "Senhas não conferem";
 
 
   header('Location:/login');
  }



  
  }



}