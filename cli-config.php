<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Microstar\Connection\EntityManagerConnection;


require_once __DIR__."/vendor/autoload.php";

$entityManagerConnection = new EntityManagerConnection();
$entityManager = $entityManagerConnection->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);