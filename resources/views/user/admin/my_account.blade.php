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
          <!--  my account wrapper start -->
            <div class="account_top_information">
                <div class="account_overlay"></div>
                <div class="useriimg"><img src={{ asset ('images/user.png') }} alt="users"></div>
                <div class="userdet uderid">
                    
                    <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                    <h3>ID: FT000{{ Auth::user()->id }} </h3>
                    <dl class="userdescc">
                        <dt>Registration Date</dt>
                        <dd>: &nbsp; {{ Auth::user()->created_at }}</dd>
                        <dt>Purchased Package</dt>
                        <dd>: &nbsp; No Package yet</dd>
                        <!--<dt>Last Login</dt>-->
                        <!--<dd>: &nbsp; Jul-05-2019 07:06:36</dd>-->
                        <!--<dt>Current Login</dt>-->
                        <!--<dd>: &nbsp; Jul-06-2019 02:47:23</dd>-->
                        <!--<dt>Last Access IP</dt>-->
                        <!--<dd>: &nbsp; 27.57.18.1 </dd>-->
                        <!--<dt>Current Access IP</dt>-->
                        <!--<dd>: &nbsp; 122.175.131.51 </dd>-->

                    </dl>

                </div>

                <!--<div class="userdet user_transcation">-->
                <!--    <h3>Available Balance</h3>-->
                <!--    <dl class="userdescc">-->
                <!--        <dt>Paypal</dt>-->
                <!--        <dd>:&nbsp;&nbsp;$ 392.79</dd>-->
                <!--        <dt>Pexpay</dt>-->
                <!--        <dd>:&nbsp;&nbsp;$ 498.61</dd>-->
                <!--        <dt>PerfectMoney</dt>-->
                <!--        <dd>:&nbsp;&nbsp;$ 60.18</dd>-->
                <!--        <dt>Payza</dt>-->
                <!--        <dd>:&nbsp;&nbsp;$ 435</dd>-->
                <!--        <dt>HDMoney</dt>-->
                <!--        <dd>:&nbsp;&nbsp;$ 0.08</dd>-->

                <!--    </dl>-->
                <!--</div>-->
                <div class="userdet user_transcation">
                    <h3 class="none_headung"> &nbsp;</h3>
                    <!--<dl class="userdescc">-->
                    <!--    <dt>EGOpay</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 0</dd>-->
                    <!--    <dt>OKpay</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 0</dd>-->
                    <!--    <dt>Solidtrustpay </dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 0</dd>-->
                    <!--    <dt>Webmoney</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 450</dd>-->
                    <!--    <dt>Bankwire</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 799</dd>-->
                    <!--    <dt>Bitcoin</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 33584</dd>-->

                    <!--</dl>-->

                </div>

            </div>
            <!--  my account wrapper end -->    
            <!--  profile wrapper start -->
             <div class="view_profile_wrapper_top float_left">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>profile</h3>

                        </div>

                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="view_profile_wrapper float_left">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                                    <div class="profile_view_img">
                                        <img src={{ asset ('images/user.png') }} alt="post_img">

                                    </div>
                                    <div class="profile_width_cntnt">
                                        <h4>JPEG or PNG 500x500px Thumbnail</h4>

                                        <div class="width_50">
                                            <input type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">browse image</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                                    <ul class="profile_list">
                                        <li><span class="detail_left_part">Referral ID</span> 
                                        <span class="detail_right_part">{{ Auth::user()->sponser_id }}</span>
                                        </li>
                                        <li>
                                            <span class="detail_left_part">first name</span> 
                                            <span class="detail_right_part">{{ Auth::user()->first_name }}</span>
                                        </li>
                                        <li><span class="detail_left_part">Last Name</span> 
                                        <span class="detail_right_part">{{ Auth::user()->last_name }}</span>
                                        </li>
                                        <li><span class="detail_left_part">Your Email Address</span> 
                                        <span class="detail_right_part">{{ Auth::user()->email }}</span>
                                        </li>
                                        <li><span class="detail_left_part">Mobile No</span> 
                                        <span class="detail_right_part">{{ Auth::user()->phone_number }}</span>
                                        </li>
                                        <!--<li><span class="detail_left_part">Address	</span> <span class="detail_right_part"> india,kolkata</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">City</span> <span class="detail_right_part">koltaka</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">State</span> <span class="detail_right_part">mukundopur</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Country</span> <span class="detail_right_part"> East Timor</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Paypal</span> <span class="detail_right_part"></span>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                                    <ul class="profile_list">
                                        <li><span class="detail_left_part">Payment Mode</span> <span class="detail_right_part">Bitcoin</span>
                                        </li>
                                        <li><span class="detail_left_part">Network Type</span> <span class="detail_right_part">{{ $PayReq->network }}</span>
                                        </li>
                                        <li><span class="detail_left_part">Account ID</span> <span class="detail_right_part">{{ $PayReq->account_id }}</span>
                                        </li>
                                        <!--<li><span class="detail_left_part">HDMoney</span> <span class="detail_right_part"> --Not Updated--</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Paypal</span> <span class="detail_right_part">example@gmail.com</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">EGOpay</span> <span class="detail_right_part"> --Not Updated--</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">OKpay</span> <span class="detail_right_part"> --Not Updated--</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Solidtrustpay</span> <span class="detail_right_part"> --Not Updated--</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Webmoney</span> <span class="detail_right_part"> --Not Updated--</span>-->
                                        <!--</li>-->
                                        <!--<li><span class="detail_left_part">Bankwire</span> <span class="detail_right_part"> BANK OF PAMHYIP</span>-->
                                        <!--</li>-->

                                    </ul>
                                </div>

                                <div class="about_btn float_left">
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#myModal">change</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="modal fade question_modal" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="sv_question_pop float_left">
                                                    <h1>User Security
</h1>
                                                    <div class="search_alert_box float_left">
                                                        <p>Please enter your valid Transaction Pin and edit your account details</p>
                                                        <div class="change_field">

                                                            <input type="text" name="full_name" placeholder="Please enter your transaction pin">
                                                        </div>

                                                    </div>
                                                    <div class="question_sec float_left">
                                                        <div class="about_btn ques_Btn">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">login</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="cancel_wrapper">
                                                            <a href="#" class="" data-dismiss="modal">cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  profile wrapper end -->
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