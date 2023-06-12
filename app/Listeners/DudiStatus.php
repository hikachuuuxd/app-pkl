<?php

namespace App\Listeners;


use App\Models\Kesediaan;
use App\Events\PlotinganStatus;
use App\Models\Plotingan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DudiStatus
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $plotingan;
    public function __construct(Plotingan $plotingan)
    {
         $this->plotingan = $plotingan;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PlotinganStatus  $event
     * @return void
     */
    public function handle(PlotinganStatus $event)
    {
      
    }
}
