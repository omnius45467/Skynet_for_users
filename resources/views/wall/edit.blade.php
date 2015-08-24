@extends('backend')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">

                    @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nonadmin') || Auth::user()->hasRole('customer'))
                        <h2>Edit Post</h2>
                        <div class="col-md-6-col-md-offset-3">
                            {!! Form::open(['route' => 'wall.update', 'method' => 'PUT']) !!}
                            {!! Form::text('content'); !!}
                            <br/>
                            {!! Form::submit('Post Edit'); !!}
                            {!! Form::close() !!}

                        </div>
                    @else
                        <h2>You are not signed in</h2>
                        <a href="/login">Login</a>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection