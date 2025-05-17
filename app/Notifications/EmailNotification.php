<?php

namespace App\Notifications;

class EmailNotification extends AbstractNotification
{
    public function send(): string
    {
        return "Email enviado a {$this->receiver}";
    }
}