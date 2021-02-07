<?php
define("DS",DIRECTORY_SEPARATOR);
include dirname(dirname(__FILE__)) . DS . 'configs/app.php';
include APP_BASE_DIR . DS . 'functions' . DS . "db.php";
$db_dir = APP_BASE_DIR . DS . 'database';
$choice = "none";
do {
    echo "1-> Créer la base de données \n";
    echo "2-> Créer les tables \n";
    echo "3-> remplir les tables \n";
    echo "4-> Exécuter les scripts personnalisés \n";
    echo "0-> Quitter \n";
    $choice = (int) readline();
    switch ($choice) {
        case (1) : {
            echo "Creation de la base de données ... \n";
            $pdo = getPdoWithoutDb();
            $pdo->query("create database ".DB_NAME);
            echo "Creation termine \n";
            exit;
        }
        case (2) : {
            $pdo = getPdo();
            echo "Creation des tables ... \n";
            $dir = dirname(__DIR__).'/database/migrations';
            foreach ( scandir($dir)  as $file_name ){
                $file = "$dir/$file_name";
                if (  is_file($file) ) {
                    $pdo->exec(file_get_contents($file));
                    echo "Execution de $file_name \n" ;
                }
            }
            echo "Creation terminer \n";
            exit;
        }
        case (3) : {
            $pdo = getPdo();
            echo "Remplissage... \n";
            $dir = dirname(__DIR__).'/database/seeds';
            foreach ( scandir($dir)  as $file_name ){
                $file = "$dir/$file_name";
                if (  is_file($file) AND !empty(file_get_contents($file)) ) {
                    $pdo->exec(file_get_contents($file));
                    echo "Execution de $file_name \n" ;
                }
            }
            echo "Remplissage terminer \n";
            exit;
        }
        case (4) : {
            $pdo = getPdo();
            echo "Execution... \n";
            $dir = dirname(__DIR__).'/database/scripts';
            foreach ( scandir($dir)  as $file_name ){
                $file = "$dir/$file_name";
                if (  is_file($file) ) {
                    $pdo->exec(file_get_contents($file));
                    echo "Execution de $file_name \n" ;
                }
            }
            echo "Execution terminer \n";
            exit;
        }
        case (0) : {
            echo "Fermeture de la console ... \n";
            exit();
        }
        default : {
            echo "Vous devez faire un choix pour continuer";
        }
    }
} while ( !in_array($choice,[1,2,3,4]) );
