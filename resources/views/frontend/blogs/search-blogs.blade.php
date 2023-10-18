@extends('layouts.app')
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
                            <h2>Blogs</h2>
                            <form action="{{route('blogs.search',app()->getLocale())}}">
                                <div class="form-inner">
                                    <input type="text" name="search" placeholder="Search Articles here...">
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
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="single-blog magnetic-item">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{url('featured/' . $article->featured_image)}}" alt="" style="width:433px;height: 264px;">
                        </div>
                        <div class="blog-content">
                           <ul class="blog-meta">
                                <li><a href="blog.html">May 20, 2023</a></li>
                                <li><a href="blog.html">Comment (3)</a></li>
                            </ul>
                            <h4><a href="blog-details.html">{{$article->title}}</a></h4>
                            <div class="blog-footer">
                                <div class="read-btn">
                                    <a href="{{route('blogs.detail',['language' => app()->getLocale(),'id' => $article->id])}}">Read More
                                        <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
 
@endsection