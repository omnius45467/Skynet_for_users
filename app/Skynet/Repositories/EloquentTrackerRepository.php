<?php namespace App\Skynet\Repositories;

use App\Skynet\Repositories\Contracts\TrackerRepository;
use App\User;
use App\Tracker;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;

class EloquentTrackerRepository implements TrackerRepository
{

    /**
     * @var
     */
    private $tracker;


    public function __construct($tracker)
    {
        $this->tracker = $tracker;

    }

    public function all()
    {
        if ($this->user->hasRole('admin'))
        {
            return Tracker::all();
        }

        $trackers = new Collection;

        return $trackers;
    }

    public function find($id)
    {
        return Tracker::findOrFail($id);
    }

    public function create(array $data)
    {

    }

}