Swoole-Crontab(基于Swoole扩展)
==============
1.概述
--------------
+ 基于swoole的定时器程序，支持秒级处理.
+ 异步多进程处理。
+ 完全兼容crontab语法，且支持秒的配置,可使用数组规定好精确操作时间
+ 请使用swoole扩展1.7.9-stable及以上版本.[Swoole](https://github.com/swoole/swoole-src)
+ 支持worker处理beanstalk队列任务

2.Crontab配置的支持
--------------
具体配置文件请看 [src/console.config.php]
介绍一下时间配置

    0   1   2   3   4   5
    |   |   |   |   |   |
    |   |   |   |   |   +------ day of week (0 - 6) (Sunday=0)
    |   |   |   |   +------ month (1 - 12)
    |   |   |   +-------- day of month (1 - 31)
    |   |   +---------- hour (0 - 23)
    |   +------------ min (0 - 59)
    +-------------- sec (0-59)[可省略，如果没有0位,则最小时间粒度是分钟]
3.帮助信息
----------
    * Usage: /path/to/php console.php [options] -- [args...]

    * -h [--help]        显示帮助信息
    * -s start           启动进程
    * -s stop            停止进程
    * -s restart         重启进程
	
4.运行配置
-----------
define('PHPKIT_RUN_DEBUG',true);
开启调试模式,将通过syslog函数打印运行日志

define('PHPKIT_CONSOLE_CONFIG_PATH',realpath('config.php'));
定义配置文件路径,未定义则不能运行


