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
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('images/loader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
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
	@include('user.partials.new_sidebar')
        <!-- Main section Start -->
         <div class="l-main">         
          <!--  my account wrapper start -->
            <div class="account_top_information">
                <div class="account_overlay"></div>
                <div class="useriimg"><img src={{ asset ('images/user.png') }} alt="users"></div>
                <div class="userdet uderid">
                    
                    <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                     <h3>User ID </h3><h6>FT000{{ Auth::user()->id }}</h6>
                    <dl class="userdescc">
                        <dt>Registration Date</dt>
                        <dd>: &nbsp; {{ Auth::user()->created_at }}</dd>
                        <dt>Last Login</dt>
                        <dd>: &nbsp; Jul-05-2019 07:06:36</dd>
                        <!--<dt>Current Login</dt>-->
                        <!--<dd>: &nbsp; Jul-06-2019 02:47:23</dd>-->
                        <!--<dt>Last Access IP</dt>-->
                        <!--<dd>: &nbsp; 27.57.18.1 </dd>-->
                        <!--<dt>Current Access IP</dt>-->
                        <!--<dd>: &nbsp; 122.175.131.51 </dd>-->

                    </dl>

                </div>
                <div class="userdet user_transcation">
                    <h3>Deposit Address</h3>
                    <dl class="userdescc">
                        <dt>Network</dt>
                        <dd>:&nbsp;&nbsp;BEP20</dd>
                        <dt>Wallet</dt>
                        <dd>:&nbsp;&nbsp;Spot Wallet</dd>
                        <dt>Address</dt>
                        <dd>:&nbsp;&nbsp;<input class="form-control" type="text" id="address" value="0x3971602cc1cc5f6c51cc8a68ab4ff7650413304c" readonly></dd>
                
                        <!--<dt>Payza</dt>-->
                        <!--<dd>:&nbsp;&nbsp;$ 435</dd>-->
                        <!--<dt>HDMoney</dt>-->
                        <!--<dd>:&nbsp;&nbsp;$ 0.08</dd>-->
                    </dl>
                </div>
                <div class="userdet user_transcation">
                    <img src="{{ asset('images/wallet_address.png')}}" width="130px">
                    <!--<h3 class="none_headung"> &nbsp;</h3>-->
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
            <div class="payment_transfer_Wrapper float_left">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper heading_center">

                            <h3>Enter your details</h3>

                        </div>

                    </div>
                </div>
            
            <form class="form-horizontal" method="post" action="{{ route('payment_request') }}">
                @include('user.partials._msg')
                @csrf
                <div class="row">
                     <div class="col-md-12 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-sm-12 col-12">
                        <div class="change_password_wrapper float_left">
                            <div class="change_pass_field float_left">  
                        <!--    <div class="payment_gateway_wrapper payment_select_wrapper">-->
                        <!--    <label>Select Payment Mode :</label>-->
                        <!--    <select>-->
                        <!--        <option value="bitcoin">bitcoin</option>-->
                        <!--        <option selected>choose gateway</option>-->
                        <!--        <option value="1">paypal</option>-->
                        <!--        <option value="2">pexpay</option>-->
                        <!--        <option value="3">perfectMoney</option>-->
                        <!--        <option value="4">perfectMoney</option>-->
                        <!--        <option value="5">payza</option>-->
                        <!--        <option value="6">HDMoney</option>-->
                        <!--        <option value="7">EGOpay</option>-->
                        <!--        <option value="8">OKpay</option>-->
                        <!--        <option value="9">solid trust pay</option>-->
                        <!--        <option value="10">webmoney</option>-->
                        <!--        <option value="11">bankwire</option>-->
                        <!--    </select>-->
                        <!--    </div>-->
                                <div class="change_field">
                                    <label>Payment Mode :</label>
                                        <input type="text" placeholder="Bitcoin" name="payment_mode"
                                       class="form-control" autofocus id="payment_mode" value="bitcoin" readonly>
                                        <div class="clearfix"></div>
                                </div> 
                                <div class="change_field">
                                    <label>Account ID :</label>
                                        <input type="text" placeholder="Your Account ID" name="account_id"
                                       class="form-control @error('account_id') is-invalid @enderror" required autofocus id="account">
                                        @error('account_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <div class="clearfix"></div>
                                </div>                               
                                <div class="about_btn float_left">
                                    <ul>
                                        <li>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">submit</button>
                                        </li>
                                    </ul>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
