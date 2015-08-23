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
                                <div class="block-blockquotes">
                                    <span class="quotes">

                                        <p>
                                            {{$post->content}}
                                            <br/>
                                            {{$post->created_at}}
                                            <a class="btn" href="/profile/{{$post->user_id}}">User ID:{{$post->user_id}}</a>
                                        </p>


                                    </span>
                                </div>
                            @endforeach
                        </div>

                    {{--@elseif()--}}
                        {{--<div class="col-md-6-col-md-offset-3">--}}
                            {{--@foreach($posts as $post)--}}
                                {{--<p>ID: {{$post->id}}</p>--}}

                                {{--<p>--}}
                                    {{--{{$post->content}}--}}
                                    {{--<br/>--}}
                                    {{--{{$post->created_at}}--}}
                                {{--</p>--}}

                                {{--<p>User ID:{{$post->user_id}} </p>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}

                    {{--@elseif(Auth::user()->hasRole('customer'))--}}
                        {{--<div class="col-md-6-col-md-offset-3">--}}
                            {{--@foreach($posts as $post)--}}
                                {{--<p>ID: {{$post->id}}</p>--}}

                                {{--<p>--}}
                                    {{--{{$post->content}}--}}
                                    {{--<br/>--}}
                                    {{--{{$post->created_at}}--}}
                                {{--</p>--}}

                                {{--<p>User ID:{{$post->user_id}}</p>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    @else
                        <h1>You are not signed in</h1>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection