<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="assets/css/all.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <!-- Title -->
    <title>MBoss</title>
    <link rel="icon" href="assets/img/M-BOSS-Logo-crop.png" type="image/gif" sizes="20x20">
    <style>
        header {
            background-color: #000;
        }

        section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/img2.jpg);
            background-size: cover;
            background-position: center;
            height: 80vh;
            background-attachment: fixed;
        }
        
        select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: transparent;
    border: none;
    padding: 5px;
    font-size: 16px;
    cursor: pointer;
    color: white;
}

.language-select {
    display: flex;
    align-items: center;
}



.en-icon {
    background-color: #007bff;
    color: white;
}







/* Style for select dropdown arrow */
select::-ms-expand {
    display: none;
}

/* Style for the custom select */
select {
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style for the selected option */
select option:checked {
    background-color: #007bff;
    color: white;
}

/* Style for the dropdown menu */
select option {
    background-color: white;
    color: #fff;
}

        h3 {
            color: #fff !important;
        }

        h3:hover {
            color: #FFCA33 !important;
        }

        .phone-no:hover {
            color: #FFCA33 !important;
        }

        .text-orange:hover {
            color: #FFCA33 !important;
        }

        .menu-list li a:hover {
            color: #FFCA33 !important;
        }

        #languageSelector {
            position: fixed;
            bottom: 10px; /* Adjust this value to control the distance from the bottom */
            right: 10px; /* Adjust this value to control the distance from the right */
        }
        #eng-nav{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
            opacity: 1;
            background-color: #000;
        }
        #my-nav{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
            opacity: 1;
            background-color: #000;
        }
    </style>
    
</head>

