<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/3
 * @time: 18:44
 */

namespace PHPKit\Console\Tasks;

interface ITask
{
    public function run($arg=[]);
}