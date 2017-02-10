<?php

return array(
    'propel' => array(
        'database' => array(
            'connections' => array(
                'default' => array(
                    'adapter'    => 'mysql',
                    'classname'  => 'Propel\Runtime\Connection\DebugPDO',
                    'dsn'        => 'mysql:host=192.168.18.171:3308;dbname=wordpress',
                    'user'       => 'jmao',
                    'password'   => 'uy288a',
                    'attributes' => array()
                ),
            )
        ),
        'runtime' => array(
            'defaultConnection' => 'default',
            'connections' => array('default')
        ),
        'generator' => array(
            'defaultConnection' => 'default',
            'connections' => array('default'),
        ),
        'paths' => array(
            'schemaDir' => 'config',
            'phpDir' => 'model',
        ),
    )
);