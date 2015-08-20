@extends('index')
@section('content')
    <section id="page5" class="wrap-block">
        <div class="container-wrap-block">
            <div class="container-wrap">
                <div class="container container-about">
                    <div data-duration="500" class="animated right-animate row">
                        <div class="col-sm-12 col-xs-12">
                            <h1><span class="h-under">A</span>pp</h1>
                        </div>
                    </div>
                </div>
                <div data-duration="500" class="animated left-animate app-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-12 app-text">
                                <div>
                                    <p>
                                        Our APP is tested for the best user experience. We make it easy to measure your 
                                        social out reach for your business or personal community. All you need is a browser 
                                        or a smartphone to get started!
                                    </p>
                                    {{--<p>--}}
                                        {{--An awesome mobile APP for your smartphone. Our designers and developers made a--}}
                                        {{--piece of art for you to enjoy your phone functioning. Portability, connectivity,--}}
                                        {{--user interface, storage, performance, security and app capability – all these--}}
                                        {{--will make your daily life much easier and more effective. Just have a look!--}}
                                    {{--</p>--}}

                                    <div class="block-btn">
                                        <a class="appstore-btn" href="#">
                                            <span class="border-top"></span>
                                            <span class="border-bottom"></span>
                                        </a>
                                        <a class="google-btn" href="#">
                                            <span class="border-top"></span>
                                            <span class="border-bottom"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-duration="1500"
                                 class="iphone-block col-md-6 col-sm-4 col-xs-hidden animated right-animate">
                                <img class="img-responsive" src="img/iphone.png" alt="iphone">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- app-block -->
            </div>
            @include('components/footer')
        </div>
        <!-- container-wrap-block -->
    </section><!-- page5 -->
@endsection