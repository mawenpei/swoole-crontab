<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/3
 * @time: 16:05
 */
namespace PHPKit\Console\Config;

use PHPKit\Console\Console;

class Loader
{
    public static function config()
    {
        switch(CURRENT_RUN_MODE){
            case Console::RUN_MODE_DAEMON:
                return self::loadDaemonConfig();
                break;
            case Console::RUN_MODE_CRONTAB:
                return self::loadCrontabConfig();
                break;
        }
    }

    protected static function loadCrontabConfig()
    {
        return [
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
        ];
    }

    protected static function loadDaemonConfig()
    {
        return [
            ['className'=>'\\PHPKit\\Console\\Workers\\PushMessageWorker','processNum'=>'5','queue'=>[
                'host'=>'127.0.0.1','port'=>'11300','tube'=>'testtube'
            ]]
        ];
    }
}