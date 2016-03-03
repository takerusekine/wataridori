<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(

'development' => array(
    'type'           => 'mysqli',
    'connection'     => array(
        'hostname'       => 'localhost',
        'port'           => '8000',
        'database'       => 'fuel_db',
        'username'       => 'root',
        'password'       => 'root',
        'persistent'     => false,
        'compress'       => false,
    ),
    'identifier'   => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'collation'      => 'utf8_general_ci',
    'enable_cache'   => true,
    'profiling'      => true,
),
);
