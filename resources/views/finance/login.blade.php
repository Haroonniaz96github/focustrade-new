<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="focustrade" />
    <meta name="keywords" content="focus trade" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
        <!--Template style -->
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/animate.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/bootstrap.min.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/fonts.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/flaticon2.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/dropify.min.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/font-awesome.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/nice-select.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/owl.carousel.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/owl.theme.default.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/magnific-popup.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/datatables.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/reset.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/style.css')}} />
    <link rel="stylesheet" type="text/css" href={{ asset('css/new/responsive.css')}} />
    <script src="https://kit.fontawesome.com/0f9112801b.js" crossorigin="anonymous"></script>
    <!--Template style -->
    <!--favicon-->
    <!--<link rel="shortcut icon" type="image/png" href="" />-->
</head>

<body>
    <!-- <div class="cursor"></div> -->
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->

    <!-- inner header wrapper start -->
    <!--<div class="page_title_section">-->

    <!--    <div class="page_header">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->

    <!--                <div class="col-lg-9 col-md-9 col-12 col-sm-8">-->

    <!--                    <h1>login</h1>-->
    <!--                </div>-->
    <!--                <div class="col-lg-3 col-md-3 col-12 col-sm-4">-->
    <!--                    <div class="sub_title_section">-->
    <!--                        <ul class="sub_title">-->
    <!--                            <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>-->
    <!--                            <li>login</li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- inner header wrapper end -->
    <!-- login wrapper start -->
    <div class="login_wrapper fixed_portion float_left">
        <div class="container">
            <form class="form-horizontal" method="post" action="{{ route ('finance_login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="login_top_box float_left">
                            <div class="login_banner_wrapper">
                                <!--<img src="images/logo2.png" alt="logo">-->
                                <!-- <div class="about_btn  facebook_wrap float_left">
    
                                    <a href="#">login with facebook <i class="fab fa-facebook-f"></i></a>
    
                                </div>
                                <div class="about_btn google_wrap float_left">
    
                                    <a href="#">login with pinterest <i class="fab fa-pinterest-p"></i></a>
    
                                </div>
                                <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                    <h1>OR</h1>
                                </div> -->
                            </div>
                            <div class="login_form_wrapper">
                                <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">
    
                                    <h3> login to enter</h3>
                                    @include('user.partials._msg')
                                </div>
                                <div class="form-group icon_form comments_form">
    
                                    <input type="text" class="form-control require" name="email" placeholder="Email Address*">
                                  
                                </div>
                                <div class="form-group icon_form comments_form">
    
                                    <input type="password" class="form-control require" name="password" placeholder="Password *">
                                 
                                </div>
                                <div class="login_remember_box">
                                    <!--<label class="control control--checkbox">Remember me-->
                                    <!--    <input type="checkbox">-->
                                    <!--    <span class="control__indicator"></span>-->
                                    <!--</label>-->
            <!--                        <a href="#" class="forget_password">-->
    								<!--	Forgot Password-->
    								<!--</a>-->
                                </div>
                                <div class="about_btn login_btn float_left">
                                    <button type="submit" class="login_submit">login</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- login wrapper end -->
    
    
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src={{ asset('js/new/jquery-3.3.1.min.js') }} ></script>
<script src={{ asset('js/new/bootstrap.min.js') }} ></script>
<script src={{ asset('js/new/modernizr.js') }} ></script>
<script src={{ asset('js/new/dropify.min.js') }} ></script>
<script src={{ asset('js/new/owl.carousel.js') }} ></script>
<script src={{ asset('js/new/jquery.countTo.js') }} ></script>
<script src={{ asset('js/new/plugin.js') }} ></script>
<script src={{ asset('js/new/jquery.inview.min.js') }} ></script>
<script src={{ asset('js/new/jquery.magnific-popup.js') }} ></script>
<script src={{ asset('js/new/jquery.nice-select.min.js') }} ></script>
<script src={{ asset('js/new/datatables.js') }} ></script>
<script src={{ asset('js/new/jquery.menu-aim.js') }} ></script>
<script src={{ asset('js/new/custom.js') }} ></script>
@yield('scripts')
</body>

</html>