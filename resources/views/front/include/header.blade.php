     
        <!-- start header -->
        <header class="header_area navscroll">

            <!-- start main header -->
            <div class="main_header_area navbar-fixed-top opacity sticky ">
                <div class="container ">
                    <!-- start mainmenu & logo -->
                    <div class="mainmenu ">
                        <div id="nav">
                            <nav class="navbar navbar-default   "  >
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <div class="site_logo fix">
                                      <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="{{ route('front.home') }}"><img src="{{ asset('img/logo.png')}}" alt="logo" style="height: 85px;"></a>
                                      
                                  </div>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav hidden "  id="navHidden">
                                   
                                    <li><a href="{{ route('front.home') }}">Home</a></li>

                                    <li><a href="{{ route('front.about') }}">About</a></li>

                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Restaurants <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                        <ul id="menu2" class="dropdown-menu"  role="menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.beverages') }}">Beverages</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.menu') }}">D2M Menu</a></li>
                                          
                                        </ul>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Accommodation <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.executive') }}">Executive Suite</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.super-deluxe') }}">Super Deluxe</a></li>
                                         
                                        </ul>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Events <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.birthday-celebration') }}">Birthday Celebration</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.kitty-party') }}">kitty party</a></li>
                                          
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.wedding-function') }}">Wedding Function</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.anniversary-celebration') }}">Anniversary Celebration</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.business-meeting') }}">Business Meeting</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('front.other-evets') }}">Other Events</a></li>
                                         

                                         
                                        </ul>
                                    </li>
                                   
                                    <li><a href="{{ route('front.booking') }}">Booking</a></li>
                                    

                                    <!-- <li><a href="blog.php">Gallery</a></li> -->


                                    <li><a href="{{ route('front.contact') }}">Contacts</a></li>
                                  </ul>
                                  <div class="emergency_number">
                               

                                      <a href="tel:8059 255 777"><img src="{{ asset('img/call-icon.png') }}" alt="">8059 255 777</a>

                                  </div>
                                   
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                    <!-- end mainmenu and logo -->
                </div>
            </div>
            <!-- end main header -->

        </header>
        <!-- end header -->