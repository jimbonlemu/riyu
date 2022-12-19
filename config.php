<?php

return [
    'app' => [
        'debug' => false,
        'name' => 'Riyu',
        'url' => 'http://localhost/framework',
        'timezone' => 'Asia/Jakarta',
        'locale' => 'id_ID.utf8',
    ],

    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'db_new_presensi',
        'username' => 'lutfisobri',
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
];