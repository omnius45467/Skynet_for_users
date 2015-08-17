@extends('index')
@section('content')
    <section id="page4" class="wrap-block">
        <div class="container-wrap-block">
            <div class="container-wrap">
                <div class="container container-about">
                    <div data-duration="500" class="animated right-animate row">
                        <div class="col-sm-12 col-xs-12">
                            <h1><span class="h-under">P</span>ORTFOLIO</h1>
                        </div>
                    </div>

                    <div data-duration="1000" class="about-block animated left-animate row">
                        <div class="col-sm-5 col-xs-12">
                            <h4>Who I am?</h4>
                        </div>
                        <div class="col-sm-1 col-xs-hidden">
                            <hr/>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p>
                                I am a web specialist with big ideas and creative mind. I develop exclusive designs,
                                unique, easy and clear functionality of the products. I belong to the team of young
                                professionals who are always open to new knowledge.
                            </p>
                        </div>
                    </div>
                    <!-- about-block -->
                </div>
                <div data-duration="1500" class="animated left-animate  wrap-carousel-box">
                    <div class="container">
                        <div class="row carousel-box">
                            <div class="col-sm-12">
                                <div class="carousel">
                                    <div class="item">
                                        <div class="carousel-block">
                                            <a class="image-link" href="img/portfolio/1@2x.jpg" rel="carousel">
                                                <img class="img-responsive  replace-2x" src="img/portfolio/1.jpg"
                                                     alt="img1">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="carousel-block">
                                            <a rel="carousel" class="image-link" href="img/portfolio/2@2x.jpg">
                                                <img class="img-responsive replace-2x" src="img/portfolio/2.jpg"
                                                     alt="img2">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="carousel-block">
                                            <a rel="carousel" class="image-link" href="img/portfolio/3@2x.jpg">
                                                <img class="img-responsive replace-2x" src="img/portfolio/3.jpg"
                                                     alt="img3">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="carousel-block">
                                            <a rel="carousel" class="image-link" href="img/portfolio/4@2x.jpg">
                                                <img class="img-responsive replace-2x" src="img/portfolio/4.jpg"
                                                     alt="img4">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="carousel-block">
                                            <a rel="carousel" class="image-link" href="img/portfolio/5@2x.jpg">
                                                <img class="img-responsive replace-2x" src="img/portfolio/5.jpg"
                                                     alt="img5">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="carousel-block">
                                            <a rel="carousel" class="image-link" href="img/portfolio/6@2x.jpg">
                                                <img class="img-responsive replace-2x" src="img/portfolio/6.jpg"
                                                     alt="img6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- carousel -->
                                <a href="#" class="prev" title="Show previous"><img class="svg" src="img/svg/left.svg"
                                                                                    alt="left"></a>
                                <a href="#" class="next" title="Show next"><img class="svg" src="img/svg/right.svg"
                                                                                alt="right"></a>
                            </div>
                        </div>
                        <!-- carousel-box -->
                    </div>
                </div>
            </div>

            @include('components/footer')
        </div>
        <!-- container-wrap-block -->
    </section><!-- page4 -->
@endsection