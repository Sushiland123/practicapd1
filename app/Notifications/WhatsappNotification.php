<?php

namespace App\Notifications;

class WhatsappNotification extends AbstractNotification
{
    public function send(): string
    {
        return "WhatsApp enviado a {$this->receiver}";
    }
}