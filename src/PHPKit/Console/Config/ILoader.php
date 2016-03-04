<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/4
 * @time: 9:57
 */
namespace PHPKit\Console\Config;

interface ILoader
{
    public function loadCrontabConfig();

    public function loadDaemonConfig();
}