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
        @include('layouts.navbar')
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
            <a class="uk-inline active" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.humancapital') }}">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-1.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>1</h1>
                        <p>Human Capital Development & Social Welfare </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.peacesecurity') }}">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-2.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>2</h1>
                        <p>Peace, Security &  Good Governance</p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.physical') }}">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-3.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>3</h1>
                        <p>Physical Infrastructure &  Environment </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.agriculture') }}">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-4.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>4</h1>
                        <p>Agriculture &  Rural Development </p>
                    </div>
                </div>
            </a>
            <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.entrepreneur') }}">
                <div>
                    <img src="{{ URL::asset('./assets/img/pol-5.jpg') }}" alt="">
                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                        <h1>5</h1>
                        <p>Entrepreneurship &  Industralization </p>
                    </div>
                </div>
            </a>
        </div>
    </section>    
    @include('layouts.footer')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>