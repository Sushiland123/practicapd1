<?php

namespace App\Notifications;

// app/Notifications/SmsNotification.php
class SmsNotification extends AbstractNotification
{
    protected string $area;
    protected string $numero;

    public function __construct(string $nombre, string $area, string $numero)
    {
        $this->setReceiver($nombre);
        $this->area = $area;
        $this->numero = $numero;
    }

    public function send(): string
    {
        return "SMS enviado a {$this->nombre>} ({$this->area.$numero})";
    }
}