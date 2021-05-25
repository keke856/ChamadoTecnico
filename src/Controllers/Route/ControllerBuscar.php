<?php
namespace Microstar\Controllers\Route;

use Microstar\Connection\EntityManagerConnection;
use Microstar\Controllers\instructions\InterfaceRequest;
use Microstar\Entity\Chamados;
use Microstar\Entity\Login;

require __DIR__."/../../../vendor/autoload.php";
class ControllerBuscar implements InterfaceRequest{

use ControllerBgColor;
private $entityManager;
private $repository;
    public function __construct()
    {
        $this->entityManager = (new EntityManagerConnection())->getEntityManager();
        $this->repository = $this->entityManager->getRepository(Chamados::class);
    }

   public function processRequest(): void
   {
 /*   $qb = $this->entityManager->createQueryBuilder();
    
    $qb->select('l') 
                ->from('Microstar\\Entity\\Login', 'l') 
                ->innerJoin('Microstar\\Entity\\Chamados', 'c') 
                ->innerJoin('Microstar\\Entity\\Clientes', 'cl')
                ->where(
                    $qb->expr()->like('cl.company','')
                );
               $login = $qb->getQuery()->getResult();
                */

                $search = filter_input(INPUT_POST,'search',FILTER_SANITIZE_STRING);

                $class = Login::class;
                $dql = "SELECT l,c FROM $class l JOIN l.chamados c JOIN l.clientes  cl  WITH cl.company LIKE :foo ORDER BY c.id DESC";
                $query = $this->entityManager->createQuery($dql);
        
                $query->setParameter('foo', "%$search%");
                $login =  $query->getResult();
    
  $h1 = " Resultado da Busca...";
    require __DIR__."/../../View/painelTecnico.php";
    }

   
     
   }
   





