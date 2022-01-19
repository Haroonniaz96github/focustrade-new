<!DOCTYPE html>
<html lang="en">
<head>
    @php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16"
          href="@isset($setting['favicon']) {{ asset('images/'.$setting['favicon']) }}@endisset">
    <title>@isset($setting['site_title']) {{ $setting['site_title'] }}@endisset</title>
    <link href=" https://focustrade.us/uploads/focus-fav.jpg" rel="icon">
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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">

  <!-- preloader Start -->
    <!--<div id="preloader">-->
    <!--    <div id="status">-->
    <!--        <img src="images/loader.gif" id="preloader_image" alt="loader">-->
    <!--    </div>-->
    <!--</div>-->
    <div class="cursor"></div>
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fa fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    @include('user.partials.new_nav')

    <!-- navi wrapper End -->
    <!-- inner header wrapper start -->
    <div class="page_title_section dashboard_title">

        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-7">

                        <h1>View Profile</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>View Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner header wrapper end -->
	<!-- Sidebar Starts -->
	@include('user.partials.new_sidebar')
	<!--Sidebar Ends -->
        <!-- Main section Start -->
         <div class="l-main">         
            
            <!--investment plan wrapper start -->
            <div class="sv_pricing_paln fixed_portion  float_left">
                <div class="container">
                    <div class="row">
        
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading">
        
                                <h4> our plans </h4>
                                <h3> Our Investment Plans </h3>
        
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle">
                                    <i class="flaticon-bar-chart"></i>
                                </div>
                                <div class="investment_border_wrapper"></div>
                                <div class="investment_content_wrapper">
                                    <h1><a href="#">Sapphire</a></h1>
                                    
                                    <p> Min deposit: $100
                                        <br> Max deposit: $499
                                        <br> Per month profit 7-12%</li>
                                        <br> Expected 6 month profit $335</li>
                                        <br> Expected 12 month profit $670</li>
                                        <br> Expected 18 month profit $1005</li>
                                        
                                    </p>
                                </div>
                                <div class="about_btn plans_btn">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle red_info_circle">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="investment_border_wrapper red_border_wrapper"></div>
                                <div class="investment_content_wrapper red_content_wrapper">
                                    <h1><a href="#">Tanzanite</a></h1>
                                    <p> Min deposit: $500
                                        <br> Max deposit: $1499
                                        <br>Per month profit 7-12%
                                        <br> Expected 6 month profit $1007
                                        <br> Expected 12 month profit $2014
                                        <br> Expected 18 month profit $3021
                                    </p>
                                        
                                </div>
                                <div class="about_btn plans_btn red_btn_plans">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle blue_icon_circle">
                                    <i class="flaticon-gold"></i>
                                </div>
                                <div class="investment_border_wrapper blue_border_wrapper"></div>
                                <div class="investment_content_wrapper blue_content_wrapper">
                                    <h1><a href="#">White Pearl</a></h1>
                                    <p> Min deposit: $1500
                                        <br> Max deposit: $2999
                                        <br>Per month profit 7-12%
                                        <br> Expected 6 month profit $2015
                                        <br> Expected 12 month profit $4030
                                        <br> Expected 18 month profit $6045
                                    </p>
                                </div>
                                <div class="about_btn plans_btn blue_btn_plans">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle green_info_circle">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <div class="investment_border_wrapper green_border_wrapper"></div>
                                <div class="investment_content_wrapper green_content_wrapper">
                                    <h1><a href="#">Emerald</a></h1>
                                    <p> Min deposit: $3000
                                        <br> Max deposit: $5999
                                        <br>Per month profit 7-12%
                                        <br> Expected 6 month profit $4031
                                        <br> Expected 12 month profit $8062
                                        <br> Expected 18 month profit $12093
                                    </p>
                                </div>
                                <div class="about_btn plans_btn green_plan_btn">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle green_info_circle">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <div class="investment_border_wrapper green_border_wrapper"></div>
                                <div class="investment_content_wrapper green_content_wrapper">
                                    <h1><a href="#">Ruby</a></h1>
                                    <p> Min deposit: $6000
                                        <br> Max deposit: $9999
                                        <br>Per month profit 7-12%
                                        <br> Exp. 6 month profit $6719
                                        <br>Exp. 12 month profit $13438
                                        <br> Exp. 18 month profit $20157
                                    </p>
                                </div>
                                <div class="about_btn plans_btn green_plan_btn">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6 col-12">
                            <div class="investment_box_wrapper sv_pricing_border float_left">
                                <div class="investment_icon_circle green_info_circle">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <div class="investment_border_wrapper green_border_wrapper"></div>
                                <div class="investment_content_wrapper green_content_wrapper">
                                    <h1><a href="#">White Diamond</a></h1>
                                    <p> Min deposit: $10000 - 
                                        <br> Max deposit:$25000
                                        <br>Per month profit 7-12%
                                        <br> Expected 6 month profit $16800
                                        <br> Expected 12 month profit $33600
                                        <br> Expected 18 month profit $50400
                                    </p>
                                </div>
                                <div class="about_btn plans_btn green_plan_btn">
                                    <ul>
                                        <li>
                                            <a href="#">read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--investment plan wrapper end -->
            <!--  footer  wrapper start -->
            <div class="copy_footer_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="crm_left_footer_cont">
                                <p>{{ date('Y') }} &copy; @isset($setting['copy_right']){{ $setting['copy_right'] }}@endisset</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
         </div>
       <!--  footer  wrapper end -->      
    <!-- main box wrapper End-->
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
