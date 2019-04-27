<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65978169-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-65978169-6');
    </script>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.ico" />
    
    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@PLSGovt">
    <meta name="twitter:creator" content="@PLSGovt">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Plateau State Government">
    <meta name="twitter:description" content="Official Plateau State Government Page">
    <meta name="twitter:image" content="{{ URL::asset('./assets/img/platStet.png') }}">

    <meta name="google-site-verification" content="UAD6KPgApxuFKVgBYXwnUpZuM79LNYROXw0n4YI53_A" />

    <meta property="og:url" content="https://plateaustate.gov.ng" />
    <!-- Facebook Meta -->
    <meta property="og:title" content="Plateau State Government">
    <meta property="og:description" content="Official Plateau State Government Page">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ URL::asset('./assets/img/platStet.png') }}">
    <meta property="og:image:secure_url" content="{{ URL::asset('./assets/img/platStet.png') }}">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    @include('meta::manager')

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
                    <a class="logoLink uk-display-block" href="{{ route('home') }}">
                        <img src="{{ URL::asset('./assets/img/platStet.png') }}" alt="">
                    </a>
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
                    @include('layouts.navbar')
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
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
    </header>    
    <section class="body">
        <div class="wrapper">
            <div class="uk-grid-collapse uk-child-width-expand@m cards--with--colors uk-text-center" uk-grid
                 uk-height-match="target: > div > div">
                <div>
                    <div class="uk-background-muted uk-light">
                        <a href="">
                            <img src="./assets/img/government.png" alt="">
                            <div class="uk-text-left">
                                <h3>The Arms of Government</h3>
                                <p>Meet the Arms of Government of the Rescue Administration</p>
                            </div>    
                        </a>                        
                    </div>
                </div>
                <div>
                    <div class="uk-background-primary uk-light">
                        <a href="{{ route('quaterlyreport') }}">
                            <img src="./assets/img/newspaper.png" alt="">
                            <div class="uk-text-left">
                                <h3>Quarterly  Reports</h3>
                                <p>Download the comprehensive quarterly reports of the rescue administration. </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-background-secondary uk-light">
                        <a href="{{ route('taxation') }}">
                            <img src="./assets/img/interest.png" alt="">
                            <div class="uk-text-left">
                                <h3>Tax & Taxation </h3>
                                <p>Geared towards enhancing tax collection and administration with minimal enforcement cost. </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="uk-background-muted uk-light">
                        <a href="{{ route('budget') }}">
                            <img src="./assets/img/analysis.png" alt="">
                            <div class="uk-text-left">
                                <h3>2019  Budget </h3>
                                <p>The Approved 2019 Budget of the Rescue Administration. </p>
                            </div>
                        </a>
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
            <a class="uk-inline active" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.humancapital') }}">
                <div>
                    <img src="./assets/img/pol-1.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>1</h1>
                        <p>Human Capital Development & Social Welfare </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.peacesecurity') }}">
                <div>
                    <img src="./assets/img/pol-2.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>2</h1>
                        <p>Peace, Security &  Good Governance</p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.physical') }}">
                <div>
                    <img src="./assets/img/pol-3.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>3</h1>
                        <p>Physical Infrastructure &  Environment </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.agriculture') }}">
                <div>
                    <img src="./assets/img/pol-4.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>4</h1>
                        <p>Agriculture &  Rural Development </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.entrepreneur') }}">
                <div>
                    <img src="./assets/img/pol-5.jpg" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>5</h1>
                        <p>Entrepreneurship &  Industralization </p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="news--n--events uk-grid-collapse uk-child-width-1-3@m" uk-grid>
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
                        <a href="{{ route('news.news1') }}">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Plateau State establishes agency for ICT development</h3>
                        </a>                        
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 05, 2019</time></p>
                        <p>
                            The Plateau state government has established an ICT development agency with the mandate to develop ICT, as well as using it as a tool for social mobility in solving youth unemployment in the state.
                        </p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/lally.png" alt="">
                    </div>
                </div>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-3@m">
                        <a href="{{ route('news.news2') }}">
                            <h3 class="uk-card-title uk-margin-remove-bottom">APC’s Simon Lalong retains seat as Plateau governor</h3>
                        </a>
                        
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">March 24, 2019</time></p>
                        <p>
                            Incumbent Gov. Simon Lalong of Plateau, the gubernatorial candidate of the All Progressives Congress (APC) in Plateau, has been declared the winner of the rerun gubernatorial election in the state.
                        </p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/lalong-2.jpeg" alt="">
                    </div>
                </div>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-3@m">
                        <a href="{{ route('news.news3') }}">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Massive turnout in Tudun Wada as Plateau votes to determine governor</h3>
                        </a>                        
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">March 26, 2019</time></p>
                        <p>
                            Tudun Wada polling unit 027, in Jos North Local Government of Plateau, has witnessed a large turnout of voters in the on-going rerun election to determine the state’s governor.
                        </p>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first">
                        <img src="./assets/img/election.jpg" alt="">
                    </div>
                </div>
            </div>
            <img class="mobile-centered-img" src="./assets/img/platStet.png" alt="">
        </section>
        @include('layouts.footer')
        <script src="assets/js/app.js"></script>
    </body>
</html>