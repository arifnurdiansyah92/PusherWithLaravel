<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Jenis_Kereta;
use Yajra\Datatables\Datatables;
class CobaPusherEvent implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $data;
    // {"label":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],"series":{"name":"Desktop","data":[30,41,35,51,49,62,69,91,126]}}
    public function __construct($data)
    {
        
        $this->data = [
            "label" => ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],
            "series" => ["name" => "Desktop", "data" => [50,21,60,21,59,62,69,91,26]]
        ];;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['coba-channel'];
    }
}
