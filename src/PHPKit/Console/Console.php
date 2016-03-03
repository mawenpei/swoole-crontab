<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/3
 * @time: 10:49
 */

namespace PHPKit\Console;

use PHPKit\Console\Daemon\Handler as DaemonHandler;
use PHPKit\Console\Crontab\Handler as CrontabHandler;
class Console
{
    const RUN_MODE_CRONTAB = 'crontab';
    const RUN_MODE_DAEMON  = 'daemon';
    public static function run($runMode,$process_name=null)
    {
        switch($runMode){
            case self::RUN_MODE_CRONTAB:
                define('CURRENT_RUN_MODE',self::RUN_MODE_CRONTAB);
                CrontabHandler::run($process_name);
                break;
            case self::RUN_MODE_DAEMON:
                define('CURRENT_RUN_MODE',self::RUN_MODE_DAEMON);
                DaemonHandler::run($process_name);
                break;
        }
    }
}