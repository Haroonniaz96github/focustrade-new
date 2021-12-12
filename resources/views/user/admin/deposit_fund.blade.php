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
    <nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="#"> Focustrade </a></h2>
        <a href="#0" class="cd-close">Close</a>
         <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li> 
             <li class="has-children">
                <a href="#">index</a>
                <!--<ul class="cd-secondary-dropdown icon_menu is-hidden">-->
                <!--    <li class="go-back"><a href="#0">Menu</a></li>-->
                <!--    <li><a href="index.html">index I</a></li>-->
                <!--    <li><a href="index2.html">index II</a></li>-->
                <!--    <li><a href="index3.html">index III</a></li>-->
                <!--</ul>-->
            </li>
            <li><a href="about_us.html"> about us </a></li>
            <li><a href="investment.html"> investment plan </a></li>
			<li><a href="faq.html"> FAQ </a></li>
			<li class="has-children">
              <a href="#">dashboard</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                      <li>
                      <a href="#ions.html">all transactions</a>
					</li>
                    <li>
                      <a href="#">banners</a>
					</li> 
				   <li>
                      <a href="#">change password</a>
					</li>
					<li>
                      <a href="#">change pin</a>
					</li>
					<li>
                      <a href="#">deposit history</a>
                  </li>
					<li>
                      <a href="#">deposit list</a>
                  </li>
					<li>
                      <a href="#">earnings history</a>
                  </li>
					<li>
                      <a href="#">email notification</a>
                  </li>   
					<li>
                      <a href="#">exchange history</a>
                  </li>  
					<li>
						<a href="#">exchange money</a>
                  </li> 
					<li>
                      <a href="#">make deposit</a>
                  </li> 	
					<li>
                      <a href="#">my account</a>
                  </li> 	
					<li>
                      <a href="#">payment request</a>
                  </li> 	
					<li>
                      <a href="#">pending history</a>
                  </li> 	
					<li>
                      <a href="#">referral earnings</a>
                  </li> 	
					<li>
                      <a href="#">referrals</a>
                  </li> 
					<li>
                      <a href="#">tickets</a>
                  </li> 	
					<li>
                      <a href="#">transfer fund</a>
                  </li>
				<li>
                      <a href="#">view profile</a>
                  </li> 									
              </ul>
             </li>  
				<li class="has-children">
                <a href="#">blog</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="#">blog category</a></li>
                    <li><a href="#">blog single</a></li>
                </ul>
			
            </li>   
            <li><a href="#"> contact us </a></li>
            <li><a href="#"> login </a></li>
            <li><a href="#"> register </a></li>
            <li><a href="{{ route('logout') }}"> logout </a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
	 <div class="cp_navi_main_wrapper inner_header_wrapper dashboard_header_middle float_left">
        <div class="container-fluid">
              <div class="cp_logo_wrapper">
                <a href="index.html">
                    <img src={{ asset('uploads/781959855880540736logo-4.png') }} alt="logo">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                                            <img src={{ asset('images/mess1.jpg') }} alt="img">
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
                        <div class="nice-select" tabindex="0"> <span class="current"><img src={{ asset ('images/avatar.png') }} alt="img"> hi, {{ Auth::user()->first_name }} ! <span class="hidden_xs_content"></span></span>
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
                                <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><i class="flaticon-turn-off"></i> Logout</a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
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
                                    <a href="#"><i class="fas fa-caret-right"></i>index I</a>
                                </li>
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>index II</a>
                                </li>
								<li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>index III</a>
                                </li> 								
                            </ul>
                        </li>     
                        <li><a href="#" class="gc_main_navigation">about us</a></li>
                        <li><a href="#" class="gc_main_navigation">investment plan</a></li>  
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">pages <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>FAQ</a>
                                </li>
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>login</a>
                                </li>  
								<li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>register</a>
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
                                            <a href="#"> <i class="fas fa-caret-right"></i>my account  </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i> my profile</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>email notification </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>change password</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>change pin</a>
                                        </li>
                                     
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>finance<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i>make deposit</a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i> deposit lists</a>
                                        </li>
                                        <li>
                                            <a href="payment_request.html"><i class="fas fa-caret-right"></i>payment request</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>exchange money</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('deposit_fund') }}"><i class="fas fa-caret-right"></i>fund transfer</a>
                                        </li>
                                     
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>reports<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i>all transactions</a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i> deposit history</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>pending history</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>exchange history</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>earning history</a>
                                        </li>
                                     
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="#"> <i class="fas fa-caret-right"></i>referrals<span> <i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                         <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i>my referrals</a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fas fa-caret-right"></i> promotionals banners</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>referral earnings</a>
                                        </li>
                                      
                                    </ul>
                                </li>
								<li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>view tickets</a></li>
                            </ul>
                        </li>						
						    						
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">blog <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>blog category</a>
                                </li>
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i> blog single</a>
                                </li>                   
                            </ul>
                        </li>     
                        <li><a href="#" class="gc_main_navigation">contact us</a></li>
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
                                    <li><a href="#"><i class="fa fa-circle"></i> my account</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle"></i> my profile</a>
                                    </li>                      
                                    <li><a href="#"><i class="fa fa-circle"></i>email notification</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle"></i>change password</a>
                                    </li>
									  <li><a href="#"><i class="fa fa-circle"></i>change pin</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title"><span>my account</span><i class="no_badge">5</i>
                                </div>
                            </a>
                            <ul>
                                 <li><a href="#"><i class="fa fa-circle"></i> my account</a>
                                 </li>
                                 <li><a href="#"><i class="fa fa-circle"></i> my profile</a>
                                 </li>                      
                                 <li><a href="#"><i class="fa fa-circle"></i>email notification</a>
                                 </li>
                                 <li><a href="#"><i class="fa fa-circle"></i>change password</a>
                                 </li>
								<li><a href="#"><i class="fa fa-circle"></i>change pin</a>
                                 </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="#"><i class="flaticon-movie-tickets"></i></a>
                                <ul class="crm_hover_menu">
                                    <li>
                                        <a href="{{ route('deposit_fund') }}"> <i class="fa fa-circle"></i>make deposit</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i> deposit lists</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i> payment request</a>
                                    </li>
                                    <li>
                                        <a href="e#"> <i class="fa fa-circle"></i>exchange money</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i>fund transfer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title"><span>finance</span><i class="no_badge">5</i>
                                </div>
                            </a>
                            <ul>
                                 <li>
                                        <a href="#"> <i class="fa fa-circle"></i>make deposit</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i> deposit lists</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i> payment request</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i>exchange money</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i>fund transfer</a>
                                    </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="#"><i class="flaticon-progress-report"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title">fund transfer</div>
                            </a>
                        </li>
                    </ul>         
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="all_transactions.html"><i class="flaticon-help"></i></a>
                                <ul class="crm_hover_menu">
                                    <li><a href="#"><i class="fa fa-circle"></i> all transactions</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle"></i>deposit history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>pending history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>exchange history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>earning history</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="c-menu__item is-active has-sub crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title"><span>reports</span><i class="no_badge purple">5</i>
                                </div>
                            </a>
                            <ul>
                              <li><a href="#"><i class="fa fa-circle"></i> all transactions</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle"></i>deposit history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>pending history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>exchange history</a>
                                    </li>
									 <li><a href="#"><i class="fa fa-circle"></i>earning history</a>
                                    </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="#"><i class="flaticon-file"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="#">
                                <div class="c-menu-item__title">view tickets</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="#"><i class="flaticon-settings"></i></a>
                                <ul class="crm_hover_menu">
                                    <li><a href="#"><i class="fa fa-circle"></i> my referrals </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-circle"></i>promotionals banners</a>
                                    </li>
									 <li>
                                        <a href="#"> <i class="fa fa-circle"></i>referral earnings</a>
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
                                <li><a href="#"><i class="fa fa-circle"></i> my referrals </a>
                                </li>
                                <li>
                                  <a href="#"> <i class="fa fa-circle"></i>promotionals banners</a>
                                </li>
								<li>
                                  <a href="#"> <i class="fa fa-circle"></i>referral earnings</a>
                                 </li>
                            </ul>
                        </li>
                    </ul>
					  <ul class="u-list crm_drop_second_ul">
                        <li class="crm_navi_icon">
                            <div class="c-menu__item__inner"><a href="#"><i class="flaticon-profile"></i></a>
                            </div>
                        </li>
                        <li class="c-menu__item crm_navi_icon_cont">
                            <a href="{{ route('deposit_fund') }}">
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
                        <dt>Current Access IP</dt>
                        <dd>: &nbsp; 122.175.131.51 </dd>

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

                            <h3>internal fund transfer</h3>

                        </div>

                    </div>
                </div>
            
            <form class="form-horizontal" method="post" action="{{ route('deposit_fund') }}">
                @include('user.partials._msg')
                @csrf
                <div class="row">
                     <div class="col-md-12 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-sm-12 col-12">
                        <div class="change_password_wrapper float_left">
                            <div class="change_pass_field float_left">  
                        <!--    <div class="payment_gateway_wrapper payment_select_wrapper">-->
                        <!--    <label>Select Payment Mode :</label>-->
                        <!--    <select>-->
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
                        <!--        <option value="12">bitcoin</option>-->
                        <!--    </select>-->
                        <!--</div>                          -->
                                <div class="change_field">
                                    <label>amount :</label>
                                        <input type="text" placeholder="000 USD" name="amount"
                                       class="form-control @error('amount') is-invalid @enderror"
                                       required autocomplete="amount" value="{{ $deposit? $deposit->amount : '' }}"
                                       autofocus
                                       id="amount">
                                        @error('amount')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <div class="clearfix"></div>
                                </div>                               
                                <div class="change_field">
                                    <label>deposit slip:</label>
                                        <input type="file" name="slip"
                                           class="form-control @error('slip') is-invalid @enderror"
                                           autocomplete="slip" value="{{ $deposit? $deposit->slip : '' }}" autofocus
                                           id="slip">
                                        @error('slip')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <div class="clearfix"></div>
                                 </div>
                                <div class="change_field">
                                    <!--<label>remarks :</label>-->
                                        <input type="hidden" name="remarks"
                                       class="form-control @error('remarks') is-invalid @enderror"
                                       required autocomplete="remarks" value="{{ $deposit? $deposit->remarks : 'abc' }}"
                                       autofocus
                                       id="remarks">
                                @error('remarks')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                                <div class="clearfix"></div>
                                <div class="change_field">
                                
                                <!--<label>E Pin :</label>-->
                                <input type="hidden" name="pin"
                                       class="form-control @error('pin') is-invalid @enderror"
                                       required autocomplete="pin" value="{{ $deposit ? $deposit->pin : '1234' }}" autofocus
                                       id="pin">
                                @error('epin')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                                <div class="clearfix"></div>
                                
                                </div>
                                <div class="about_btn float_left">
                                    <ul>
                                        <li>
                                            
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">transfer
                                </button>
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
