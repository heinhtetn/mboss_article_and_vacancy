@extends('layouts.app')
@section('content')
    <!-- Start breadcrumbs section -->
    <section class="breadcrumbs">
        <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="{{asset('assets/img/banner2.jpg')}}" alt="">
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="{{asset('assets/img/banner1.jpg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h3>Empowering Businesses, Accelerating Growth: <br>Your Partner in Invoice Financing Solutions</h3>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a><img src="{{asset('assets/img/inner-pages/breadcrumb-arrow.svg')}}" alt=""> Vacancy Details
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->
    <div class="bolog-details-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-thumb magnetic-item">
                        <img class="img-fluid" src="#" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-12">
                    <div class="blog-details-content">
                        <h2>{{$vacancy->title}}</h2>
                        <h4 class="text-white">{{$vacancy->type}}</h4>
                        <div class="author-and-meta">
                            
                            <ul class="blog-meta">
                                <li>
                                    <i class="fas fa-clock"></i>{{$vacancy->working_hours}}
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>{{$vacancy->genders}}&nbsp;({{$vacancy->post_qty}})&nbsp;posts
                                </li>
                                <li>
                                    <i class="fas fa-money-check-alt"></i>Salary : {{$vacancy->salary}}ks
                                </li>
                                <li>
                                    <i class="fas fa-calendar-week"></i>Deadline : {{$vacancy->deadline}}
                                </li>
                            </ul>
                        </div>
                        <h5 class="text-white">Description</h5>
                        <blockquote>
                            <p>{{$vacancy->description}}</p>
                        </blockquote>
                        <h5 class="text-white">Requirements</h5>
                        <p>{{$vacancy->requirements}}</p>
                        <h5 class="text-white">Benefits</h5>
                        <p>{{$vacancy->benefits}}</p>
                        <h6 style="color: #FFCA33;">OFFICE EMAIL <i class="fas fa-envelope"></i>&nbsp;&nbsp;:&nbsp;&nbsp;{{$vacancy->email}}</h6>
                        <h6 style="color: #FFCA33;">ADDRESS <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;:&nbsp;&nbsp;{{$vacancy->address}}</h6>
                        <h6 style="color: #FFCA33;">Contact <i class="fas fa-phone"></i>&nbsp;&nbsp;:&nbsp;&nbsp;{{$vacancy->phone}}</h6>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </div>
    @endsection
