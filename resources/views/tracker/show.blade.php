@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>tracker</h2>
                @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nonadmin') || Auth::user()->hasRole('customer') )
                    <div class="col-md-12">
                        <div class="col-md-3">

                            <a class="btn" href="/tracker/{{$user->id}}">{{$user->name}}</a>

                        </div>
                        <div class="col-md-9">
                            @if($data != '')

                                <br/>
                                {{$data->machine}}
                                <br/>
                                {{$data->ip}}
                                <br/>
                                {{$data->event}}
                            @else
                                <p>No Data On This User</p>
                            @endif
                        </div>
                    </div>

                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>

@endsection