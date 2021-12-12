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
          href="@isset($setting['favicon']) {{ asset('uploads/'.$setting['favicon']) }}@endisset">
    <title>@isset($setting['site_title']) {{ $setting['site_title'] }}@endisset</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
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
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="index.html"> savehyip </a></h2>
        <a href="#0" class="cd-close">Close</a>
         <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li> 
             <li class="has-children">
                <a href="#">index</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="index.html">index I</a></li>
                    <li><a href="index2.html">index 2</a></li>
                    <li><a href="index3.html">index III</a></li>
                </ul>
            </li>
            <li><a href="about_us.html"> about us </a></li>
            <li><a href="investment.html"> investment plan </a></li>
			<li><a href="faq.html"> FAQ </a></li>
			<li class="has-children">
              <a href="#">dashboard</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                      <li>
                      <a href="all_transactions.html">all transactions</a>
					</li>
                    <li>
                      <a href="banners.html">banners</a>
					</li> 
				   <li>
                      <a href="change_password.html">change password</a>
					</li>
					<li>
                      <a href="change_pin.html">change pin</a>
					</li>
					<li>
                      <a href="deposit_history.html">deposit history</a>
                  </li>
					<li>
                      <a href="deposit_list.html">deposit list</a>
                  </li>
					<li>
                      <a href="earnings_history.html">earnings history</a>
                  </li>
					<li>
                      <a href="email_notification.html">email notification</a>
                  </li>   
					<li>
                      <a href="exchange_history.html">exchange history</a>
                  </li>  
					<li>
						<a href="exchange_money.html">exchange money</a>
                  </li> 
					<li>
                      <a href="make_deposit.html">make deposit</a>
                  </li> 	
					<li>
                      <a href="my_account.html">my account</a>
                  </li> 	
					<li>
                      <a href="payment_request.html">payment request</a>
                  </li> 	
					<li>
                      <a href="pending_history.html">pending history</a>
                  </li> 	
					<li>
                      <a href="referral_earnings.html">referral earnings</a>
                  </li> 	
					<li>
                      <a href="referrals.html">referrals</a>
                  </li> 
					<li>
                      <a href="tickets.html">tickets</a>
                  </li> 	
					<li>
                      <a href="transfer_fund.html">transfer fund</a>
                  </li>
				<li>
                      <a href="view_profile.html">view profile</a>
                  </li> 									
              </ul>
             </li>  
				<li class="has-children">
                <a href="#">blog</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="blog_category.html">blog 123</a></li>
                    <li><a href="blog_single.html">blog single</a></li>
                </ul>
			
            </li>   
            <li><a href="contact_us.html"> contact us </a></li>
            <li><a href="login.html"> login </a></li>
            <li><a href="register.html"> register </a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
	 <div class="cp_navi_main_wrapper inner_header_wrapper dashboard_header_middle float_left">
        <div class="container-fluid">
              <div class="cp_logo_wrapper">
                <a href="index.html">
                    <img src="images/logo2.png" alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">				
                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle inner_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="top_header_right_wrapper dashboard_right_Wrapper">
               <div class="crm_message_dropbox_wrapper">
                        <div class="nice-select budge_noti_wrapper" tabindex="0"> <span class="current"><i class="flaticon-envelope"></i></span>
                            <div class="budge_noti">4</div>
                            <ul class="list">
                                <li><a href="#">2 New Messages</a>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.ajay <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.ajay <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.akshay <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.john <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_all_main_box_wrapper">
                                        <p><a href="#">See All</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
					        <div class="crm_message_dropbox_wrapper crm_notify_dropbox_wrapper">
                        <div class="nice-select budge_noti_wrapper" tabindex="0"> <span class="current"><i class="flaticon-notification"></i></span>
                            <div class="budge_noti">4</div>
                            <ul class="list">
                                <li><a href="#">2 New Messages</a>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.Farhan <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.ajay <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.akshay <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="images/mess1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Mr.john <span>01:30PM</span></h4>
                                            <p>I'm Leaving early</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_all_main_box_wrapper">
                                        <p><a href="#">See All</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="crm_profile_dropbox_wrapper">
                        <div class="nice-select" tabindex="0"> <span class="current"><img src="images/avatar.png" alt="img"> hi, jenny ! <span class="hidden_xs_content"></span></span>
                            <ul class="list">

                                <li><a href="#"><i class="flaticon-profile"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="flaticon-purse"></i> My Balance</a>
                                </li>
                                <li><a href="#"><i class="flaticon-file"></i> My Task</a>
                                </li>
                                <li><a href="#"><i class="flaticon-calendar"></i> My Calender</a>
                                </li>
                                <li><a href="#"><i class="flaticon-envelope"></i> Inbox</a>
                                </li>
                                <li><a href="#"><i class="flaticon-settings"></i> Setting</a>
                                </li>
                                <li><a href="#"><i class="flaticon-help"></i> Help</a>
                                </li>
                                <li><a href="#"><i class="flaticon-padlock"></i> Lock Screen</a>
                                </li>
                                <li><a href="#"><i class="flaticon-turn-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>

            <div class="cp_navigation_wrapper main_top_wrapper dashboard_header">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                     <ul class="main_nav_ul">                                    
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation active_class">index <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="index.html"><i class="fas fa-caret-right"></i>index I</a>
                                </li>
                                <li class="parent">
                                    <a href="index2.html"><i class="fas fa-caret-right"></i>index II</a>
                                </li>
								<li class="parent">
                                    <a href="index3.html"><i class="fas fa-caret-right"></i>index III</a>
                                </li> 								
                            </ul>
                        </li>     
                        <li><a href="about_us.html" class="gc_main_navigation">about us</a></li>
                        <li><a href="investment.html" class="gc_main_navigation">investment plan</a></li>  
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">pages <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="faq.html"><i class="fas fa-caret-right"></i>FAQ</a>
                                </li>
                                <li class="parent">
                                    <a href="login.html"><i class="fas fa-caret-right"></i>login</a>
                                </li>  
								<li class="parent">
                                    <a href="register.html"><i class="fas fa-caret-right"></i>register</a>
                                </li>   								
                            </ul>
                        </li>
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">dashboard <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                              
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>my account<span><i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="my_account.html"> <i class="fas fa-caret-right"></i>my account  </a>
                                        </li>
                                        <li>
                                            <a href="view_profile.html"> <i class="fas fa-caret-right"></i> my profile</a>
                                        </li>
                                        <li>
                                            <a href="email_notification.html"><i class="fas fa-caret-right"></i>email notification </a>
                                        </li>
                                        <li>
                                            <a href="change_password.html"><i class="fas fa-caret-right"></i>change password</a>
                                        </li>
                                        <li>
                                            <a href="change_pin.html"><i class="fas fa-caret-right"></i>change pin</a>
                                        </li>
                                     
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>finance<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="make_deposit.html"> <i class="fas fa-caret-right"></i>make deposit</a>
                                        </li>
                                        <li>
                                            <a href="deposit_list.html"> <i class="fas fa-caret-right"></i> deposit lists</a>
                                        </li>
                                        <li>
                                            <a href="payment_request.html"><i class="fas fa-caret-right"></i>payment request</a>
                                        </li>
                                        <li>
                                            <a href="exchange_money.html"><i class="fas fa-caret-right"></i>exchange money</a>
                                        </li>
                                        <li>
                                            <a href="transfer_fund.html"><i class="fas fa-caret-right"></i>fund transfer</a>
                                        </li>
                                     
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>reports<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="all_transactions.html"> <i class="fas fa-caret-right"></i>all transactions</a>
                                        </li>
                                        <li>
                                            <a href="deposit_history.html"> <i class="fas fa-caret-right"></i> deposit history</a>
                                        </li>
                                        <li>
                                            <a href="pending_history.html"><i class="fas fa-caret-right"></i>pending history</a>
                                        </li>
                                        <li>
                                            <a href="exchange_history.html"><i class="fas fa-caret-right"></i>exchange history</a>
                                        </li>
                                        <li>
                                            <a href="earnings_history.html"><i class="fas fa-caret-right"></i>earning history</a>
                                        </li>
                                     
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>referrals<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="referrals.html"> <i class="fas fa-caret-right"></i>my referrals</a>
                                        </li>
                                        <li>
                                            <a href="banners.html"> <i class="fas fa-caret-right"></i> promotionals banners</a>
                                        </li>
                                        <li>
                                            <a href="referral_earnings.html"><i class="fas fa-caret-right"></i>referral earnings</a>
                                        </li>
                                      
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="tickets.html"><i class="fas fa-caret-right"></i>view tickets</a></li>
                            </ul>
                        </li>						
						    						
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">blog <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="blog_category.html"><i class="fas fa-caret-right"></i>blog 112</a>
                                </li>
                                <li class="parent">
                                    <a href="blog_single.html"><i class="fas fa-caret-right"></i> blog single</a>
                                </li>                   
                            </ul>
                        </li>     
                        <li><a href="contact_us.html" class="gc_main_navigation">contact us</a></li>
                    </ul>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>

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
	<div class="l-sidebar">
            <div class="l-sidebar__content">
                <nav class="c-menu js-menu" id="mynavi">
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="my_account.html"><i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                                <ul class="crm_hover_menu">
                                    <li><a href="my_account.html"><i class="fa fa-circle"></i> my account</a>
                                    </li>
                                    <li><a href="view_profile.html"><i class="fa fa-circle"></i> my profile</a>
                                    </li>                      
                                    <li><a href="email_notification.html"><i class="fa fa-circle"></i>email notification</a>
                                    </li>
                                    <li><a href="change_password.html"><i class="fa fa-circle"></i>change password</a>
                                    </li>
									  <li><a href="change_pin.html"><i class="fa fa-circle"></i>change pin</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="my_account.html">
                                <div class="c-menu-item__title"><span>my account</span><i class="no_badge">5</i>
                                </div>
                            </a>
                            <ul>
                                 <li><a href="my_account.html"><i class="fa fa-circle"></i> my account</a>
                                 </li>
                                 <li><a href="view_profile.html"><i class="fa fa-circle"></i> my profile</a>
                                 </li>                      
                                 <li><a href="email_notification.html"><i class="fa fa-circle"></i>email notification</a>
                                 </li>
                                 <li><a href="change_password.html"><i class="fa fa-circle"></i>change password</a>
                                 </li>
								<li><a href="change_pin.html"><i class="fa fa-circle"></i>change pin</a>
                                 </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="make_deposit.html"><i class="flaticon-movie-tickets"></i></a>
                                <ul class="crm_hover_menu">
                                    <li>
                                        <a href="make_deposit.html"> <i class="fa fa-circle"></i>make deposit</a>
                                    </li>
                                    <li>
                                        <a href="deposit_list.html"> <i class="fa fa-circle"></i> deposit lists</a>
                                    </li>
                                    <li>
                                        <a href="payment_request.html"> <i class="fa fa-circle"></i> payment request</a>
                                    </li>
                                    <li>
                                        <a href="exchange_money.html"> <i class="fa fa-circle"></i>exchange money</a>
                                    </li>
                                    <li>
                                        <a href="transfer_fund.html"> <i class="fa fa-circle"></i>fund transfer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="make_deposit.html">
                                <div class="c-menu-item__title"><span>finance</span><i class="no_badge">5</i>
                                </div>
                            </a>
                            <ul>
                                 <li>
                                        <a href="make_deposit.html"> <i class="fa fa-circle"></i>make deposit</a>
                                    </li>
                                    <li>
                                        <a href="deposit_list.html"> <i class="fa fa-circle"></i> deposit lists</a>
                                    </li>
                                    <li>
                                        <a href="payment_request.html"> <i class="fa fa-circle"></i> payment request</a>
                                    </li>
                                    <li>
                                        <a href="exchange_money.html"> <i class="fa fa-circle"></i>exchange money</a>
                                    </li>
                                    <li>
                                        <a href="transfer_fund.html"> <i class="fa fa-circle"></i>fund transfer</a>
                                    </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="transfer_fund.html"><i class="flaticon-progress-report"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="transfer_fund.html">
                                <div class="c-menu-item__title">fund transfer</div>
                            </a>
                        </li>
                    </ul>         
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="all_transactions.html"><i class="flaticon-help"></i></a>
                                <ul class="crm_hover_menu">
                                    <li><a href="all_transactions.html"><i class="fa fa-circle"></i> all transactions</a>
                                    </li>
                                    <li><a href="deposit_history.html"><i class="fa fa-circle"></i>deposit history</a>
                                    </li>
									 <li><a href="pending_history.html"><i class="fa fa-circle"></i>pending history</a>
                                    </li>
									 <li><a href="exchange_history.html"><i class="fa fa-circle"></i>exchange history</a>
                                    </li>
									 <li><a href="earnings_history.html"><i class="fa fa-circle"></i>earning history</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="all_transactions.html">
                                <div class="c-menu-item__title"><span>reports</span><i class="no_badge purple">5</i>
                                </div>
                            </a>
                            <ul>
                              <li><a href="all_transactions.html"><i class="fa fa-circle"></i> all transactions</a>
                                    </li>
                                    <li><a href="deposit_history.html"><i class="fa fa-circle"></i>deposit history</a>
                                    </li>
									 <li><a href="pending_history.html"><i class="fa fa-circle"></i>pending history</a>
                                    </li>
									 <li><a href="exchange_history.html"><i class="fa fa-circle"></i>exchange history</a>
                                    </li>
									 <li><a href="earnings_history.html"><i class="fa fa-circle"></i>earning history</a>
                                    </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="tickets.html"><i class="flaticon-file"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="tickets.html">
                                <div class="c-menu-item__title">view tickets</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="referrals.html"><i class="flaticon-settings"></i></a>
                                <ul class="crm_hover_menu">
                                    <li><a href="referrals.html"><i class="fa fa-circle"></i> my referrals </a>
                                    </li>
                                    <li>
                                        <a href="banners.html"> <i class="fa fa-circle"></i>promotionals banners</a>
                                    </li>
									 <li>
                                        <a href="referral_earnings.html"> <i class="fa fa-circle"></i>referral earnings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title"><span>referrals</span><i class="no_badge purple">2</i>
                                </div>
                            </a>
                            <ul>
                                <li><a href="referrals.html"><i class="fa fa-circle"></i> my referrals </a>
                                </li>
                                <li>
                                  <a href="banners.html"> <i class="fa fa-circle"></i>promotionals banners</a>
                                </li>
								<li>
                                  <a href="referral_earnings.html"> <i class="fa fa-circle"></i>referral earnings</a>
                                 </li>
                            </ul>
                        </li>
                    </ul>
					  <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="make_deposit.html"><i class="flaticon-profile"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="make_deposit.html">
                                <div class="c-menu-item__title">deposit</div>
                            </a>
                        </li>
                    </ul>   
                </nav>
            </div>
        </div>
        <!-- Main section Start -->
         <div class="l-main">         
          <!--  my account wrapper start -->
            <div class="account_top_information">
                <div class="account_overlay"></div>
                <div class="useriimg"><img src="images/user.png" alt="users"></div>
                <div class="userdet uderid">
                    <h3>Benmathew</h3>

                    <dl class="userdescc">
                        <dt>Registration Date</dt>
                        <dd>: &nbsp; Sep-10-2014 11:20:37</dd>
                        <dt>Last Login</dt>
                        <dd>: &nbsp; Jul-05-2019 07:06:36</dd>
                        <dt>Current Login</dt>
                        <dd>: &nbsp; Jul-06-2019 02:47:23</dd>
                        <dt>Last Access IP</dt>
                        <dd>: &nbsp; 27.57.18.1 </dd>
                        <dt>Current Access IP</dt>
                        <dd>: &nbsp; 122.175.131.51 </dd>

                    </dl>

                </div>

                <div class="userdet user_transcation">
                    <h3>Available Balance</h3>
                    <dl class="userdescc">
                        <dt>Paypal</dt>
                        <dd>:&nbsp;&nbsp;$ 392.79</dd>
                        <dt>Pexpay</dt>
                        <dd>:&nbsp;&nbsp;$ 498.61</dd>
                        <dt>PerfectMoney</dt>
                        <dd>:&nbsp;&nbsp;$ 60.18</dd>
                        <dt>Payza</dt>
                        <dd>:&nbsp;&nbsp;$ 435</dd>
                        <dt>HDMoney</dt>
                        <dd>:&nbsp;&nbsp;$ 0.08</dd>

                    </dl>
                </div>
                <div class="userdet user_transcation">
                    <h3 class="none_headung"> &nbsp;</h3>
                    <dl class="userdescc">
                        <dt>EGOpay</dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>OKpay</dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>Solidtrustpay </dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>Webmoney</dt>
                        <dd>:&nbsp;&nbsp;$ 450</dd>
                        <dt>Bankwire</dt>
                        <dd>:&nbsp;&nbsp;$ 799</dd>
                        <dt>Bitcoin</dt>
                        <dd>:&nbsp;&nbsp;$ 33584</dd>

                    </dl>

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
                                        <img src="images/user.png" alt="post_img">

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
                                        <li><span class="detail_left_part">Referral Name
