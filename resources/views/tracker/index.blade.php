@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>tracker</h2>
                @if(Auth::user()->hasRole('admin'))
                    <h1>Hello</h1>

                @elseif(Auth::user()->hasRole('nonadmin'))
                    <h1>You are a non admin</h1>
                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>

@endsection