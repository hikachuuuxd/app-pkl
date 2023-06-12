<?php

namespace App\Listeners;

use App\Models\Siswa;
use App\Events\PlotinganStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SiswaStatus
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
        // $siswa = Siswa::find($event->plotingan->);
        // $siswa->update([
        //     'status' => 1,
        // ]);
    }
}
