@extends('backend')
@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2>Wall</h2>
                        @if(Auth::user()->hasRole('admin'))
                            <div class="col-md-6-col-md-offset-3">
                                @foreach($posts as $post)
                                    <p>{{$post->content}}</p>
                                    <p>{{$post->user_id}}</p>
                                @endforeach
                            </div>

                        @elseif(Auth::user()->hasRole('nonadmin'))
                            <div class="col-md-6-col-md-offset-3">
                                @foreach($posts as $post)
                                    <p>{{$post->content}}</p>
                                    <p>{{$post->user_id}}</p>
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