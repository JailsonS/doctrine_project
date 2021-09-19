<?php   
namespace Src\Infraestructure\Database;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class EntityManagerFactory
{

    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../../..';
        $isDevMode = true;

        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            $isDevMode
        );

        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/src/Infraestructure/var/banco.sqlite'
        ];

        return EntityManager::create($connection, $config);
    }
}