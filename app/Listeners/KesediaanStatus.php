<?php

namespace App\Listeners;

use App\Models\Kesediaan;
use App\Models\Plotingan;
use App\Events\PlotinganStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class KesediaanStatus
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
        $kesediaan = Kesediaan::find($event->plotingan->kesediaan_id);
        $kesediaan->update([
            'status' => 1,
        ]);
    }
}
