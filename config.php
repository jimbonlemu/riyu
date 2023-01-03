<?php

return [
    'app' => [
        // if debug you can see the error
        'debug' => true,
        // if safety you can see all error
        'safety' => true,
        'name' => 'Riyu',
        'url' => 'http://localhost/riyu',
        'timezone' => 'Asia/Jakarta',
        'locale' => 'id_ID.utf8',
    ],

    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'riyu',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',

        // if you want to use PDO options you can uncomment this
        // and set your options
        //
        // 'options' => [
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        //     PDO::ATTR_EMULATE_PREPARES => false,
        // ],
    ],

    "directory" => __DIR__,

    "view" => [
        "path" => __DIR__ . "/../resources/views/",
    ],

    "path" => __DIR__ . "/"
];