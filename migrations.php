<?php  

return [
    'table_storage' => [
        'table_name' => 'log',
        'version_column_name' => 'version',
        'version_column_length' => 1024,
        'executed_at_column_name' => 'executed_at',
        'execution_time_column_name' => 'execution_time',
    ],

    'migrations_paths' => [
        'Src\Infraestructure\Database\Migrations' => '/src/Infraestructure/Database/Migrations',
        'Src\Infraestructure\Database\Migrations' => './src/Infraestructure/Database/Migrations',
    ],

    'all_or_nothing' => true
];