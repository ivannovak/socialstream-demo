<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use JoelButcher\Socialstream\Events\ConnectedAccountDeleted;

class ListenForConnectedAccountDeletion
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ConnectedAccountDeleted $event): void
    {
        Log::info('Connected account deleted', ['provider' => $event->connectedAccount->provider]);
    }
}
