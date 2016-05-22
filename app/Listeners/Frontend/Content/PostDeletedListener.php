<?php

namespace App\Listeners\Frontend\Content;

use App\Events\Frontend\Content\PostDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostDeletedListener implements ShouldQueue
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
     * @param  PostDeleted  $event
     * @return void
     */
    public function handle(PostDeleted $event)
    {
        //
    }
}
