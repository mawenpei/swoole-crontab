<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/4
 * @time: 9:50
 */

namespace PHPKit\Console\Config;

class LoaderFile implements ILoader
{
    private $config;

    public function __construct($options)
    {
        $this->config = include($options['file']);
    }
    public function loadCrontabConfig()
    {
        return $this->config['crontab'];
    }

    public function loadDaemonConfig()
    {
        return $this->config['daemon'];
    }
}