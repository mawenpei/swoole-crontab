<?php

return [
    'source'=>'file',
    'file'=>realpath(__DIR__ . '/console.config.php'),
    'redbeanphp'=>realpath(__DIR__ . '/rb.php'),
    'mysql'=>[
        'host'=>'localhost',
        'port'=>'3306',
        'db'=>'module_user',
        'table'=>'config',
        'user'=>'root',
        'password'=>'111111'
    ]
];
