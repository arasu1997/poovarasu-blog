<?php

namespace App\Listeners;

use App\Events\PostDelete;
use App\Mail\PostOperationsWithMarkdown;
use App\Mail\PostOperationsWithoutMarkdown;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendPostDeletedViewMail implements ShouldQueue
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
     * @param  PostDelete  $event
     * @return void
     */
    public function handle(PostDelete $event)
    {
        Mail::to($event->post->email)->send(
            new PostOperationsWithoutMarkdown($event->post, $event->auth, $event->button, $event->operation, $event->url));
    }
}
