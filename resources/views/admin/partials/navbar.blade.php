
    <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a href="index.html">
                    <img class="img-fluid" src="{{ URL::asset('./assets/img/platStet.png') }}" style="width: 70px; height: 60px;" alt="Sprout" />
                    <!-- <p>Sprout</p> -->
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="feather icon-menu icon-toggle-right"></i>
                </a>
                <a class="mobile-options waves-effect waves-light">
                    <i class="feather icon-more-horizontal"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <ul class="nav-left">
                    <li class="header-search">
                        <div class="main-search morphsearch-search">
                            <div class="input-group">
                                <span class="input-group-prepend search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                <span class="input-group-append search-btn">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#!"
                            class="waves-effect waves-light" data-cf-modified-e146055bae333d7872d2c05f-="">
                            <i class="full-screen feather icon-maximize"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">

                    <li class="user-profile header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../files/assets/images/prof.jpg" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu"
                                data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <!-- <li>
                                    <a href="#!">
                                        <i class="feather icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="feather icon-user"></i> Profile
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="email-inbox.html">
                                        <i class="feather icon-mail"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">
                                        <i class="feather icon-lock"></i> Lock Screen
                                    </a>
                                </li> -->
                                <li>
                                    <a href="{{ route('logout')}}">
                                        <i class="feather icon-log-out"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>