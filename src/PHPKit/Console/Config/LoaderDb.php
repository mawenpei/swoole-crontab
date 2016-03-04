<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/4
 * @time: 9:51
 */
namespace PHPKit\Console\Config;


class LoaderDb implements ILoader
{
    public function __construct($options)
    {
        //require $options['redbeanphp'];
        //\R::setup('mysql:host='.$options['mysql']['host'].';port='.$options['mysql']['port'].'dbname='.$options['mysql']['db'],$options['mysql']['user'],$options['mysql']['password']);
    }
    public function loadCrontabConfig()
    {

    }

    public function loadDaemonConfig()
    {

    }
}