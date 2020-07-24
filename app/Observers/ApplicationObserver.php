<?php

namespace App\Observers;

use \App\Models\Application;
use App\Jobs\SendEmail;

class ApplicationObserver
{
    /**
     * Handle the application "created" event.
     *
     * @param Application $application
     * @return void
     */
    public function created(Application $application)
    {
        SendEmail::dispatch($application);
    }

    /**
     * Handle the application "updated" event.
     *
     * @param  Application  $application
     * @return void
     */
    public function updated(Application $application)
    {
        //
    }

    /**
     * Handle the application "deleted" event.
     *
     * @param  Application  $application
     * @return void
     */
    public function deleted(Application $application)
    {
        //
    }

    /**
     * Handle the application "restored" event.
     *
     * @param  Application  $application
     * @return void
     */
    public function restored(Application $application)
    {
        //
    }

    /**
     * Handle the application "force deleted" event.
     *
     * @param  \App\Application  $application
     * @return void
     */
    public function forceDeleted(Application $application)
    {
        //
    }
}
