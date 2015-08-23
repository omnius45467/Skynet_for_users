<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\Tracker;
use App\Skynet\Tracker\TrackerFunctions;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::find($user->id);
//        $posts = Auth::post();
        TrackerFunctions::log($user->name . " is viewing their own profile ");
        if ($user->hasRole('customer')) {
            return view('profiles.default', compact('user', 'profile'));

        } elseif ($user->hasRole('admin' || 'nonadmin')) {
            return view('profiles.deluxe', compact('user', 'profile'));

        }

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
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $profile = Profile::find($user->id);
        $posts = Post::find($user);
        TrackerFunctions::log($user->name . " is viewing their own profile ");

        return view('profiles.default', compact('user', 'posts', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('profiles.edit', 'user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
