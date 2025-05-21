<?php

namespace Thungdemo\Sms;

use Thungdemo\Sms\Drivers\DriverInterface;

class Client
{
    /**
     * @var \Thungdemo\Sms\Drivers\DriverInterface
     */
    protected DriverInterface $driver;
    
    /**
     * @param $driver \Thungdemo\Sms\Drivers\DriverInterface
     */
    function __construct(DriverInterface $driver)
    {
        $this->driver = $driver;
    }

       /** 
     * @param $message \Thungdemo\Sms\Message
     */
    public function send(Message $message) : void
    {
        $this->driver->send($message);
    }

    /** 
     * @param $messages array
     * @param $sender string|null
     */
    public function bulk(array $messages) : void
    {
        $this->driver->bulk($messages);
    }

    /** 
     * @return Thungdemo\Sms\Drivers\DriverInterface
     */
    public function getDriver() : DriverInterface
    {
        return $this->driver;
    }
}