@extends('backend')
@section('content')

    {{--<!-- resources/views/auth/login.blade.php -->--}}

    {{--<form method="POST" action="/auth/login">--}}
    {{--{!! csrf_field() !!}--}}

    {{--<div>--}}
    {{--Email--}}
    {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--Password--}}
    {{--<input type="password" name="password" id="password">--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<input type="checkbox" name="remember"> Remember Me--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<button type="submit">Login</button>--}}
    {{--</div>--}}
    {{--</form>--}}

    <section id="page3" class="wrap-block">
        <div class="container-wrap-block">
            <div class="container-wrap">
                <div class="container">
                    <div class="row quickly-animate  animated right-animate ">
                        <div class="col-sm-12 col-xs-12">
                            <h1>
                                LOGI<span class="h-under">N</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="animated  normally-animate left-animate adress-container">
                    <div class="container">
                        <div class="row">
                            <div class="adress-block col-sm-6 col-xs-12">
                                350 Fifth Avenue, 34th floor <br/>
                                New York, NY 10118-3299 USA <br/>
                                Tel: +1-212-290-4700 <br/>
                                Fax: +1-212-736-1300 <br/>
                                Email: info@uno.pro <br/>
                            </div>
                            <div class="form-block col-sm-6 col-xs-12">
                                <div class="contact-form"></div>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                    <div class="border-top"></div>
                                    <div class="border-bottom"></div>
                                    <div class="form-group name">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="text-center">
                                            <ul class="list-inline">
                                                {{--<li>--}}
                                                    {{--<a class="btn" href="{{ url('/password/email') }}">Forgot Your Password?</a>--}}
                                                {{--</li>--}}

                                                <li>
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </li>

                                            </ul>



                                        </div>
                                    </div>
                                </form>

                                {{--<form role="form" class="contact-form" method="post">--}}
                                    {{--<div class="border-top"></div>--}}
                                    {{--<div class="border-bottom"></div>--}}
                                    {{--<div class="form-group name">--}}
                                        {{--<input type="text" class="form-control" name="name" placeholder="Name">--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group email">--}}
                                        {{--<input type="email" class="form-control" name="email" placeholder="Your email">--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group comment">--}}
                                        {{--<textarea class="form-control" name="comment" placeholder="Message"></textarea>--}}
                                    {{--</div>--}}

                                    {{--<button type="submit" class="btn">--}}
                                        {{--<span class="form-message" style="display: none;"></span>--}}
                                        {{--Send--}}
                                    {{--</button>--}}

                                {{--</form>--}}


                            </div>
                        </div>
                    </div>
                </div>
                <!-- adress-container -->
            </div>

            @include('components/footer')
        </div>
        <!-- container-wrap-block -->
    </section><!-- page3 -->
@endsection