<body class="home-dark2 tt-magic-cursor">
    <!-- Preloader Start -->
    <div class="preloader">
        <div id="particles-background" class="vertical-centered-box"></div>
        <div id="particles-foreground" class="vertical-centered-box"></div>

        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/img/M-BOSS-Logo-crop.png" width="58px" alt="">
            </div>
        </div>

    </div>
    <!-- Preloader End -->
    <div class="header-sidebar">
        <div class="siderbar-top">
            <div class="sidebar-log">
                <a href="index.html"><img src="assets/img/M-BOSS-Logo-crop.png" alt=""></a>
            </div>
            <div class="close-btn">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <div class="sidebar-content">
            <p>Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero. Donec nec duomoi luctus,
                pellentesque lacus sed, mollis going leo.</p>
        </div>
        <div class="address-card">
            <div class="content">
                <div class="informations">
                    <div class="single-info">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info">
                            <p>168/170, Avenue 01, Old York Drive Rich Mirpur DOHS, Bangladesh</p>
                        </div>
                    </div>
                    <div class="single-info">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info">
                            <a href="tel:05661111985">09-888828181</a>
                        </div>
                    </div>
                    <div class="single-info">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="info">
                            <a href="mailto: info@example.com">info@mboos.finance</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="assets/images/bg/office1.png" alt="image"> -->
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
    <!-- Start header section -->
    <header class="header-area2 style-2 two">
        <div class="header-logo">
            <a href="index.html"><img alt="image" class="img-fluid" src="assets/img/M-BOSS-Logo-crop.png"
                    style="width: 30px;height:30px"></a>
            <span style="color: #FFCA33;">M Boss</span>
        </div>
        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none">
                <div class="mobile-logo-wrap">
                    
                    <a href="index.html"><img alt="image" src="assets/img/M-BOSS-Logo-crop.png" style="width: 30px;height:30px;"></a>
                    <span style="color: #fff;">MBoss Finance</span>
                </div>
            </div>
            
            <ul class="menu-list fi">
                <li>
                    <a href="{{url('/')}}" class="en">Home</a>
                    <a href="{{url('/')}}" class="my">ပင်မစာမျက်နှာ</a> 
                </li>

                <li>
                    <a href="{{url('/about')}}" class="en">About</a> 
                    <a href="{{url('/about')}}" class="my">အကြောင်းအရာ</a> 
                </li>
                <li>
                    <a href="{{url('/blogs')}}" class="en">Blogs</a> 
                    <a href="{{url('/blogs')}}" class="my">ဆောင်းပါးများ</a> 
                </li>
                <li>
                    <a href="{{url('/vacancies')}}" class="en">Vacancies</a> 
                    <a href="{{url('/vacancies')}}" class="my">အလုပ်အကိုင်များ</a> 
                </li>
                <li><a href="{{url('/faq')}}" class="en">FAQs</a> 
                    <a href="{{url('/faq')}}" class="my">မေးလေ့ရှိသောမေးခွန်းမျာ</a> 
                </li>

                <li>
                    <a href="{{url('/contact')}}" class="en">Contact</a> 
                    <a href="{{url('/contact')}}" class="my">ဆက်သွယ်ရန်</a> 
                </li>
            </ul>
            
            <div class="d-lg-none d-block">
                <form class="mobile-menu-form">
                    <div class="hotline pt-30">
                        <div class="hotline-icon">
                            <svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.5488 16.106C20.0165 15.5518 19.3745 15.2554 18.694 15.2554C18.0191 15.2554 17.3716 15.5463 16.8173 16.1005L15.0833 17.8291C14.9406 17.7522 14.7979 17.6809 14.6608 17.6096C14.4632 17.5108 14.2766 17.4175 14.1175 17.3187C12.4932 16.2871 11.0171 14.9426 9.6013 13.2031C8.91536 12.3361 8.45441 11.6063 8.11968 10.8655C8.56965 10.4539 8.9867 10.0259 9.39277 9.61431C9.54642 9.46066 9.70007 9.30152 9.85372 9.14787C11.0061 7.9955 11.0061 6.50291 9.85372 5.35054L8.35564 3.85246C8.18553 3.68234 8.00993 3.50674 7.8453 3.33115C7.51606 2.99092 7.17034 2.63972 6.81366 2.31047C6.28137 1.78368 5.64483 1.50381 4.97535 1.50381C4.30588 1.50381 3.65836 1.78368 3.10961 2.31047C3.10412 2.31596 3.10412 2.31596 3.09864 2.32145L1.23289 4.20365C0.530497 4.90605 0.129911 5.7621 0.0421114 6.75533C-0.089588 8.35768 0.382335 9.85027 0.744508 10.827C1.63348 13.2251 2.96145 15.4475 4.94243 17.8291C7.34594 20.699 10.2378 22.9653 13.5413 24.5622C14.8034 25.1603 16.4881 25.8682 18.3703 25.9889C18.4855 25.9944 18.6062 25.9999 18.716 25.9999C19.9836 25.9999 21.0482 25.5445 21.8823 24.639C21.8878 24.628 21.8987 24.6226 21.9042 24.6116C22.1896 24.2659 22.5188 23.9531 22.8645 23.6184C23.1005 23.3934 23.3419 23.1574 23.5779 22.9105C24.1212 22.3453 24.4065 21.6868 24.4065 21.0118C24.4065 20.3314 24.1157 19.6783 23.5614 19.1296L20.5488 16.106ZM22.5133 21.8843C22.5078 21.8843 22.5078 21.8898 22.5133 21.8843C22.2993 22.1148 22.0798 22.3233 21.8439 22.5538C21.4872 22.894 21.125 23.2507 20.7848 23.6513C20.2305 24.2439 19.5775 24.5238 18.7215 24.5238C18.6392 24.5238 18.5514 24.5238 18.4691 24.5183C16.8393 24.414 15.3247 23.7775 14.1888 23.2342C11.0829 21.7307 8.35564 19.596 6.08931 16.8907C4.21808 14.6354 2.96694 12.5501 2.13833 10.3112C1.62799 8.94484 1.44142 7.88026 1.52373 6.87606C1.57861 6.23402 1.82554 5.70174 2.281 5.24628L4.15223 3.37504C4.42112 3.12262 4.70647 2.98543 4.98633 2.98543C5.33204 2.98543 5.6119 3.19396 5.7875 3.36956C5.79299 3.37504 5.79847 3.38053 5.80396 3.38602C6.1387 3.69881 6.45697 4.02257 6.79171 4.36828C6.96182 4.54388 7.13742 4.71948 7.31302 4.90056L8.8111 6.39865C9.39277 6.98032 9.39277 7.51809 8.8111 8.09976C8.65196 8.2589 8.49831 8.41804 8.33918 8.57169C7.87823 9.04361 7.43923 9.48261 6.96182 9.91063C6.95085 9.92161 6.93987 9.92709 6.93438 9.93807C6.46246 10.41 6.55026 10.8709 6.64903 11.1837C6.65452 11.2002 6.66001 11.2167 6.6655 11.2331C7.05511 12.177 7.60385 13.0659 8.43795 14.125L8.44344 14.1305C9.95798 15.9962 11.5548 17.4504 13.3163 18.5644C13.5413 18.7071 13.7718 18.8223 13.9913 18.932C14.1888 19.0308 14.3754 19.1241 14.5345 19.2229C14.5565 19.2339 14.5784 19.2503 14.6004 19.2613C14.787 19.3546 14.9626 19.3985 15.1436 19.3985C15.5991 19.3985 15.8845 19.1131 15.9777 19.0198L17.8545 17.1431C18.041 16.9566 18.3374 16.7316 18.6831 16.7316C19.0233 16.7316 19.3032 16.9456 19.4733 17.1322C19.4788 17.1376 19.4788 17.1376 19.4842 17.1431L22.5078 20.1667C23.0731 20.7265 23.0731 21.3026 22.5133 21.8843Z">
                                </path>
                                <path
                                    d="M14.0512 6.18495C15.4889 6.4264 16.7949 7.10685 17.8375 8.14947C18.8802 9.19209 19.5551 10.4981 19.8021 11.9358C19.8624 12.298 20.1752 12.5504 20.5319 12.5504C20.5758 12.5504 20.6142 12.5449 20.6581 12.5395C21.0642 12.4736 21.3331 12.0895 21.2672 11.6834C20.9709 9.94387 20.1478 8.35799 18.8911 7.10136C17.6345 5.84473 16.0486 5.0216 14.3091 4.72528C13.903 4.65943 13.5244 4.92832 13.4531 5.3289C13.3817 5.72949 13.6451 6.1191 14.0512 6.18495Z">
                                </path>
                                <path
                                    d="M25.9707 11.4691C25.4823 8.60468 24.1324 5.99813 22.0581 3.92387C19.9838 1.8496 17.3773 0.49968 14.5128 0.011294C14.1122 -0.0600432 13.7336 0.214331 13.6623 0.614917C13.5964 1.02099 13.8653 1.39963 14.2714 1.47096C16.8285 1.90447 19.1607 3.11721 21.0155 4.96649C22.8702 6.82125 24.0775 9.15343 24.511 11.7106C24.5714 12.0728 24.8841 12.3252 25.2408 12.3252C25.2847 12.3252 25.3231 12.3197 25.367 12.3142C25.7676 12.2539 26.042 11.8697 25.9707 11.4691Z">
                                </path>
                            </svg>
                        </div>
                        <div class="hotline-info">
                            <span>Call Us Now</span>
                            <h6><a href="#">09-888828181</a></h6>
                        </div>
                    </div>
                    <div class="email pt-20 d-flex align-items-center">
                        <div class="email-icon">
                            <svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_461_205)">
                                    <path
                                        d="M23.5117 3.30075H2.38674C1.04261 3.30075 -0.0507812 4.39414 -0.0507812 5.73827V20.3633C-0.0507812 21.7074 1.04261 22.8008 2.38674 22.8008H23.5117C24.8558 22.8008 25.9492 21.7074 25.9492 20.3633V5.73827C25.9492 4.39414 24.8558 3.30075 23.5117 3.30075ZM23.5117 4.92574C23.6221 4.92574 23.7271 4.94865 23.8231 4.98865L12.9492 14.4131L2.07526 4.98865C2.17127 4.9487 2.27629 4.92574 2.38668 4.92574H23.5117ZM23.5117 21.1757H2.38674C1.93844 21.1757 1.57421 20.8116 1.57421 20.3632V6.70547L12.4168 16.1024C12.57 16.2349 12.7596 16.3008 12.9492 16.3008C13.1388 16.3008 13.3285 16.2349 13.4816 16.1024L24.3242 6.70547V20.3633C24.3242 20.8116 23.96 21.1757 23.5117 21.1757Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="email-info">
                            <span>Email Now</span>
                            <h6><a href="mailto:example@gmail.com">info@mboss.finance</a></h6>
                        </div>
                    </div>
                </form>

                <div class="header-btn5">
                    <a class="primary-btn3" href="assets/img/M BOSS FLYER.pdf" download="M Boss flyer">Download Flyer</a>

                </div>
            </div>
        </div>
        <div class="nav-right d-flex jsutify-content-end align-items-center">
            <div class="header-contact d-xl-block d-none">
                <span><img src="assets/img/home-6/phone.svg" alt="">For Client Support:</span>
                <h6><a href="Tel:29658728617" class="text-orange">09-888828181</a></h6>
            </div>
            <div class="banner-btn-group">
                <a class="primary-btn3" href="assets/img/M BOSS FLYER.pdf" download="M Boss flyer">Download Flyer</a>
            </div>
            <div class="sidebar-button mobile-menu-btn ">
                <span></span>
            </div>
        </div>
    </header>
    
    <!-- End header section -->
    <section></section>
    <!-- End breadcrumbs section -->
    <div class="contact-page-wrap sec-mar">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6">
                    <div class="text-white">
                        <h3>What is buyer?</h3>
                        <p class="text-white">An invoice buyer is a company or financial institution that purchases outstanding invoices from businesses at a discounted rate, providing immediate cash flow to the selling business.</p>
                    </div>
                    <div class="mt-5 text-white">
                        <h3>What is seller?</h3>
                        <p class="text-white">An invoice seller is a business or individual that provides goods or services and issues invoices to customers for payment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="form-tltle">
                            <h5>REGISTER NOW TO KNOW MORE</h5>
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
                                            <label>Email</label>
                                            <input type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Phone</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Password</label>
                                            <input type="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Confirm password</label>
                                            <input type="password">
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
                                            <label>Customer Type</label>
                                            <select class="form-select bg-dark text-white" aria-label="Default select example">
                                                <option selected>Select customer type</option>
                                                <option value="buyer">Buyer</option>
                                                <option value="seller">Seller</option>
                                              </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn3" type="submit">Submit</button>
                                        </div>
                                    </div>

                                    <p class="text-white mt-3">Already a member? <a href="" style="text-decoration: underline; color: #FFCA33;">Sign in</a></p>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer section -->
    <footer class="four en-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-content">
                            <div class="footer-logo">
                                <a href="index.html"><img class="img-fluid" src="assets/img/M-BOSS-Logo-crop.png"
                                        style="width: 90px; height: 90px;" alt=""></a>
                                <span style="color: #FFCA33; font-size: 25px;">M BOSS</span>
                            </div>
                            <div class="footer-contect">
                                <div class="icon" style="margin-right: 10px;">
                                    <i class="fas fa-phone-volume" style="color: #FFCA33; font-size: 50px;"></i>
                                </div>
                                <div class="content">
                                    <span>Call Any Time</span>
                                    <h6><a class="phone-no" href="tel: 29658718617">09-888828181</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-4 col-sm-6 d-flex">
                    <div class="footer-widget">
                        <div class="footer-contact mb-40">
                            <h4>
                                <i class="fas fa-map-marker-alt" style="color: #FFCA33;"></i>
                                Address
                            </h4>
                            <a href="#" class="text-orange">Alanpya Pagoda Road, Mingalar Taung Nyunt, Yangon,
                                Myanamr</a>
                        </div>
                        <div class="footer-contact mb-40">
                            <h4>
                                <i class="fas fa-paper-plane" style="color: #FFCA33;"></i>
                                Say Hello
                            </h4>
                            <a href="mailto:ifo@example.com" class="text-orange">info@mboss.finance</a><br>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-widget">
                        <div class="widget-title text-center">
                            <h4>MBoss Financing</h4>
                        </div>
                        <div class="menu-container text-center">
                            <img src="assets/img/M-BOSS-Logo-crop.png" width="150px" height="auto" alt="mboss">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex justify-content-sm-end">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>Company</h4>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="{{url('/')}}" class="text-orange">Home</a></li>
                                <li><a href="{{url('/about')}}" class="text-orange">About Us</a></li>
                                <li><a href="{{url('/blogs')}}" class="text-orange">Blogs</a></li>
                                <li><a href="{{url('/vacancies')}}" class="text-orange">Vacancies</a></li>
                                <li><a href="{{url('/faq')}}" class="text-orange">FAQ</a></li>
                                <li><a href="{{url('/contact')}}" class="text-orange">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-btn-content">
                            <div class="copyright-area">
                                <p>©Copyright 2023 <a href="#" class="text-orange">MBoss</a> | Design By <a
                                        href="https://www.egenslab.com/" class="text-orange">BigTech</a></p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100092639739552"><i class="bx bxl-facebook"></i></a></li>
                                    
                                    <li><a href="https://www.linkedin.com/company/m-boss/mycompany/verification/"><i class='bx bxl-linkedin-square'></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer class="four my-footer">
        <div class="footer-top my justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-content">
                            <div class="footer-logo">
                                <a href="index.html"><img class="img-fluid" src="assets/img/M-BOSS-Logo-crop.png"
                                        style="width: 90px; height: 90px;" alt=""></a>
                                <span style="color: #FFCA33; font-size: 25px;">M BOSS</span>
                            </div>
                            <div class="footer-contect">
                                <div class="icon" style="margin-right: 10px;">
                                    <i class="fas fa-phone-volume" style="color: #FFCA33; font-size: 50px;"></i>
                                </div>
                                <div class="content">
                                    <span>အချိန်မရွေး ဖုန်းဆက်ပါ။</span>
                                    <h6><a class="phone-no" href="tel: 29658718617">၀၉-၄၄၅၄၂၅၆၅၈</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-lg-4 gy-5 my justify-content-center">
                <div class="col-lg-4 col-sm-6 d-flex">
                    <div class="footer-widget">
                        <div class="footer-contact mb-40">
                            <h4>
                                <i class="fas fa-map-marker-alt" style="color: #FFCA33;"></i>
                                လိပ်စာ
                            </h4>
                            <a href="#" class="text-orange">အလံပြဘုရားလမ်း၊မင်္ဂလာတောင်ညွန့်၊ရန်ကုန်၊
                                မြန်မာ</a>
                        </div>
                        <div class="footer-contact mb-40">
                            <h4>
                                <i class="fas fa-paper-plane" style="color: #FFCA33;"></i>
                                အီးမေးလ်လိပ်စာ
                            </h4>
                            <a href="mailto:ifo@example.com" class="text-orange">info@mboss.finance</a><br>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex justify-content-lg-center">
                    <div class="footer-widget">
                        <div class="widget-title text-center">
                            <h4>MBoss Financing</h4>
                        </div>
                        <div class="menu-container text-center">
                            <img src="assets/img/M-BOSS-Logo-crop.png" width="150px" height="auto" alt="mboss">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex justify-content-sm-end">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>ကုမ္ပဏီ</h4>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="{{url('/')}}" class="text-orange">ပင်မစာမျက်နှာ</a></li>
                                <li><a href="{{url('/about')}}" class="text-orange">အကြောင်းအရာ</a></li>
                                <li><a href="{{url('/blogs')}}" class="text-orange">ဆောင်းပါးများ</a></li>
                                <li><a href="{{url('/vacancies')}}" class="text-orange">အလုပ်အကိုင်များ</a></li>
                                <li><a href="{{url('/faq')}}" class="text-orange">မေးလေ့ရှိသောမေးခွန်းများ</a></li>
                                <li><a href="{{url('/contact')}}" class="text-orange">ဆက်သွယ်ရန်</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-btm">
            <div class="container">
                <div class="row my justify-content-center">
                    <div class="col-lg-12">
                        <div class="footer-btn-content">
                            <div class="copyright-area">
                                <p>©Copyright 2023 <a href="#" class="text-orange">MBoss</a> | Design By <a
                                        href="https://www.egenslab.com/" class="text-orange">BigTech</a></p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100092639739552"><i class="bx bxl-facebook"></i></a></li>
                                    
                                    <li><a href="https://www.linkedin.com/company/m-boss/mycompany/verification/"><i class='bx bxl-linkedin-square'></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="language-select"></div>
    <select id="languageSelector">
        <option value="en" class="text-white">English 🇺🇸</option>
        <option value="my" class="text-white">Myanmar 🇲🇲</option>
    </select>
    </div>
    <!-- End Footer section -->


    <!--  Main jQuery  -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper slider JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Isotope  JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Fancybox  JS -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- GSAP  JS -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <!-- Marquee  JS -->
    <script src="assets/js/jquery.marquee.min.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        
        $(".marquee_text").marquee({
            direction: "left",
            duration: 20000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });

        $(".marquee_text3").marquee({
            direction: "left",
            duration: 30000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });


       
        // Function to switch between languages
        function switchLanguage() {
            var selectedLanguage = document.getElementById("languageSelector").value;
            var englishContent = document.querySelectorAll(".en");
            var spanishContent = document.querySelectorAll(".my");
            var engFooter = document.querySelectorAll(".en-footer");
            var myFooter = document.querySelectorAll(".my-footer");

            if (selectedLanguage === "en") {
                showContent(englishContent);
                showFooterContent(engFooter);
                hideContent(spanishContent);
                hideContent(myFooter);
            } else if (selectedLanguage === "my") {
                showContent(spanishContent);
                showFooterContent(myFooter);
                hideContent(engFooter);
                hideContent(englishContent);

            }
        }

// Helper function to show content
function showContent(elements) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "flex";
    }
}

function showFooterContent(elements) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "block";
    }
}


// Helper function to hide content
function hideContent(elements) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
}

// Event listener for language selector change
document.getElementById("languageSelector").addEventListener("change", switchLanguage);

// Initial language switch (default: English)
switchLanguage();
    </script>

</body>

</html>