<?php
namespace Microstar\Controllers\Route;

session_start();


 abstract class ControllerValidationLoginAdm {

  
      public function validation($email,$password)
      {
        $login = $this->repository->findOneBy(['email'=>$email]);
      
        if(!is_null($login)){

         if($email === $login->getEmail() && $password === $login->getPassword()){
          
              $_SESSION['type']= $login->getType();
              $_SESSION['logadoAdm'] = true;
              $_SESSION['idAdm'] = $login->getId();
              $_SESSION['usuario'] = $login->getName();
            
            return  header('Location: /painel-tecnico');   
         }

        }
            $_SESSION['class']= "danger";
            $_SESSION['message']="Email ou Senha Inválida";
          
            header('Location: /loginAdm');
      }
       




}