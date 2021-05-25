<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Login;


require __DIR__."/../../../vendor/autoload.php";

if(!isset($_SESSION)){
    session_start();
}


class ControllerSolicitarChamado implements InterfaceRequest{

   private  $entityManager;
   private $repositoryClientes;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
        $this->repositoryClientes= $this->entityManager->getRepository(Login::class);
    }

    public function processRequest(): void
    {
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $telephone = filter_input(INPUT_POST,'telephone',FILTER_SANITIZE_STRING);
       $image = $_FILES['file'] ?? null;
        $priority =  filter_input(INPUT_POST,'priority',FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);


        $pathTmp = $image['tmp_name'];
        $path = "image/";
        $extension= pathinfo($image['name'],PATHINFO_EXTENSION);
        $existExtension = ['png','jpg','jpeg','JPEG'];
      

       if($name === "" || $telephone ==="" || $description===""){
           $_SESSION['message'] = "Preencha os campos corretamente.";
           $_SESSION['class'] = "danger";
          
           header('Location:/novo-chamado');
           exit();
       }

       $id = $_SESSION['id'];
 /**
  * @var Login login
  */
  
    $login =  $this->repositoryClientes->find($id);
    
    if(in_array($extension, $existExtension)){
        move_uploaded_file($pathTmp,$path.$image['name']);
        
     }

     $chamados = new Chamados();
   
     $login->addChamado($chamados);


    $chamados->setName($name);
    $chamados->setTelephone($telephone);
    $images = "";
    $images = $image['name'];
    $chamados->setImages($images);
    date_default_timezone_set("America/Sao_Paulo");
    $chamados->setData(date("d/m/Y H:i"));
    $chamados->setPriority($priority);
    $chamados->setStatus("Aguardando");
    $chamados->setDescriptions($description);
    $chamados->setTecnicos("");
    $chamados->setConcluded('');
    

    $this->entityManager->flush();

    $_SESSION['message'] = "Chamado enviado com sucesso.";
     $_SESSION['class'] = "success";
  
     header('Location:/painel-cliente');
    
     
    


}
}