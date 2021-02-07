<?php

return [
    "app_env" => "local", // Le fichier .env.{ce paramètre}.php vas être utilisé  comme config

    'db_driver' => 'mysql',
    
    "database" => [

        "mysql" => [
            'db_driver' => 'mysql',
            'db_host' => 'localhost',
            'db_port' => 3306,
            'db_name' => 'contacts',
            'db_user' => 'root',
            'db_password' => '',
        ],
    
    ]



];
