@extends('layouts.app')
    @section('extra-css')
    <style>
        .custom-pagination .pagination li a 
        {
            color: #FFCA33;
        }
        .custom-pagination .pagination li.active span {
            background-color: #FFCA33; 
            color: #000;
            border-radius: 5px;
            border: #FFCA33 1px solid;
        }
    </style>
    @endsection


    @section('content')
    <!-- Start breadcrumbs section -->
    <section class="breadcrumbs">
        <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="assets/img/banner2.jpg" alt="">
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="assets/img/banner1.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h3>Empowering Businesses, Accelerating Growth: <br>Your Partner in Invoice Financing Solutions</h3>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a><img src="assets/img/inner-pages/breadcrumb-arrow.svg" alt=""> Blog Grid
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->
    <div class="blog-banner sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-banner-wrap">
                        <div class="banner-img">
                            <img src="assets/img/91ef481c80.jpg" height="100px" alt="">
                        </div>
                       <div class="banner-content">
                            <h2>Vacancies</h2>
                            <form action="{{route('vacancies.search',app()->getLocale())}}">
                                <div class="form-inner">
                                    <input type="text" name="search" placeholder="Search Vacancies here...">
                                    <button type="submit">
                                        Search
                                        <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home3-blog-area sec-mar">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                @foreach($vacancies as $vacancy)  
                <div class="col-lg-6 col-md-12 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="card mb-3 py-3" style="max-width: 630px;background-color:#5c5a5a">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="{{asset('assets/img/M-BOSS-Logo-crop.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-white">{{$vacancy->title}}</h5>
                            <p class="card-text text-white"><i class="fas fa-location-arrow" style="color: #FFCA33;">&nbsp;&nbsp;</i>{{$vacancy->type}}</p>
                            <p class="card-text text-white"><i class="fas fa-location-arrow" style="color: #FFCA33;">&nbsp;&nbsp;</i>{{$vacancy->working_hours}}</p>
                            <p class="card-text text-white"><i class="fas fa-location-arrow" style="color: #FFCA33;">&nbsp;&nbsp;</i>{{$vacancy->genders}} <span>({{$vacancy->post_qty}})&nbsp;posts</span></p>
                        </div>
                        <div>
                            <a href="{{route('vacancies.detail',['language' => app()->getLocale(),'id' => $vacancy->id])}}" style="color: #FFCA33;" class="mx-3">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>    
                @endforeach
            </div>
            <div class="custom-pagination">
                <ul class="pagination justify-content-center">
                    {{$vacancies->links()}}
                </ul>
                
            </div>
        </div>
    </div>
@endsection