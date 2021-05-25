<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Email;
use Microstar\Entity\Tecnicos;
//session_start();
require __DIR__."/../../../vendor/autoload.php";

class ControllerAttendance  extends ControllerEmail implements InterfaceRequest {

private $entityManager;
private $repository;
private $repositoryEmail;
  
  public function __construct()
  {
      $this->entityManager = (new EntityManagerConnection())->getEntityManager();
     $this->repository = $this->entityManager->getRepository(Chamados::class);
     $this->repositoryEmail = $this->entityManager->getRepository(Email::class);
  }


   public function processRequest(): void
   {
       $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
        /**
         * @var Chamados chamados
         */
        $chamado =$this->repository->find($id);
        $emails = $this->repositoryEmail->findAll();

          $attendance = filter_input(INPUT_GET,'attendance',FILTER_SANITIZE_STRING); 
          $finish = filter_input(INPUT_GET,'finish',FILTER_VALIDATE_BOOL); 
          $company = filter_input(INPUT_GET,'company',FILTER_SANITIZE_STRING);  
          $email= filter_input(INPUT_GET,'email',FILTER_SANITIZE_STRING);   
          $position = filter_input(INPUT_POST,'position',FILTER_SANITIZE_STRING);
          $concluded = filter_input(INPUT_POST,'conclude',FILTER_SANITIZE_STRING);
          $obs = filter_input(INPUT_POST,'obs',FILTER_SANITIZE_STRING);
        
        $chamado->setTecnicos($attendance);
        $chamado->setStatus($position);
       
        if($finish){
         $chamado->setConcluded($concluded);
     
      
       $info = ['attendance'=>$attendance,'position'=>$position,'concluded'=>$concluded,'obs'=>$obs,'email'=>$email,'company'=>$company];

           echo  $this->EnviarEmail($info,$emails);
        }
       
       // $this->entityManager->flush();

     //  header('Location:/atendimento') ;
        
       
   }



}