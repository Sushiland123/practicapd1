<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/demo', [NotificationController::class, 'sendDemoNotifications']);