    @extends('layouts.app')
    @section('extra-css')
        <style>
            header{
            background-color: #000;
            }
            section{
                background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url('{{ asset('assets/img/banner-edit.jpg') }}');
                background-size: cover;
                background-position: center;
                height: 80vh;
                background-attachment: fixed;
            }
        </style>
    @endsection
    @section('content')
    
    
    <section>

    </section>
    <!-- End breadcrumbs section -->
    <div class="contact-page-wrap sec-mar en">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <span>{{__('my-contact')}}</span>
                        <h2>{{__('work')}}</h2>
                        <p>{{__('service')}}</p>
                        <div class="informations">
                            <div class="single-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <p>{{__('address-link')}}</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info">
                                    <a href="tel:05661111985">{{__('phone')}}</a>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <a href="mailto: info@example.com">info@mboss.finance</a>
                                </div>
                            </div>
                        </div>
                        <div class="follow-area">
                            <h5 class="blog-widget-title">Follow Us</h5>
                            <p class="para">Follow us on Social Network</p>
                            <div class="blog-widget-body">
                                <ul class="follow-list d-flex flex-row align-items-start gap-4">
                                    <li><a href="https://www.facebook.com/profile.php?id=100092639739552"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="form-tltle">
                            <h5>Make a Free Consulting</h5>
                        </div>
                       <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>first name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Last name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Company/Organization</label>
                                        <input type="text">      
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Phone</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Message</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primary-btn3" type="submit">Submit</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.85204436746!2d96.1562828113382!3d16.7840351198382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed933b34c801%3A0x38a4de5f667ee716!2sVenue%2036%20Co.%2C%20Ltd.!5e0!3m2!1sen!2smm!4v1694771853071!5m2!1sen!2smm" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        @endsection