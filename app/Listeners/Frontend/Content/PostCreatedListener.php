<?php

namespace App\Listeners\Frontend\Content;

use App\Events\Frontend\Content\PostCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreatedListener implements ShouldQueue
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
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        //
    }
}
