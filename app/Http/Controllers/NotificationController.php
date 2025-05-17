<?php

namespace App\Http\Controllers;

use App\Notifications\EmailNotification;
use App\Notifications\SmsNotification;
use App\Notifications\WhatsappNotification;

class NotificationController extends Controller
{
    public function sendDemoNotifications()
    {
        $email = new EmailNotification();
        $email->setReceiver('usuario@email.com');

        $sms = new SmsNotification();
        $sms->setReceiver('555-1234');

        $whatsapp = new WhatsappNotification();
        $whatsapp->setReceiver('+521234567890');

        return response()->json([
            'email' => $email->send(),
            'sms' => $sms->send(),
            'whatsapp' => $whatsapp->send(),
        ]);
    }
}
