<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewReportNotification;
use Illuminate\Support\Facades\Notification;

class SendNewReportNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admins = User::whereDoesntHave('user_detail')->get();
        Notification::send($admins, new NewReportNotification($event->user));
    }
}
