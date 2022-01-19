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
{{--<div id="preloader">--}}
{{--    <div id="status">--}}
{{--        <img src="{{ asset('images/loader.gif') }}" id="preloader_image" alt="loader">--}}
{{--    </div>--}}
{{--</div>--}}
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

                    <h1>Deposit Funds</h1>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-5">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li><a href="#"> Home </a>&nbsp; / &nbsp;</li>
                            <li>Deposit Funts</li>
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
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Sponsers List</h3>
                <div class="card-body">
                    @include('admin.partials._msg')
                    @if(!empty($levels))
                        <div class="table table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox checkbox-success m-0">
                                            <input type="checkbox">
                                            <label for="checkbox3"></label>
                                        </div>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>UserID</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($levels as $level)
                                    <tr>
                                        <td></td>
                                        <td>{{$level->id}}</td>
                                        <td>{{$level->user_name}}</td>
                                        <td>{{$level->email}}</td>
                                        <td>{{$level->userid}}</td>
                                        <td>{{$level->created_at}}</td>
                                        <td>
                                            <!--<a href="{{route('user.levels-delete', $level->id)}}"-->
                                            <!--   class="btn btn-sm btn-circle btn-danger"><i class="fa fa-trash"></i></a>-->
                                            <a href="{{route('levels', $level->id)}}"
                                               class="btn btn-sm btn-circle btn-primary"><i
                                                    class="fa fa-search"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $levels->links() !!}
                            </div>
                        </div>
                    @else
                        <h3>Record not found</h3>
                    @endif
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
                        <p>
                            {{ date('Y') }} &copy; @isset($setting['copy_right']){{ $setting['copy_right'] }}@endisset</p>
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

