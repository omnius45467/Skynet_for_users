@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="content">
                    <h3>{{$user->name}}</h3>


                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                        @if($profile->description)
                            <p>
                                {{$profile->description}}
                            </p>
                        @endif
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        @if($posts)
                            @foreach($posts as $post)
                                {{$post->content}}
                                <br/>
                            @endforeach
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection