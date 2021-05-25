<?php

namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Login;

class ControllerListClientes implements InterfaceRequest{
    private $entityManeger;
    private $repository;


    public function __construct()
    {
        $this->entityManeger = (new EntityManagerConnection())->getEntityManager();
       // $this->repository = $this->entityManeger->getRepository(Clientes::class);
    }

    public function processRequest(): void
    {
       
     

        $class = Login::class;
        $dql = "SELECT l,c FROM $class l JOIN l.chamados c JOIN l.clientes cl ";
        $query = $this->entityManeger->createQuery($dql);  
        $info = $query->getResult();

  
     
       require __DIR__."/../../View/listClientes.php";

    }


}


?>