<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;

require __DIR__."/../../../vendor/autoload.php";

session_start();
 abstract class ControllervalidationLogin{

   
    public function validation($email,$password)
    {
        $login =   $this->repositoryLogin->findOneBy(['email'=>$email]);
      
        if(!is_null($login)){
        $_SESSION['email'] = $login->getEmail();
        $_SESSION['password'] = $login->getPassword();
        $_SESSION['id'] = $login->getId();
     
        $cliente = $login->getClientes();
    }
      
        if($login == true && $_SESSION['password'] === $password){
            header("Location:/painel-cliente?company={$cliente->getCompany()}");
            $_SESSION['logar'] = true;
            $_SESSION['cliente'] = $login->getName();
          
            
        }else{
            $_SESSION['class'] = "danger";
            $_SESSION['message'] = "Senha ou Email Inválidos";
            header("Location:/login");

        }

    }





}