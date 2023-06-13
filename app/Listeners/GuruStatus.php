<?php

namespace App\Listeners;

use App\Models\Guru;
use App\Models\User;
use App\Events\PlotinganStatus;
use App\Models\Kesediaan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GuruStatus
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
     * @param  \App\Events\PlotinganStatus  $event
     * @return void
     */
    public function handle(PlotinganStatus $event)
    {
        $guru = Guru::where('user_id_guru', $event->plotingan->user_id_guru)->firstOrFail();
        $guru->update([
            'status' => 1,
        ]);
    }
}