</span> <span class="detail_right_part">--Nill--
</span>
                                        </li>
                                        <li><span class="detail_left_part">first name
 </span> <span class="detail_right_part">akshay
</span>
                                        </li>
                                        <li><span class="detail_left_part">Last Name</span> <span class="detail_right_part">handge
</span>
                                        </li>
                                        <li><span class="detail_left_part">Your Email Address</span> <span class="detail_right_part">--Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">Address	</span> <span class="detail_right_part"> india,kolkata</span>
                                        </li>
                                        <li><span class="detail_left_part">Mobile No</span> <span class="detail_right_part">--Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">City</span> <span class="detail_right_part">koltaka</span>
                                        </li>
                                        <li><span class="detail_left_part">State</span> <span class="detail_right_part">mukundopur</span>
                                        </li>
                                        <li><span class="detail_left_part">Country</span> <span class="detail_right_part"> East Timor</span>
                                        </li>
                                        <li><span class="detail_left_part">Paypal</span> <span class="detail_right_part">azamsheikh645@gmail.com</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                                    <ul class="profile_list">
                                        <li><span class="detail_left_part">Pexpay</span> <span class="detail_right_part">--Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">PerfectMoney</span> <span class="detail_right_part">U19230295</span>
                                        </li>
                                        <li><span class="detail_left_part">Payza</span> <span class="detail_right_part">azamsheikh645@gmail.com</span>
                                        </li>
                                        <li><span class="detail_left_part">HDMoney</span> <span class="detail_right_part"> --Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">Paypal</span> <span class="detail_right_part">azamsheikh645@gmail.com</span>
                                        </li>
                                        <li><span class="detail_left_part">EGOpay</span> <span class="detail_right_part"> --Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">OKpay</span> <span class="detail_right_part"> --Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">Solidtrustpay</span> <span class="detail_right_part"> --Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">Webmoney</span> <span class="detail_right_part"> --Not Updated--</span>
                                        </li>
                                        <li><span class="detail_left_part">Bankwire</span> <span class="detail_right_part"> BANK OF PAMHYIP</span>
                                        </li>

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
                                <p>2019 Copyright © <a href="#"> savehyip </a> . All Rights Reserved.</p>
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
<script src="{{ mix('js/zipped/jquery-3.3.1.min.js') }}"></script>
<script src="{{ mix('js/zipped/bootstrap.min.js') }}"></script>
<script src="{{ mix('js/zipped/modernizr.js') }}"></script>
<script src="{{ mix('js/zipped/dropify.min.js') }}"></script>
<script src="{{ mix('js/zipped/owl.carousel.js') }}"></script>
<script src="{{ mix('js/zipped/jquery.countTo.js') }}"></script>
<script src="{{ mix('js/zipped/plugin.js') }}"></script>
<script src="{{ mix('js/zipped/jquery.inview.min.js') }}"></script>
<script src="{{ mix('js/zipped/jquery.magnific-popup.js') }}"></script>
<script src="{{ mix('js/zipped/jquery.nice-select.min.js') }}"></script>
<script src="{{ mix('js/zipped/datatables.js') }}"></script>
<script src="{{ mix('js/zipped/jquery.menu-aim.js') }}"></script>
<script src="{{ mix('js/zipped/custom.js') }}"></script>
@yield('scripts')
</body>

</html>
