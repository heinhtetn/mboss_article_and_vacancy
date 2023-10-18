@extends('layouts.app')
@section('content')
<!-- Preloader Start -->



    <!-- End header section -->
    <!-- Start Banner section -->
    <div class="banner-area6 en">
        <div class="banner-wrap">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 d-flex align-items-center">
                    <div class="banner-content">
                        <h3>{{__('about1')}} <span style="color: #FFCA33;">{{__('us')}}</span></h3>
                        <p> 
                            

                            {{__('about-article')}}
                            
                            </p>
                        <div class="banner-btn-group">
                            <a class="primary-btn3" href="{{url('/register')}}">Get Started</a>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-lg-7 d-flex justify-content-end">
                    <div class="banner-img-wrap">
                        <div class="swiper banner5-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-img">
                                        <img class="img-fluid"
                                            src="{{asset('assets/img/9b23abc627.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-img">
                                        <img class="img-fluid"
                                            src="{{asset('assets/img/91ef481c80.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-img">
                                        <img class="img-fluid"
                                            src="{{asset('assets/img/office3.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide">
                                    <div class="banner-img">
                                        <img class="img-fluid"
                                            src="assets/img/office4.jpg"
                                            alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- End Banner section -->


    <!-- Start Partner section -->
    <div class="home6-partner-area sce-mar en">
        <div class="container-fluid">
            <div class="row mb-55">
                <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title-6 text-center">
                        <h5>{{__('partners')}}</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="marque-wrap">
                        <div class="marquee_text3">
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/FGM logo.png')}}" alt="">
                                
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/agency logo confirmed-01.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/GMPD logo final.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Golde Inya.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Golden Apex.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/m clearance-01-01.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M Creation Zone.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/m exchange logo.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M Express.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/m health logo confirmed.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M Language Center Logo-b.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M paravatee logo confirmed-01.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M Plus Myanmar.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/M S T University.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/MCB Bank.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/MD Bank.jpg')}}" alt="">
                                
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Myanmar Farm-A.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Myit Tar Sanyay.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Oriental Commerce.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/sea brother-01.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Sea Cross Logo.jpg')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Thai amr.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Thai Express png.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Uni Farm png.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/venue 36 logo png (1).png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/York Cafe.png')}}" alt="">
                            </div>
                            <div class="partner-logo">
                                <img src="{{asset('assets/image/Zee Zee Trading.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner section -->
    <!-- Start what we do section -->
    <div class="home6-what-we-do-section sec-mar en">
        <div class="container">
            <div class="row mb-55">
                <div class="col-lg-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title-6 text-center">
                        <h2>{{__('join-us')}}</h2>
                    </div>
                    <h5 class="text-center text-white mt-5">{{__('join-us-title')}}</h5>
                </div>
            </div>
            <div class="row g-lg-4 gy-5 justify-content-center mb-120">
                <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-process ">
                        <i class="fas fa-window-maximize" style="color: #FFCA33; font-size: 50px;"></i><br><br>
                        <div class="content">
                            <h3>{{__('subtitle1')}}</h3>
                            <p>{{__('subtitle1-article')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="single-process">
                        <i class="fas fa-flag" style="color: #FFCA33; font-size: 50px;"></i><br><br>
                        <div class="content">
                            <h3 class="join-head">{{__('subtitle2')}}</h3>
                            <p>{{__('subtitle2-article')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-process">
                        <i class="fas fa-award" style="color: #FFCA33; font-size: 50px;"></i><br><br>
                        <div class="content">
                            <h3>{{__('subtitle3')}}</h3>
                            <p>{{__('subtitle3-article')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-process">
                        <i class="fas fa-award" style="color: #FFCA33; font-size: 50px;"></i><br><br>
                        <div class="content">
                            <h3>{{__('subtitle4')}}</h3>
                            <p>{{__('subtitle4-article')}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- counnter start -->
            <div class="row p-5 shadow" style="border: 1px solid #0D0907; background-color: #343434;">
                <div class="col-lg-4 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <div class="counter-area">
                            <div class="single-counter">
                                <div class="content">
                                    <div class="number">
                                        <div class="d-flex">
                                            <h3 class="counter mt-lg-1 mt-2">750</h3>
                                            <span style="color: #fff; font-size: 28px;">K</span>
                                        </div>

                                    </div>
                                    <p style="color: #fff; font-size: 25px;">{{__('smes')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <div class="counter-area">
                            <div class="single-counter">
                                <div class="content">
                                    <div class="number">
                                        <div class="d-flex">
                                            <h3 class="counter mt-lg-1 mt-2">5</h3>
                                            <span style="color: #fff; font-size: 28px;">B</span>
                                        </div>

                                    </div>
                                    <p style="color: #fff; font-size: 25px;">{{__('mmk')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <div class="counter-area">
                            <div class="single-counter">
                                <div class="content">
                                    <div class="number">
                                        <div class="d-flex">
                                            <h3 class="counter mt-lg-1 mt-2">54</h3>
                                            <span style="color: #fff; font-size: 28px;">M</span>
                                        </div>

                                    </div>
                                    <p style="color: #fff; font-size: 25px;">{{__('population')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row g-lg-4 gy-5 align-items-center" style="margin-top: 100px;">
                <div class="col-lg-5">
                    <div class="what-we-do-img magnetic-item">
                        <img class="img-fluid" src="{{asset('assets/img/Untitled-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="what-we-do-content">
                        <h2>{{__('commitment')}}</h2>
                        <p>{{__('commitment-article')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- End what we do section -->



 
@endsection