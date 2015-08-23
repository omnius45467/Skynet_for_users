<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Tracker;

use App\Skynet\Tracker\TrackerFunctions;
use App\Skynet\Facades\Logger;
use Illuminate\Support\Facades\Auth;
use App\Skynet\Repositories\Contracts\UserRepository;


class TrackerController extends Controller
{

    private $users;

    /**
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $users = User::all();
        $user = Auth::user();
        $datas = Tracker::all();

        TrackerFunctions::log("This user has accessed the tracking monitor");
        return view('tracker.index', compact('users', 'user','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $data = Tracker::find($id);
        if($user == $data){
            TrackerFunctions::log( $user->name . ' is viewing their own tracking profile');
            
        }else{
            TrackerFunctions::log("this user is viewing a single user " . $user->name . $user->id);
            
        }

        return view('tracker.show', compact('user', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
