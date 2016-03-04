<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/4
 * @time: 10:29
 */

return [
    'crontab'=>[
        [
            'taskname'=>'php',
            'rule'=>'*/5 * * * * *',
            'unique'=>2,
            'execute'=>'\\PHPKit\\Console\\Tasks\\EchoTask',
            'args'=>[
                'cmd'=>'php -v',
                'ext'=>[]
            ]
        ]
    ],
    'daemon'=>[
        ['className'=>'\\PHPKit\\Console\\Workers\\PushMessageWorker','processNum'=>'5','queue'=>[
            'host'=>'127.0.0.1','port'=>'11300','tube'=>'testtube'
        ]]
    ]
];