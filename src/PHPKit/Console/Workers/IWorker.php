<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/2
 * @time: 11:55
 */
namespace PHPKit\Console\Workers;

interface IWorker
{
    public function run($job);
}