<?php

namespace App\Notifications;

abstract class AbstractNotification implements NotificationInterface
{
    protected string $receiver;

    public function setReceiver(string $receiver): void
    {
        $this->receiver = $receiver;
    }
}