<?php

namespace App\Listeners;

use App\Events\ReleasePublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPublishReleaseNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReleasePublished  $event
     * @return void
     */
    public function handle(ReleasePublished $event)
    {
        var_dump($event->release);
    }
}
