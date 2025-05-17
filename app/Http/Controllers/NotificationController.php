<?php

namespace App\Http\Controllers;

use App\Notifications\EmailNotification;
use App\Notifications\SmsNotification;
use App\Notifications\WhatsappNotification;

class NotificationController extends Controller
{
public function sendDemoNotifications()
{
    $email = new EmailNotification('Usuario', 'usuario@email.com');
    $sms = new SmsNotification('Usuario', '+52', '1234567890');
    $whatsapp = new WhatsappNotification('Usuario', '+52', '1234567890');

    return response()->json([
        'email' => $email->send(),
        'sms' => $sms->send(),
        'whatsapp' => $whatsapp->send(),
    ]);
}
}
