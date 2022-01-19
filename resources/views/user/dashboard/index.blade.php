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

   <!--preloader Start -->
{{--    <div id="preloader">--}}
{{--        <div id="status">--}}
{{--            <img src="{{ asset('images/loader.gif')}}" id="preloader_image" alt="loader">--}}
{{--        </div>--}}
{{--    </div>--}}
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
    <!-- sidebar starts -->
    @include('user.partials.new_sidebar')
    <!-- sidebar ends -->
        <!-- Main section Start -->
         <div class="l-main">
          <!--  my account wrapper start -->
            <div class="account_top_information">
                <div class="account_overlay"></div>
                <div class="useriimg"><img src={{ asset ('images/user.png') }} alt="users"></div>
                <div class="userdet uderid">
                    <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                    <h3>ID: FT000{{ Auth::user()->id }}</h3>
                    <dl class="userdescc">
                        <dt>Registration Date</dt>
                        <dd>: &nbsp; {{ Auth::user()->created_at }}</dd>
                        <dt>Purchased Package</dt>
                        <dd>: &nbsp; @isset($package->name){{$package->name}}@endisset</dd>
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

                <div class="userdet user_transcation">
                    <!--<h3>Available Balance</h3>-->
                    <!--<dl class="userdescc">-->
                    <!--    <dt>Paypal</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 392.79</dd>-->
                    <!--    <dt>Pexpay</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 498.61</dd>-->
                    <!--    <dt>PerfectMoney</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 60.18</dd>-->
                    <!--    <dt>Payza</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 435</dd>-->
                    <!--    <dt>HDMoney</dt>-->
                    <!--    <dd>:&nbsp;&nbsp;$ 0.08</dd>-->

                    <!--</dl>-->
                </div>
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
            <!--  account wrapper start -->
            <div class="account_wrapper float_left">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>my account</h3>

                        </div>
                        <!--<div class="payment_gateway_wrapper">-->
                        <!--    <select>-->
                        <!--        <option selected>choose payment gateway</option>-->
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
                        <!--        <option value="12">bitcoin</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_1 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>deposits</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Active Deposit</td>
                                                <td class="invest_td1"> : @isset($deposit->active_deposit){{'$ '.$deposit->active_deposit.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">New Deposit</td>
                                                <td class="invest_td1"> : @isset($deposit->new_deposit){{'$ '.$deposit->new_deposit.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Matured Deposit</td>
                                                <td class="invest_td1"> : @isset($deposit->matured_deposit){{'$ '.$deposit->matured_deposit.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Released Deposit</td>
                                                <td class="invest_td1"> : @isset($deposit->released_deposit){{'$ '.$deposit->released_deposit.'.00 USD'}}@endisset</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_2 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>referral</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Profit today</td>
                                                <td class="invest_td1"> : @isset($refferal->today_interest){{'$ '.$refferal->today_interest.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Profit this week</td>
                                                <td class="invest_td1"> : @isset($refferal->weekly_interest){{'$ '.$refferal->weekly_interest.'.00 USD'}}@endisset</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_4 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>Total team</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Direct team</td>
                                                <td class="invest_td1"> : @isset($team->direct_team){{$team->direct_team}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">All team</td>
                                                <td class="invest_td1">: @isset($team->all_team){{$team->all_team}}@endisset</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_2 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>payouts</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">total payouts</td>
                                                <td class="invest_td1"> : @isset($payout->total_payout){{'$ '.$payout->total_payout.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">pending payouts</td>
                                                <td class="invest_td1"> : @isset($payout->pending_payout){{'$ '.$payout->pending_payout.'.00 USD'}}@endisset</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_6 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>Profit earned</h1>
                                </div>
                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Profit today</td>
                                                <td class="invest_td1"> : @isset($interest->today_interest){{'$ '.$interest->today_interest.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Profit this week</td>
                                                <td class="invest_td1"> : @isset($interest->weekly_interest){{'$ '.$interest->weekly_interest.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Profit this month</td>
                                                <td class="invest_td1"> : @isset($interest->monthly_interest){{'$ '.$interest->monthly_interest.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Total Profit earnings</td>
                                                <td class="invest_td1"> : @isset($interest->interest_earning){{'$ '.$interest->interest_earning.'.00 USD'}}@endisset</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_5 float_left">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>Bonuses</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="new_bx_td">Generation This Week</td>
                                                <td class="new_bx_td"> : @isset($bonus->week){{'$ '.$bonus->week.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="new_bx_td">Total Generation</td>
                                                <td class="new_bx_td"> : @isset($bonus->total){{'$ '.$bonus->total.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="new_bx_td">Ranks</td>
                                                <td class="new_bx_td"> : @isset($bonus->ranks){{'$ '.$bonus->ranks.'.00 USD'}}@endisset</td>
                                            </tr>
                                            <tr>
                                                <td class="new_bx_td">Rewards</td>
                                                <td class="new_bx_td"> : @isset($bonus->rewards){{'$ '.$bonus->rewards.'.00 USD'}}@endisset</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  account wrapper end -->
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
