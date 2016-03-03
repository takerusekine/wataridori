<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
		'type' => 'pdo',
        'connection'  => array(
            'dsn'        => 'mysql:host=localhost;dbname=wataridori_dev',
//unix_socketを指定',
            'username'   => 'root',
            'password'   => 'root',
        ),
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'profiling' => true

    ),
);
