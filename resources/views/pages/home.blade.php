@extends('index')
@section('content')
    <section id="page1" class="wrap-block">
        <div class="container-wrap-block container-wrap-block1">
            <div class="container-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <h1 data-duration="500" class="animated right-animate">UN<span class="h-under">O</span>.
                            </h1>

                            <h1 data-duration="1000" class="animated left-animate">MODERN &<br/>CREATIVE TEMPLATE</h1>

                            <p data-duration="1000" class="animated left-animate">Our website is under construction.
                                We'll be here soon with our new awesome site, subscribe to be notified.</p>
                        </div>
                    </div>

                    <div data-duration="1500" class="animated left-animate row">
                        <form class="notify-me" method="post" action="php/notify-me.php">
                            <div class="col-md-5 col-sm-6 form-group email">
                                <span class="form-message" style="display: none;"></span>
                                <input class="form-control email" type="text" name="subscribe" placeholder="Your email">
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @include('components/footer')
        </div>
        <!-- container-wrap-block -->
    </section><!-- page1 -->
@endsection