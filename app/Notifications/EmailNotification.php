<?php

namespace App\Notifications;

// app/Notifications/EmailNotification.php
class EmailNotification extends AbstractNotification
{
    protected string $email;

    public function __construct(string $nombre, string $email)
    {
        $this->setReceiver($nombre);
        $this->email = $email;
    }

    public function send(): string
    {
        return "Email enviado a {$this->nombre} ({$this->email})";
    }
}