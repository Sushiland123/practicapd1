<?php

namespace App\Notifications;

abstract class AbstractNotification implements NotificationInterface
{
    protected string $nombre;

    public function setReceiver(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}