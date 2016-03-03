<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/3
 * @time: 18:45
 */

namespace PHPKit\Console\Tasks;

abstract class BaseTask
{
    protected $worker;

    public function doing(\swoole_process $worker,$args='')
    {
        $this->worker = $worker;
        $this->run($args);
    }
}