<?php

$env_file = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'env.php';
$default_config = require $env_file ;
$env_filename = "env.{$default_config["app_env"]}.php";
$env_filepath =  dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR .$env_filename;

if ($default_config["app_env"] === "local" ) {
    $configs = $default_config;
}else {
    try {
        $configs = require $env_filepath ;
    }catch (Exception $exception) {
        echo "[Exception] :".$exception->getMessage();
        echo $exception->getTraceAsString();
        echo "Le fichier $env_filename  n'exite pas";
        echo "Pour résoudre ce problème vous devez déplacé vos configs dans un fichier  $env_filename  ";
        exit();
    }
}


$db_type = $configs["db_driver"];
$config_mysql = $configs["database"][$db_type];

define('APP_NAME', "GESTION DE CONTACTS OpenSource PHP  ");
define('DB_DRIVER', $db_type);
define('DB_HOST', $config_mysql['db_host']);
define('DB_NAME', $config_mysql['db_name']);
define('DB_USER', $config_mysql['db_user']);
define('DB_PASSWORD', $config_mysql['db_password']);
define('DB_PORT', 3306);
define('DS', DIRECTORY_SEPARATOR);
define('APP_BASE_DIR', dirname(__DIR__));
define('APP_INCLUDES_DIR', dirname(__DIR__) . DS."app".DS."views".DS."includes");
define('APP_UPLOADS_DIR', dirname(__DIR__) . DS. "webroot".DS."uploads");
define('MAX_UPLOAD_FILE_SIZE', ini_get("upload_max_filesize"));

