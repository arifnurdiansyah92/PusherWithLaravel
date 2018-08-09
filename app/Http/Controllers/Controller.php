<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Events\CobaPusherEvent;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return View("welcome");
    }
    public function data(){
        return View("data");
    }
    public function pusher(){
        event(new CobaPusherEvent('Hi'));
        return "Ok";
    }
}
