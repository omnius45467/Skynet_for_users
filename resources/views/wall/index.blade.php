@extends('backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="co-md-12">
                <h2>Wall</h2>
                @if(Auth::user()->hasRole('admin'))
                    <h1>Hello</h1>
                @else
                    <h1>You are not signed in</h1>
                @endif
            </div>
        </div>
    </div>
@endsection