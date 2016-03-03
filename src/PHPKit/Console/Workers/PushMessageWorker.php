<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/2
 * @time: 13:13
 */
namespace PHPKit\Console\Workers;


class PushMessageWorker extends BaseWorker implements IWorker
{
    public function run($job)
    {
        syslog(LOG_INFO,$job);
        syslog(LOG_INFO, 'push message success' . date('Y-m-d H:i:s'));
    }
}