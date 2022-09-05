<?php

namespace App\Observers;
use App\Models\Ave;

class AveObserver
{
    /**
     * Handle the Ave "creating" event.
     *
     * @param  \App\Models\Ave  $ave
     * @return void
     */
    public function creating(Ave $ave)
    {
        $ave->uuid = \Str::uuid($ave->uuid);
    }
}
