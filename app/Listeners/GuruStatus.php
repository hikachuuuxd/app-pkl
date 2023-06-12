<?php

namespace App\Listeners;

use App\Models\Guru;
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
        $guru = Guru::find($event->plotingan->user_id_guru);
        $guru->update([
            'status' => 1,
        ]);
    }
}
