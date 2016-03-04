<?php

require 'vendor/autoload.php';
define('PHPKIT_RUN_DEBUG',true);
define('PHPKIT_CONSOLE_CONFIG_PATH',realpath('config.php'));
PHPKit\Console\Console::run('crontab');

