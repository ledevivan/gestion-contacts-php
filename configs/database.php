<?php
/* Databases configs set By Environments variables */
define("DATABASE_URL", parse_url(getenv('DATABASE_URL')));

return [
    /* *****************************
    * All Databases Configs params
    * ******************************** */

    /* *****************************
    * local Mysql Database configs
    *  ******************************** */
    "local" => [
        'db_driver' => 'mysql',
        'db_host' => 'localhost',
        'db_port' => 3306,
        'db_name' => 'contacts',
        'db_user' => 'root',
        'db_password' => '',
    ],

    /* *****************************
    * online Mysql Database configs set using database Values
    * *********************************/
    "prod_mysql" => [
        'db_driver' => 'mysql',
        'db_host' => getenv("DB_HOST") ?? 'online_host',
        'db_port' => getenv("DB_PORT") ??  3306,
        'db_name' => getenv("DB_DATABASE") ??  'online_db_name',
        'db_user' => getenv("DB_USERNAME") ?? 'online_db_user',
        'db_password' => getenv("DB_PASSWORD") ??  'online_db_password',
    ],

    /* *****************************
    * online Mysql Database configs set using database URL
    * ******************************** */
    "prod_mysql_by_url" => !empty(DATABASE_URL['host']) ? [
        'db_driver' => !empty(DATABASE_URL['host']) ? 'pgsql' : null,
        'db_host' => DATABASE_URL["host"],
        'db_port' => DATABASE_URL["port"],
        'db_name' => ltrim(DATABASE_URL["path"], '/'),
        'db_user' => DATABASE_URL["user"],
        'db_password' => DATABASE_URL["pass"],
    ] : null


];
