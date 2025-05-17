<?php

namespace App\Notifications;

// app/Notifications/WhatsappNotification.php
class WhatsappNotification extends AbstractNotification
{
    protected string $nombre;
    protected string $area;
    protected string $numero;

    public function __construct(string $nombre, string $area, string $numero)
    {
        $this->nombre = $nombre;
        $this->area = $area;
        $this->numero = $numero;
        $this->numero_completo = $area . $numero;
    }

    public function send(): string
    {
        return "WhatsApp enviado a {$this->nombre} ({$this->numero_completo})";
    }
}