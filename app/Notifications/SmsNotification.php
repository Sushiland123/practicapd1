<?php

namespace App\Notifications;

class SmsNotification extends AbstractNotification
{
    public function send(): string
    {
        return "SMS enviado a {$this->receiver}";
    }
}