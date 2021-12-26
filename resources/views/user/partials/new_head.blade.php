<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/png" sizes="16x16"
      href="@isset($setting['favicon']){{ asset('uploads/'.$setting['favicon']) }}@endisset">
<title>@isset($setting['site_title']){{ $setting['site_title'] }}@endisset</title>
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{ mix('css/new/admin-master.css') }}">

<!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/flaticon2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/dropify.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ mix('css/new/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ mix('css/new/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/datatables.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/new/responsive.css') }}" />
    <!--Template style -->
    
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield('stylesheets')