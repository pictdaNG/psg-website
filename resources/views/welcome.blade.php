<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link rel="shortcut icon" href="./assets/favicon.ico" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! Home| Plateau State Government Website</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
<body>

    <div class="uk-background-secondary uk-height-viewport uk-width-1-1@l uk-position-absolute"></div>
    <div class="headBG"></div>
    <header>
        <div class="uk-width-1-1@m" uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
        <div class="wrapper uk-flex" style="z-index: 12000;">
            <div class="logo mt:40px">
                <img src="./assets/img/platStet.png" alt="">
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary" href="#"></a>
            </div>
            <div id="nav">
            <nav id="top" class="uk-navbar-container mt:40px" style="position: relative; z-index: 980;">
                <div class="main-container">
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-iconnav">
                            <li><a href="#" uk-icon="icon: google-plus"></a></li>
                            <li><a href="#" uk-icon="icon: facebook"></a></li>
                            <li><a href="#" uk-icon="icon: twitter"></a></li>
                            <li><a href="#" uk-icon="icon: instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="main">
                <nav class="uk-navbar-container"  uk-navbar style="position: relative; z-index: 980;">
                    <div class="main-container">
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav">
                            <li>
                                <a href="#">PLATEAU STATE <span>HISTORY & PEOPLE</span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                                        <li><a href="{{ route('people') }}">The People</a></li>
                                        <li><a href="{{ route('history') }}">History</a></li>
                                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Government <span>Seats & Positions</span></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('governor') }}">The Governor</a></li>
                                                <li><a href="{{ route('deputy-governor') }}">The Deputy Governor</a></li>
                                                <li><a href="{{ route('executive') }}">The Executive</a></li>
                                                <li><a href="{{ route('secretary')}}">Sec. to the State Gov.</a></li>
                                                <li><a href="#">Head of Service</a></li>
                                                <li class="current-menu-item"><a href="#">LGA's</a></li>
                                                <li><a href="#">Legislature</a></li>
                                                <li><a href="{{ route('judiciary') }}">Judiciary</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('bassa') }}">Bassa</a></li>
                                                <li><a href="{{ route('barkinladi') }}">Barkin Ladi</a></li>
                                                <li><a href="{{ route('bokkos') }}">Bokkos</a></li>
                                                <li><a href="{{ route('joseast') }}">Jos-East</a></li>
                                                <li><a href="{{ route('josnorth') }}">Jos-North</a></li>
                                                <li><a href="{{ route('jossouth') }}">Jos-South</a></li>
                                                <li><a href="{{ route('kanam') }}">Kanam</a></li>
                                                <li><a href="{{ route('kanke') }}">Kanke</a></li>
                                                <li><a href="{{ route('langtangnorth') }}">Langtang North</a></li>
                                                <li><a href="{{ route('langtangsouth') }}">Langtang South</a></li>
                                                <li><a href="{{ route('mangu') }}">Mangu</a></li>
                                                <li><a href="{{ route('mikang') }}">Mikang</a></li>
                                                <li><a href="{{ route('pankshin') }}">Pankshin</a></li>
                                                <li><a href="{{ route('quaanpan') }}">Qua'an Pan</a></li>
                                                <li><a href="{{ route('riyom') }}">Riyom</a></li>
                                                <li><a href="{{ route('shendam') }}">Shendam</a></li>
                                                <li><a href="{{ route('wase') }}">Wase</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">MDAs <span>Ministries & dept</span></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-nav uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                        
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('commerce.industry') }}">Commerce &amp; Industries</a></li>
                                                <li><a href="{{ route('min.environment') }}">Environment</a></li>
                                                <li><a href="{{ route('health') }}">Ministry of Health</a></li>
                                                <li><a href="{{ route('min.information') }}">Min. of Information</a></li>
                                                <li><a href="{{ route('mineral.development') }}">Mineral Development</a></li>
                                                <li><a href="{{ route('min.science') }}">Science &amp; Technology</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('min.tourism') }}">Tourism, Culture &amp; Hospitality</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Item</a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Projects <span>Status & more</span></a>
                                <div class="uk-navbar-dropdown">
                                    <div class="uk-navbar-dropdown-nav">
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{ route('planned.project') }}">Planned</a></li>
                                                <li><a href="{{ route('ongoing.project') }}">On Going</a></li>
                                                <li><a href="{{ route('completed.project') }}">Completed</a></li>
                                                <li><a href="{{ route('donor.project') }}">Donor Projects</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Commerce <span>Investments & more</span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="{{ route('investment') }}">Investment Oppurtunities</a></li>
                                        <li><a href="{{ route('business') }}">Doing Business in Plateau</a></li>
                                        <li><a href="{{ route('taxation') }}">Tax and Taxation</a></li>
                                        <li><a href="{{ route('resources') }}">Natural Resources</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Contact Us <span>How to reach us</span></a>
                            </li>
                        </ul>
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary" href="#"></a>
                        </div>
                    </div>
                </nav>
            </div>
            </div>
        </div>
        </div>    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
             uk-slideshow="min-height: 300; max-height: 300">
            <div class="wrapper">
            <ul class="uk-slideshow-items">
                <li>
                    <div>
                        <h1 class="uk-text-bold">Plateau State <br> Government House</h1>
                        <p class="lined--p">The Governor's Office, Rayfield</p>
                    </div>
                </li>
            </ul>
            </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    
        </div>
    </header>    <section class="body">
        <div class="wrapper">
            <div class="uk-grid-collapse uk-child-width-expand@m cards--with--colors uk-text-center" uk-grid
                 uk-height-match="target: > div > div">
                <div>
                    <div class="uk-background-muted uk-light">
                        <img src="./assets/img/government.png" alt="">
                        <div class="uk-text-left">
                            <h3>The Arms of Government</h3>
                            <p>Meet the Arms of Government of the Rescue Administration</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-background-primary uk-light">
                        <img src="./assets/img/newspaper.png" alt="">
                        <div class="uk-text-left">
                            <h3>Quarterly  Reports</h3>
                            <p>Download the comprehensive quarterly reports of the rescue administration. </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-background-secondary uk-light">
                        <img src="./assets/img/interest.png" alt="">
                        <div class="uk-text-left">
                            <h3>Tax &  Taxation </h3>
                            <p>Geared towards enhancing tax collection and administration with minimal enforcement cost. </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-background-muted uk-light">
                        <img src="./assets/img/analysis.png" alt="">
                        <div class="uk-text-left">
                            <h3>2018  Budget </h3>
                            <p>Download the Approved 2018 Budget of the Rescue Administration. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="little--slider">
            <div class="uk-position-relative" uk-slideshow="animation: fade; min-height: 350; autoplay: true">
                <div class="uk-flex uk-flex-wrap wrapper show-for-landscape uk-flex-between">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="./assets/img/img-1.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="./assets/img/img-2.jpg" alt="" uk-cover>
                        </li>
                    </ul>
                    <div class="slide-navigation">
                        <ul class="uk-thumbnav">
                            <li uk-slideshow-item="0">
                                <a href="#">
                                    <h2>Thank you for allowing me to serve as your Governor.
                                    Together, let's keep the momentum going.</h2>
                                    <p class="uk-text-small">Simon Bako Lalong</p>
                                </a>
                            </li>
                            <li uk-slideshow-item="1">
                                <a href="#">
                                    <h2>We accept this mandate and equally solicit your cooperation and
                                        partnership as we strive to sustain its execution.</h2>
                                    <p class="uk-text-small">Sonni Tyoden</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="policy" uk-toggle="cls: hide-pointIMG; mode: hover;">
        <div class="pointIMG uk-text-center">
            <img src="./assets/img/fiveStar.png" alt="">
            <div class="uk-padding-small uk-background-secondary uk-light">
                <h3 class="uk-margin-remove">FIVE POINT POLICY</h3>
            </div>
        </div>
        <div class="uk-grid-collapse policy---cards uk-child-width-1-5@m" uk-grid
             uk-height-match="target: > div > div">
            <a class="uk-inline active" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="./assets/img/pol-1.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>1</h1>
                        <p>Human Capital Development & Social Welfare </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="./assets/img/pol-2.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>2</h1>
                        <p>Peace, Security &  Good Governance</p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="./assets/img/pol-3.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>3</h1>
                        <p>Physical Infrastructure &  Environment </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="./assets/img/pol-4.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>4</h1>
                        <p>Agriculture &  Rural Development </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="./assets/img/pol-5.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>5</h1>
                        <p>Entrepreneurship &  Industralization </p>
                    </div>
                </div>
            </a>
        </div>
    </section><section class="news--n--events uk-grid-collapse uk-child-width-1-3@m" uk-grid>
            <div class="img--holder">
                <img src="./assets/img/kids.jpg" alt="">
                <div class="uk-position-center bordered">
                    <h3>
                        Children are the future leaders of tomorrow. Courtesy visit from the Governor
                    </h3>
                </div>
                <img class="centeredImg" src="./assets/img/platStet.png" alt="">
            </div>
            <div class="uk-width-2-3@m news uk-padding">
                <h2 class="n--title uk-margin-remove">News & Events</h2>
                <p class="title--base uk-margin-remove">Find out what's going on & stay up to date</p>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-3@m">
                        <h3 class="uk-card-title uk-margin-remove-bottom">Some Title</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/eve-1.jpg" alt="">
                    </div>
                </div>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-3@m">
                        <h3 class="uk-card-title uk-margin-remove-bottom">Some Title</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/eve-1.jpg" alt="">
                    </div>
                </div>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-3@m">
                        <h3 class="uk-card-title uk-margin-remove-bottom">Some Title</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/eve-1.jpg" alt="">
                    </div>
                </div>
            </div>
        <img class="mobile-centered-img" src="./assets/img/platStet.png" alt="">
    </section>
    <footer>
        <div class="footer-nav">
            <img src="./assets/img/map.jpg" alt="">
        </div>
        <div class="footer-nav">
            <h5 class="footer-title">Jos City</h5>
            <p>Jos is a city in the Middle Belt of Nigeria. The city has a population of about 900,000 residents based on the 2006 census.</p>
    
               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        </div>
        <div class="footer-nav">
            <h5 class="footer-title">Quick Links</h5>
            <ul class="uk-list">
                <li>
                    <a href="#">The Governor</a>
                </li>
                <li>
                    <a href="#">The Executive</a>
                </li>
                <li>
                    <a href="#">Ministries, Departments & Agencies</a>
                </li>
                <li>
                    <a href="#">Local Government Areas</a>
                </li>
                <li>
                    <a href="#">Trade and Investments</a>
                </li>
                <li>
                    <a href="#">Citizen Services</a>
                </li>
            </ul>
        </div>
            <div class="subfooter">
                <div class="wrapper">
                    <span>Developed & maintained by the Plateau State ICT Development Agency. © 2019</span>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-iconnav uk-light">
                            <li><a href="#" uk-icon="icon: google-plus"></a></li>
                            <li><a href="#" uk-icon="icon: facebook"></a></li>
                            <li><a href="#" uk-icon="icon: twitter"></a></li>
                            <li><a href="#" uk-icon="icon: instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>    
    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-center uk-flex-column">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-parent">
                    <a href="#">Plateau State</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                        <li><a href="{{ route('people') }}">The People</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Government</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                        <li><a href="{{ route('people') }}">The People</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">MDAs</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                        <li><a href="{{ route('people') }}">The People</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Projects</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                        <li><a href="{{ route('people') }}">The People</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Commerce</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('glance') }}">At a Glance</a></li>
                        <li><a href="{{ route('people') }}">The People</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('endowment') }}">Endowments</a></li>
                        <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script src="assets/js/app.js"></script>
</body>
</html>