<?php

namespace App\Listeners\Frontend\Content;

use App\Events\Frontend\Content\PostUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostUpdatedListener implements ShouldQueue
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
     * @param  PostUpdated  $event
     * @return void
     */
    public function handle(PostUpdated $event)
    {
        //
    }
}
