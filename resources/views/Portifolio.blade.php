@extends('layouts,mainlayout')
@section('title', 'portifolio')
@section('content')
<!-- =====================================
        ==== Start Portfolio -->

        <section class="portfolio section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row">
    
                    <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <h4>Portfolio</h4>
                    </div>
    
                    <!-- filter links -->
                    <div class="filtering text-center col-sm-12">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Brand</span>
                        <span data-filter='.web'>Design</span>
                        <span data-filter='.graphic'>Graphic</span>
                    </div>
    
                    <div class="clearfix"></div>
    
                    <!-- gallery -->
                    <div class="gallery text-center full-width">
    
                        <!-- gallery item -->
                        <div class="items graphic">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/1.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items web">
                            <div class="item-img">
                                <img src="img/portfolio/2.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/2.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items width2 graphic">
                            <div class="item-img">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/3.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items width2 brand">
                            <div class="item-img">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/4.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items brand">
                            <div class="item-img">
                                <img src="img/portfolio/5.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/5.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items web">
                            <div class="item-img">
                                <img src="img/portfolio/6.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/6.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                        <!-- gallery item -->
                        <div class="items brand">
                            <div class="item-img">
                                <img src="img/portfolio/7.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/7.jpg" class="popimg">
                                            <i class="icofont icofont-image"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </section>
    
        <!-- End Portfolio ====
            ======================================= -->

    
@endsection


