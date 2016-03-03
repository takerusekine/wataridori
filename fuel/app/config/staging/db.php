<?php
/**
 * The staging database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
        'connection'  => array(
            'dsn'        => 'mysql:host=localhost;dbname=fuel_staging',
            'username'   => 'root',
            'password'   => 'root',
        ),
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'profiling' => true
    ),
);
