@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>tracker</h2>
                @if(Auth::user()->hasRole('admin'))
                    <div class="col-md-12">
                        <div class="col-md-3">

                                <a class="btn" href="/tracker/{{$user->id}}">{{$user->name}}</a>

                        </div>
                        <div class="col-md-9">

                                {{$data->id}}
                                <br/>
                                {{$data->machine}}
                                <br/>

                        </div>
                    </div>

                @elseif(Auth::user()->hasRole('nonadmin'))
                    <h1>You are a non admin</h1>
                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>

@endsection