<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreatePostRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Tracker;
use App\Skynet\Tracker\TrackerFunctions;
use App\Skynet\Facades\Logger;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::all();

        TrackerFunctions::log("This is viewing the wall ");
        
        
        return view('wall.index', compact('user', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $user = Auth::user();
        $user_id = Auth::user()->id;

//        $data = $request->all();
        TrackerFunctions::log("This user is building a post");

        return view('wall.create', compact('user_id', 'data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $posts = Post::all();
        $data = $request->all();

        Post::create([
            'content' => $data['content'],
            'user_id' => $user->id,
        ]);


        return view('wall.index', compact('user', 'posts','data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $post = Post::find($id);
        TrackerFunctions::log("this user is viewing a single post " . $user->name . " ");
        
        return view('wall.show', compact('user', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $post = Post::find($id);
        TrackerFunctions::log( $user->name . " is editing a post" . $post->id . " " );
        
        return view("wall.edit", compact("user", "post"));
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
        $post = Post::find($id);
        $post->update($request->except(['_method', '_token']));

        return redirect()->route('wall.index');
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
