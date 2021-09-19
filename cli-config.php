
<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Src\Infraestructure\Database\EntityManagerFactory;

// replace with file to your own project bootstrap
require_once __DIR__ . '/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$emFactory = new EntityManagerFactory();
$em = $emFactory->getEntityManager();

return ConsoleRunner::createHelperSet($em);