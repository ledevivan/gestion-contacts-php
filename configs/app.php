<?php
/**
 * @var $db_configs array of all application database config
 */
$db_configs = require "database.php";

/**
 * @var $db_config array of database configs use in application
 */

$db_config = !empty(getenv("DB_HOST")) ? $db_configs["prod_mysql"] : $db_configs["local"];
// $db_config =  $db_configs["prod_pgsql"]; // To set MySql online configs

define('APP_NAME', "WEBCONTACTS :: GESTION DE CONTACTS  ");
define('DB_DRIVER', $db_config['db_driver']);
define('DB_HOST', $db_config['db_host']);
define('DB_NAME', $db_config['db_name']);
define('DB_USER', $db_config['db_user']);
define('DB_PASSWORD', $db_config['db_password']);
define('DB_PORT', 3306);
define('APP_BASE_DIR', dirname(__DIR__));
define('APP_INCLUDES_DIR', dirname(__DIR__) . "/app/views/includes");
define('MAX_UPLOAD_FILE_SIZE', 1953125);

