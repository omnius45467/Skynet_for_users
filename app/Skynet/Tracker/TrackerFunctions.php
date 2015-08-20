<?php namespace App\Skynet\Tracker;

use App\User;
use App\Skynet\Repositories\Contracts\UserRepository;
use App\Tracker;
use App\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class TrackerFunctions
{

    public static function log($track)
    {

        Tracker::create([
            'user_id' => Auth::user()->id,
            'event' => $track,
            'ip' => Request::getClientIp(),
            'version' => $_SERVER['HTTP_USER_AGENT'],
            'machine' => $_SERVER['HTTP_USER_AGENT']
        ]);

    }

}