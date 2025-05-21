<?php

namespace Thungdemo\Sms\Drivers;

use Thungdemo\Sms\Message;

interface DriverInterface {
    /**
     * @param $message \Thungdemo\Sms\Message
     * @throws \Thungdemo\Sms\Exceptions\SmsException
     */
    public function send(Message $message) : void;

    /**
     * @param $messages array
     * @param $sender string|null
     */
    public function bulk(array $messages,?string $sender=null) : void;
}