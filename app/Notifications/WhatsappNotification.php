<?php

namespace App\Notifications;

// app/Notifications/WhatsappNotification.php
class WhatsappNotification extends AbstractNotification
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
        return "WhatsApp enviado a {$this->nombre} ({$this->area}{$this->numero})";
    }
}