<?php

namespace App\Observers;

use App\Models\Comments;
use Auth;

class CommentsObserver
{
    /**
     * Handle the Comments "created" event.
     *
     * @param  \App\Models\Comments  $comments
     * @return void
     */
    public function creating(Comments $comments)
    {
        $comments->user_id = Auth::user()->id;
    }

    /**
     * Handle the Comments "updated" event.
     *
     * @param  \App\Models\Comments  $comments
     * @return void
     */
    public function updated(Comments $comments)
    {
        //
    }

    /**
     * Handle the Comments "deleted" event.
     *
     * @param  \App\Models\Comments  $comments
     * @return void
     */
    public function deleted(Comments $comments)
    {
        //
    }

    /**
     * Handle the Comments "restored" event.
     *
     * @param  \App\Models\Comments  $comments
     * @return void
     */
    public function restored(Comments $comments)
    {
        //
    }

    /**
     * Handle the Comments "force deleted" event.
     *
     * @param  \App\Models\Comments  $comments
     * @return void
     */
    public function forceDeleted(Comments $comments)
    {
        //
    }
}
