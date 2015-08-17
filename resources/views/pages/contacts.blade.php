@extends('index')
@section('content')
    <section id="page3" class="wrap-block">
        <div class="container-wrap-block">
            <div class="container-wrap">
                <div class="container">
                    <div class="row quickly-animate  animated right-animate ">
                        <div class="col-sm-12 col-xs-12">
                            <h1>
                                <span class="h-under">C</span>ONTACTS
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
                                <form role="form" class="contact-form" method="post">
                                    <div class="border-top"></div>
                                    <div class="border-bottom"></div>
                                    <div class="form-group name">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>

                                    <div class="form-group email">
                                        <input type="email" class="form-control" name="email" placeholder="Your email">
                                    </div>

                                    <div class="form-group comment">
                                        <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                                    </div>

                                    <button type="submit" class="btn">
                                        <span class="form-message" style="display: none;"></span>
                                        Send
                                    </button>

                                </form>
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