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
                                <a href="index.html">Home</a><img src="{{asset('assets/img/inner-pages/breadcrumb-arrow.svg')}}" alt=""> Blog Details
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
                        <img class="img-fluid" src="{{url('featured/' . $article->featured_image)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-12">
                    <div class="blog-details-content">
                        
                        <div class="author-and-meta">
                            <!-- <div class="author-area">
                                <div class="author-img">
                                    <img src="assets/img/inner-pages/blog-dt-author.png" alt="">
                                </div>
                                <div class="author-content">
                                    <h6>By, <span>Cooper Jogan</span></h6>
                                </div>
                            </div> -->
                            <ul class="blog-meta">
                                <li>
                                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 0C3.60594 0 0 3.60594 0 8C0 12.3941 3.60594 16 8 16C12.3941 16 16 12.3941 16 8C16 3.60594 12.3941 0 8 0ZM11.646 3.69106C11.8291 3.508 12.1259 3.508 12.3089 3.69106C12.492 3.87413 12.492 4.17091 12.3089 4.35397C12.1259 4.53703 11.8291 4.53703 11.646 4.35397C11.463 4.17091 11.463 3.87413 11.646 3.69106ZM7.53125 2.375C7.53125 2.11591 7.74091 1.90625 8 1.90625C8.25909 1.90625 8.46875 2.11591 8.46875 2.375V3.3125C8.46875 3.57159 8.25909 3.78125 8 3.78125C7.74091 3.78125 7.53125 3.57159 7.53125 3.3125V2.375ZM2.375 8.46875C2.11591 8.46875 1.90625 8.25909 1.90625 8C1.90625 7.74091 2.11591 7.53125 2.375 7.53125H3.3125C3.57159 7.53125 3.78125 7.74091 3.78125 8C3.78125 8.25909 3.57159 8.46875 3.3125 8.46875H2.375ZM4.35397 12.3089C4.17091 12.492 3.87413 12.492 3.69106 12.3089C3.508 12.1259 3.508 11.8291 3.69106 11.646C3.87413 11.4629 4.17091 11.4629 4.35397 11.646C4.53703 11.8291 4.53703 12.1259 4.35397 12.3089ZM4.35397 4.35397C4.17091 4.53703 3.87413 4.53703 3.69106 4.35397C3.508 4.17091 3.508 3.87413 3.69106 3.69106C3.87413 3.508 4.17091 3.508 4.35397 3.69106C4.53703 3.87413 4.53703 4.17091 4.35397 4.35397ZM8.46875 13.625C8.46875 13.8841 8.25909 14.0938 8 14.0938C7.74091 14.0938 7.53125 13.8841 7.53125 13.625V12.6875C7.53125 12.4284 7.74091 12.2188 8 12.2188C8.25909 12.2188 8.46875 12.4284 8.46875 12.6875V13.625ZM11.1439 11.1439C10.9608 11.327 10.6642 11.327 10.4811 11.1439L7.66856 8.33141C7.58069 8.24353 7.53125 8.1245 7.53125 8V5.1875C7.53125 4.92841 7.74091 4.71875 8 4.71875C8.25909 4.71875 8.46875 4.92841 8.46875 5.1875V7.80591L11.1439 10.4811C11.327 10.6642 11.327 10.9608 11.1439 11.1439ZM12.3089 12.3089C12.1259 12.492 11.8291 12.492 11.646 12.3089C11.463 12.1259 11.463 11.8291 11.646 11.646C11.8291 11.4629 12.1259 11.4629 12.3089 11.646C12.492 11.8291 12.492 12.1259 12.3089 12.3089ZM14.0938 8C14.0938 8.25909 13.8841 8.46875 13.625 8.46875H12.6875C12.4284 8.46875 12.2188 8.25909 12.2188 8C12.2188 7.74091 12.4284 7.53125 12.6875 7.53125H13.625C13.8841 7.53125 14.0938 7.74091 14.0938 8Z">
                                            </path>
                                        </svg>{{$article->created_at->format("F j, Y")}}
                                </li>
                                
                            </ul>
                        </div>
                        
                        <blockquote>
                        
                            <h3>{{$article->title}}</h3>
                            <p>{{$article->body}}</p>
                            <div class="bolckquote-icons">
                                <img class="blockquote-icon-01" src="assets/img/inner-pages/blockquote-icon-01.svg" alt="">
                                <img class="blockquote-icon-02" src="assets/img/inner-pages/blockquote-icon-02.svg" alt="">
                            </div>
                        </blockquote>
                        <h3>Our Begin Now To Beingonl</h3>
                        <p> urna Aenean onewaryzo eleifend vitae tellus a facilisis. Nunc posuere at augue eget onem  porta. Inei odio goral tubeleti tellus, dignissim fermentumara purus nec, consequat dapibus toura gonem metus.Vivamus urna worlda mauris, faucibus at egestas quis, fermentum egetonav nequet Duis pharetra lectus nec risusonl pellentesque, toi vitae aliquet nisi dapibus. Sed volutpat mot velit, ateng maximus est eleifend accui Fusce porttitor ex archunabo. dignissim fermentumara purus nec, consequat dapibus toura gonem metus.Vivamus urna worlda Phasellus one viverra lorem ant nibh placerat tincidunt.bolgotai Aliquam andit rutrum.</p>
                        <div class="blog-details-img-group">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="blog-details-img magnetic-item">
                                        <img style="width: 6000px; height:495px;" class="img-fluid" src="{{url('featured/' . $article->featured_image)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-4">
                                        @for($i = 0; $i < count($image); $i++)
                                        <div class="d-flex justify-content-center">
                                            <img style="width: 460px; height: 236px;" src="{{url('uploads/' . $image[$i])}}" alt="">
                                        </div><br>
                                    @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </div>
    @endsection