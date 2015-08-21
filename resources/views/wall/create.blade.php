@extends('backend')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Create Post</h2>
                    @if(Auth::user()->hasRole('admin'))
                        <div class="col-md-6-col-md-offset-3">
                            {!! Form::model(new App\Post, ['route' => ['wall.store']]) !!}
                                {!! Form::text('content'); !!}
                                {!! Form::submit('Post This'); !!}
                            {!! Form::close() !!}

                        </div>

                    @elseif(Auth::user()->hasRole('nonadmin'))
                        <div class="col-md-6-col-md-offset-3">
                            blah
                        </div>
                    @else
                        <h1>You are not signed in</h1>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection