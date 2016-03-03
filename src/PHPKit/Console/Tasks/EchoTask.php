<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/3
 * @time: 18:06
 */
namespace PHPKit\Console\Tasks;

class EchoTask extends BaseTask implements ITask
{
    public function run($args=[])
    {
        $cmd = $args['cmd'];
        exec($cmd,$output,$status);
        syslog(LOG_INFO, 'scanning game price : ' . date('Y-m-d H:i:s'));
        sleep(10);
        exit($status);
    }
}