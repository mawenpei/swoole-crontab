<?php
/**
 * @package PHPKit.
 * @author: mawenpei
 * @date: 2016/3/2
 * @time: 17:49
 */
namespace PHPKit\Console\Workers;

use Pheanstalk\Pheanstalk;

abstract class BaseWorker
{
    private $ppid = 0;

    protected $worker;

    protected $queue;

    protected $options;

    public function __construct($options)
    {
        syslog(LOG_INFO,'worker init success');
        if(isset($options['queue'])){
            syslog(LOG_INFO,'worker options success');
            $this->options = $options['queue'];
            $this->queue = new Pheanstalk($this->options['host'],$this->options['port']);
            syslog(LOG_INFO,'queue init success' . json_encode($this->options));
        }
    }

    public function tick(\swoole_process $worker)
    {
        $this->worker = $worker;
        syslog(LOG_INFO,'tick success');
        \swoole_timer_tick(500,function(){
            while(true){
                $this->checkExit();
                $job = $this->getWaitDoingJob();
                if(!$job){
                    syslog(LOG_INFO,'job is empty');
                    break;
                }
                $this->run($job->getData());
                $this->queue->delete($job);
            }
        });
    }

    public function getWaitDoingJob()
    {
        syslog(LOG_INFO,'queue pop start success');
        $job = $this->queue->watch($this->options['tube'])->ignore('default')->reserve(5);
        syslog(LOG_INFO,'queue pop finish  success');
        if($job){
            return $job;
        }
        return null;
    }

    protected function _exit()
    {
        syslog(LOG_INFO,'exit success');
        $this->worker->exit(1);
    }

    private function checkExit()
    {
        $ppid = posix_getppid();
        if($this->ppid==0){
            $this->ppid = $ppid;
        }
        if($this->ppid != $ppid){
            $this->_exit();
        }
    }
}