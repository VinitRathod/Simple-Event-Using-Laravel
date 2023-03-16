<?php

namespace App\Listeners;

use App\Events\LogoutLogs;
use App\Models\LogoutLogs as ModelsLogoutLogs;
use App\Notifications\LogoutLogsNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddLogoutLogs
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LogoutLogs $event): void
    {
        //
        // dd($event->user->id);
        ModelsLogoutLogs::create([
            'name' => $event->user->name,
            'email' => $event->user->email
        ]);
        // $event->user->notify(new LogoutLogsNotification("Hello welcome to the demo project: "));
    }
}
