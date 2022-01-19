    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="https://focustrade.us/"> Focustrade </a></h2>
        <a href="#0" class="cd-close">Close</a>
         <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li> 
             <li class="has-children">
                <!--<a href="#">index</a>-->
                <!--<ul class="cd-secondary-dropdown icon_menu is-hidden">-->
                <!--    <li class="go-back"><a href="#0">Menu</a></li>-->
                <!--    <li><a href="index.html">index I</a></li>-->
                <!--    <li><a href="index2.html">index II</a></li>-->
                <!--    <li><a href="index3.html">index III</a></li>-->
                <!--</ul>-->
            </li>
            <li><a href=""> about us </a></li>
            <li><a href="{{ route('investment_plans') }}"> investment plan </a></li>
			<li><a href=""> FAQ </a></li>
			<li class="has-children">
              <a href="#">dashboard</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                      <li>
                      <a href="#">all transactions</a>
					</li>
                    <li>
                      <a href="#">banners</a>
					</li> 
				   <li>
                      <a href="{{ route('change_password') }}">change password</a>
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
                      <a href="{{ route('deposit_fund') }}">make deposit</a>
                  </li> 	
					<li>
                      <a href="{{ route('my_account') }}">view profile</a>
                  </li> 	
					<li>
                      <a href="{{ route('payment_request') }}">payment request</a>
                  </li> 	
					<li>
                      <a href="#">pending history</a>
                  </li> 	
					<li>
                      <a href="#">referral earnings</a>
                  </li> 	
					<li>
                      <a href="{{ route('levels',\Illuminate\support\Facades\Auth::user()->id) }}">referrals</a>
                  </li> 
					<li>
                      <a href="#">transfer fund</a>
                  </li>
              </ul>
             </li>  
			<!--<li class="has-children">-->
   <!--             <a href="#">blog</a>-->
   <!--             <ul class="cd-secondary-dropdown icon_menu is-hidden">-->
   <!--                 <li class="go-back"><a href="#0">Menu</a></li>-->
   <!--                 <li><a href="#">blog category</a></li>-->
   <!--                 <li><a href="#">blog single</a></li>-->
   <!--             </ul>-->
			
   <!--         </li>   -->
            <li><a href="#"> contact us </a></li>
            <!--<li><a href="#"> login </a></li>-->
            <!--<li><a href="#"> register </a></li>-->
            <li><a href="{{ route('logout') }}"> logout </a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
	 <div class="cp_navi_main_wrapper inner_header_wrapper dashboard_header_middle float_left">
        <div class="container-fluid">
              <div class="cp_logo_wrapper nw_main_logo">
                <a href="https://focustrade.us/user/dashboard">
                    <img class="new_dsh_logo new_dsh_desktop_logo" src={{ asset('uploads/main-logo-new.jpeg') }} alt="logo">
                    <img class="new_dsh_logo new_dsh_mob_logo" src={{ asset('uploads/main-logo-new.jpg') }} alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none over_disp">
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
                                <!--<li><a href="#"><i class="flaticon-file"></i> My Task</a>-->
                                <!--</li>-->
                                <!--<li><a href="#"><i class="flaticon-calendar"></i> My Calender</a>-->
                                <!--</li>-->
                                <!--<li><a href="#"><i class="flaticon-envelope"></i> Inbox</a>-->
                                <!--</li>-->
                                <li><a href="#"><i class="flaticon-settings"></i> Setting</a>
                                </li>
                                <!--<li><a href="#"><i class="flaticon-help"></i> Help</a>-->
                                <!--</li>-->
                                <!--<li><a href="#"><i class="flaticon-padlock"></i> Lock Screen</a>-->
                                <!--</li>-->
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
						<!--<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation active_class">index <i class="fas fa-caret-down"></i></a>-->
      <!--                      <ul class="navi_2_dropdown">-->
      <!--                          <li class="parent">-->
      <!--                              <a href="#"><i class="fas fa-caret-right"></i>index I</a>-->
      <!--                          </li>-->
      <!--                          <li class="parent">-->
      <!--                              <a href="#"><i class="fas fa-caret-right"></i>index 22I</a>-->
      <!--                          </li>-->
						<!--		<li class="parent">-->
      <!--                              <a href="#"><i class="fas fa-caret-right"></i>index III</a>-->
      <!--                          </li> 								-->
      <!--                      </ul>-->
      <!--                  </li>     -->
                        <li><a href="#" class="gc_main_navigation">about us</a></li>
                        <li><a href="{{ route('investment_plans') }}" class="gc_main_navigation">investment plan</a></li>  
						<!--<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">pages <i class="fas fa-caret-down"></i></a>-->
        <!--                    <ul class="navi_2_dropdown">-->
        <!--                        <li class="parent">-->
        <!--                            <a href="#"><i class="fas fa-caret-right"></i>FAQ</a>-->
        <!--                        </li>-->
        <!--                        <li class="parent">-->
        <!--                            <a href="#"><i class="fas fa-caret-right"></i>login</a>-->
        <!--                        </li>  -->
								<!--<li class="parent">-->
        <!--                            <a href="#"><i class="fas fa-caret-right"></i>register</a>-->
        <!--                        </li>   								-->
        <!--                    </ul>-->
      <!--                  </li>-->
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">dashboard <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                              
                                <li class="parent">
                                    <a href="#"><i class="fas fa-caret-right"></i>view profile<span><i class="fas fa-caret-right"></i>
									</span></a>
                                    <ul class="dropdown-menu-right">
                                        <li>
                                            <a href="{{ route('my_account') }}"> <i class="fas fa-caret-right"></i>view profile  </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>email notification </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('change_password') }}"><i class="fas fa-caret-right"></i>change password</a>
                                        </li>
                                        <!--<li>-->
                                        <!--    <a href="#"><i class="fas fa-caret-right"></i>change pin</a>-->
                                        <!--</li>-->
                                     
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
                                            <a href="{{ route('payment_request') }}"><i class="fas fa-caret-right"></i>payment request</a>
                                        </li>
                                        <!--<li>-->
                                        <!--    <a href="#"><i class="fas fa-caret-right"></i>exchange money</a>-->
                                        <!--</li>-->
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
                                        <!--<li>-->
                                        <!--    <a href="#"> <i class="fas fa-caret-right"></i> deposit history</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#"><i class="fas fa-caret-right"></i>pending history</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#"><i class="fas fa-caret-right"></i>exchange history</a>-->
                                        <!--</li>-->
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
                                            <a href="{{ route('levels',\Illuminate\support\Facades\Auth::user()->id) }}"> <i class="fas fa-caret-right"></i>my referrals</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-caret-right"></i>referral earnings</a>
                                        </li>
                                      
                                    </ul>
                                </li>
                            </ul>
                        </li>						
						    						
                        <!--<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">blog <i class="fas fa-caret-down"></i></a>-->
                        <!--    <ul class="navi_2_dropdown">-->
                        <!--        <li class="parent">-->
                        <!--            <a href="#"><i class="fas fa-caret-right"></i>blog category</a>-->
                        <!--        </li>-->
                        <!--        <li class="parent">-->
                        <!--            <a href="#"><i class="fas fa-caret-right"></i> blog single</a>-->
                        <!--        </li>                   -->
                        <!--    </ul>-->
                        <!--</li>     -->
                        <li><a href="#" class="gc_main_navigation">contact us</a></li>
                    </ul>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>

    <!-- navi wrapper End -->