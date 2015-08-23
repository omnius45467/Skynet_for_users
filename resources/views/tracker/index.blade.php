@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>tracker</h2>
                @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nonadmin') || Auth::user()->hasRole('customer'))
                    <div class="col-md-12">
                        <div class="col-md-3">
                            @foreach($users as $user)
                                <a class="btn" href="/tracker/{{$user->id}}">{{$user->name}}</a>
                            @endforeach
                        </div>
                        <div class="col-md-9">
                            @foreach($datas as $data)

                                <br/>
                                {{$data->event}}
                                <br/>
                                {{$data->machine}}
                                <br/>
                                {{date("F j, Y, g:i a", strtotime($data->created_at))}}
                                <br/>

                            @endforeach
                        </div>
                    </div>

                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>

@endsection