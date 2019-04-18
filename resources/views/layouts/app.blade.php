<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link rel="shortcut icon" href="{{ URL::asset('./assets/favicon.ico') }}" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    
    @yield('styles')
  </head>
<body>

    <div class="uk-width-1-1@m" uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
    <div class="wrapper uk-flex" style="z-index: 12000;">
        <div class="logo mt:40px">
            <img src="{{ URL::asset('./assets/img/platStet.png') }}" alt="">
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
                                <li class="uk-active">
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
                                    <div class="uk-navbar-dropdown">
                                        <!--Multiple Dropdown-->
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li class="uk-active"><a href="{{ route('governor') }}">The Governor</a></li>
                                                    <li><a href="{{ route('deputy-governor') }}">The Deputy Governor</a></li>
                                                    <li><a href="{{ route('executive') }}">The Executive</a></li>
                                                    <li><a href="{{ route('secretary')}}">Sec. to the State Gov.</a></li>
                                                    <li><a href="#">Head of Service</a></li>           
                                                    <li>
                                                        <a href="#">LGA's</a>
                                                        <ul>
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
                                                    </li>
                                                    <li><a href="#">Legislature</a></li>
                                                    <li><a href="{{ route('judiciary') }}">Judiciary</a></li>
                                                </ul>
                                            </li>
                                           

                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">MDAs <span>Ministries & dept</span></a>
                                    <div class="uk-navbar-dropdown">
                                        <!--Multiple Dropdown-->
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Ministries</a>
                                                        <ul>
                                                            <li class="uk-active"><a href="{{ route('commerce.industry') }}">Commerce &amp; Industries</a></li>
                                                            <li><a href="{{ route('min.environment') }}">Environment</a></li>
                                                            <li class="uk-active"><a href="{{ route('commerce.industry') }}">Commerce &amp; Industries</a></li>
                                                            <li><a href="{{ route('min.environment') }}">Environment</a></li>
                                                            <li><a href="{{ route('health') }}">Ministry of Health</a></li>
                                                            <li><a href="{{ route('min.information') }}">Min. of Information</a></li>
                                                            <li><a href="{{ route('mineral.development') }}">Mineral Development</a></li>
                                                            <li><a href="{{ route('min.science') }}">Science &amp; Technology</a></li>
                                                            <li class="uk-active"><a href="{{ route('min.tourism') }}">Tourism, Culture &amp; Hospitality</a></li>
                                                            <li><a href="{{ route('min.water') }}">Water Resources &amp; Energy</a></li>
                                                            <li><a href="{{ route('min.works') }}">Works</a></li>
                                                            <li><a href="{{ route('min.housing') }}">Housing &amp; Urban Dev</a></li>
                                                            <li><a href="{{ route('min.youth') }}">Youth Development</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Departments</a>
                                                        <ul>
                                                            <li><a href="{{ route('departments.auditor') }}">State Audit Department</a></li>
                                                            <li><a href="{{ route('departments.printing') }}">Plateau Printing Press</a></li>
                                                            <li><a href="{{ route('departments.agricmechanic') }}">Plateau Agricultural Mechanization Service</a></li>
                                                            <li><a href="{{ route('departments.mineraldev') }}">Plateau Mineral Development Company</a></li>
                                                            <li><a href="{{ route('departments.afforestation') }}">Plateau State Afforestation Project</a></li>
                                                            <!-- <li><a href="#">item a little longer</a></li>
                                                            <li><a href="#">item a little longer</a></li>
                                                            <li><a href="#">item a little longer</a></li>
                                                            <li><a href="#">item a little longer</a></li> -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Agencies</a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('agencies.adulteducation') }}">
                                                                    Adult and non-formal Education Directorate
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.prtv') }}">
                                                                    Plateau Radio &amp; Television Corporation
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.sanitation') }}">
                                                                    Plateau Rural Water Supply & Sanitation Agency
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://psbs.plateaustate.gov.ng/" target="_blank">
                                                                    Plateau State Bureau of Statistics
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.emergency') }}">
                                                                    Plateau State Emergency Relief & Management Agency
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.pepsa') }}">
                                                                    Plateau Environmental Protection and Sanitation Agency
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.tourism') }}">
                                                                    Plateau State Tourism Corporation
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('agencies.socialdev') }}">
                                                                    Plateau State Community Development Management Agency
                                                                </a>
                                                            </li>
                                                            <li><a href="https://pictda.plateaustate.gov.ng" target="_blank">Plateau State Information and Communication Development Agency (PICTDA)</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Boards</a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('boards.waterboard') }}">
                                                                    Plateau State Water Board
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('boards.psirs') }}">
                                                                    Plateau State Internal Revenue Service
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('boards.muslimpilgrim') }}">
                                                                    Muslim Pilgrims' Welfare Board 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('boards.pension') }}">
                                                                    Plateau Local Government Staff Pension Board
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Commission</a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('commission.boundary') }}">
                                                                    Boundary Commission
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('commission.civilservice') }}">
                                                                    Civil Service Commission
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('commission.plasiec') }}">
                                                                    Plateau State Independent Electoral Commission

                                                                </a>
                                                            </li>                                       <li>
                                                                <a href="{{ route('commission.teachers') }}">
                                                                    Teachers Service Commission
                                                                </a>
                                                            </li>                
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <ul class="uk-nav navbar cf uk-navbar-dropdown-nav">
                                                    <li>
                                                        <a href="#">Others</a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('others.pssh') }}">
                                                                    Plateau Specialist Hospital
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('others.plateaufc') }}">
                                                                    Plateau United Football Club
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
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
    </div>
    <div class="headBG glance"></div>
    <header class="hero">
        <div class="wrapper">
            <div>
                <div class="uk-light">
                    <h1 class="uk-text-bold">@yield('header')</h1>
                    <p class="lined--p">@yield('subheader')</p>
                </div>
            </div>
        </div>
    </header>
    <div class="smart--container" uk-grid>
        <div class="side--left uk-width-1-4@m">
            <div>
                <img src="{{ URL::asset('./assets/img/sidebar-img.png') }}" alt="">
            </div>
            <div class="list uk-margin-top">
                <h4>Local Government Area</h4>
                <ul class="uk-list uk-list-bullet">
                    <li>Barkin Ladi</li>
                    <li>Bassa</li>
                    <li>Bokkos</li>
                    <li>Jos-East</li>
                    <li>Jos-North</li>
                    <li>Jos-South</li>
                    <li>Kanam</li>
                    <li>Langtang-North</li>
                    <li>Langtang-South</li>
                    <li>Mangu</li>
                    <li>Mikang</li>
                    <li>Pankshin</li>
                    <li>Qua'an Pan</li>
                    <li>Riyom</li>
                    <li>Shendam</li>
                    <li>Wase</li>
                </ul>
            </div>
        </div>    

        @yield('content')

        <div class="side--left uk-width-1-4@m">
            <div>
                <img src="{{ URL::asset('./assets/img/sidebar-img.png') }}" alt="">
            </div>
            <div class="list uk-margin-top">
                <h4>Local Government Area</h4>
                <ul class="uk-list uk-list-bullet">
                    <li>Barkin Ladi</li>
                    <li>Bassa</li>
                    <li>Bokkos</li>
                    <li>Jos-East</li>
                    <li>Jos-North</li>
                    <li>Jos-South</li>
                    <li>Kanam</li>
                    <li>Langtang-North</li>
                    <li>Langtang-South</li>
                    <li>Mangu</li>
                    <li>Mikang</li>
                    <li>Pankshin</li>
                    <li>Qua'an Pan</li>
                    <li>Riyom</li>
                    <li>Shendam</li>
                    <li>Wase</li>
                </ul>
            </div>
        </div></div>
    
    <section class="policy" uk-toggle="cls: hide-pointIMG; mode: hover;">
        <div class="pointIMG uk-text-center">
            <img src="{{ URL::asset('./assets/img/fiveStar.png') }}" alt="">
            <div class="uk-padding-small uk-background-secondary uk-light">
                <h3 class="uk-margin-remove">FIVE POINT POLICY</h3>
            </div>
        </div>
        <div class="uk-grid-collapse policy---cards uk-child-width-1-5@m" uk-grid
             uk-height-match="target: > div > div">
            <a class="uk-inline active" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-1.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>1</h1>
                        <p>Human Capital Development & Social Welfare </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-2.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>2</h1>
                        <p>Peace, Security &  Good Governance</p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-3.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>3</h1>
                        <p>Physical Infrastructure &  Environment </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-4.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>4</h1>
                        <p>Agriculture &  Rural Development </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-5.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>5</h1>
                        <p>Entrepreneurship &  Industralization </p>
                    </div>
                </div>
            </a>
        </div>
    </section>    <footer>
        <div class="footer-nav">
            <img src="{{ URL::asset('./assets/img/map.jpg') }}" alt="">
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
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>