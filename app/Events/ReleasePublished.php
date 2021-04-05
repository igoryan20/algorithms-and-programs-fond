<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use App\Models\Product;
use App\Models\Release;

class ReleasePublished implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The release instance.
     * 
     * @var \App\Models\Release
     */
    public $release;
    /**
     * Create a new event instance.
     * 
     * @param \App\Models\Release
     * @return void
     */
    public function __construct(Release $release)
    {
        $this->release = $release;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {   
        return new Channel('releases');
        // return new PrivateChannel('release');
    }
}
