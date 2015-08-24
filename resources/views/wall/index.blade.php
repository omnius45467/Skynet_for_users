@extends('backend')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Wall</h2>
                    @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nonadmin') || Auth::user()->hasRole('customer'))
                        <div id="wall" class="col-md-6-col-md-offset-3">
                            @foreach($posts as $post)
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h4>{{$post->content}}</h4>
                                        <br/>
                                        <div class="col-md-6">
                                            <p>{{$post->created_at}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn" href="#">Reply</a>
                                        </div>
                                        <br/>
                                    </div>
                                    <hr/>
                                    <div class="col-md-2 col-md-offset-1">
                                        <a class="btn" href="/profile/{{$post->user_id}}">User ID:{{$post->user_id}}</a>
                                    </div>
                                    
                                </div>
                                
                            @endforeach
                        </div>


                    @else
                        <h1>You are not signed in</h1>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection