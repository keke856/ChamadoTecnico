<?php

namespace Microstar\Connection;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

require __DIR__."/../../vendor/autoload.php";

class EntityManagerConnection
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src/Entity'],
            true
        );
     
        $conn = array(
         
          'driver' => 'pdo_mysql',  
          'host'     => 'localhost',
          'port'     => '3306',
          'user'     => 'root',
          'password' => '123456',
          'dbname'   => 'chamado',
         );

        return EntityManager::create($conn, $config);
    }
}