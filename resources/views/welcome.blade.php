<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152045149-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152045149-1');
</script>

    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/favicon.ico"/>

    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@PLSGovt">
    <meta name="twitter:creator" content="@PLSGovt">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Plateau State Government">
    <meta name="twitter:description" content="Official Plateau State Government Page">
    <meta name="twitter:image" content="{{ URL::asset('./assets/img/platStet.png') }}">

    <meta name="google-site-verification" content="UAD6KPgApxuFKVgBYXwnUpZuM79LNYROXw0n4YI53_A"/>

    <meta property="og:url" content="https://plateaustate.gov.ng"/>
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


    <style>
        .little--slider .slide-navigation {
            background: #378349;
        }

        @media (max-width: 992px) {
            .little--slider .slide-navigation {
                height: auto !important;
            }

            .uk-thumbnav img {
                margin-top: 10px;
            }
        }

        .uk-thumbnav > * > *::after {
            background: transparent;
        }

        .uk-thumbnav img {
            height: 80px;
            margin-bottom: 10px;
        }

        .uk-thumbnav a {
            color: white
        }

        .little--slider .slide-navigation {
            width: 50%;
            border: 0;
        }

        .little--slider {
            padding-top: 0;
        }

        .body {
            padding: 0;
        }

        .wrapper {
            max-width: 100%;
        }

        @media (max-width: 1024px) {
            .little--slider .uk-slideshow-items {
                min-height: 240px !important;
            }

            .little--slider .slide-navigation {
                margin: 0 !important;
                width: 100%;
            }

            .cards--with--colors > div:not(:first-child) {
                margin: 0 !important;
            }
        }
    </style>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<div class="uk-background-secondary uk-height-viewport uk-width-1-1@l uk-position-absolute"></div>
<div class="headBG" uk-slideshow>
    <ul class="uk-slideshow-items">
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                <img src="assets/img/bg.jpg" alt="" uk-cover>
            </div>
        </li>
    </ul>
</div>
<header>
    <div class="uk-width-1-1@m" uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
        <div class="wrapper uk-flex" style="z-index: 12000;">
            <div class="logo t:40px">
                <a class="logoLink uk-display-block" href="{{ route('home') }}">
                    <img src="{{ URL::asset('./assets/img/platStet.png') }}" alt="">
                </a>
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"
                   href="#"></a>
            </div>
            <div class="uk-position-absolute welcome-message">
                <h4 class="uk-margin-remove">Welcome To The Home Of Peace & Tourism</h4>
            </div>
            <div id="nav" class="t:40px">
                <nav id="top" class="uk-navbar-container" style="position: relative; z-index: 980;">
                    <div class="main-container">
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav uk-iconnav">
                                <li><a href="#" uk-icon="icon: google-plus"></a></li>
                                <li><a href="https://www.facebook.com/PLStateGovt/" uk-icon="icon: facebook"></a></li>
                                <li><a href="https://twitter.com/PlateauStateGov?s=09" uk-icon="icon: twitter"></a></li>
                                <li><a href="https://instagram.com/plsgovt?igshid=1w0ehvmgvssgt"
                                       uk-icon="icon: instagram"></a></li>
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
    </div>
</header>
<section class="body">
    <div class="wrapper">
        <div class="uk-grid-collapse uk-child-width-expand@m cards--with--colors uk-text-center" uk-grid
             uk-height-match="target: > div > div">
            <div>
                <div class="uk-background-muted uk-light">
                    <a href="/assets/documents/2019/ACCT-Sign.pdf" download="ACCT-Sign">
                        <img src="./assets/img/government.png" alt="">
                        <div class="uk-text-left">
                            <h3>Report of the Accountant General</h3>
                            <p>Download Report from the Accountant General.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-background-primary uk-light">
                    <a href="{{ route('quaterlyreport') }}">
                        <img src="./assets/img/newspaper.png" alt="">
                        <div class="uk-text-left">
                            <h3>Quarterly Reports</h3>
                            <p>Download the comprehensive quarterly reports. </p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-background-secondary uk-light">
                    <a href="{{ route('audit.report') }}">
                        <img src="./assets/img/interest.png" alt="">
                        <div class="uk-text-left">
                            <h3>Audit Reports </h3>
                            <p>Download the comprehensive treasury reports. </p>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="uk-background-muted uk-light">
                    <a href="{{ route('budget') }}">
                        <img src="./assets/img/analysis.png" alt="">
                        <div class="uk-text-left">
                            <h3>Budget Report</h3>
                            <p>The Approved Yearly Budget. </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="little--slider">
        <div class="uk-position-relative" uk-slideshow="animation: fade; min-height: 350; autoplay: true">
            <div class="uk-flex uk-flex-wrap wrapper show-for-landscape uk-flex-between" uk-height-match="target: > *">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="./assets/img/img-1.jpg" alt="" uk-cover>
                    </li>
                </ul>
                <div class="slide-navigation">
                    <div
                        class="uk-thumbnav uk-flex-middle uk-text-center uk-child-width-1-2@m uk-height-1-1 uk-flex flex-wrap">
                        <div
                            class="uk-box-shadow-hover-large a-box uk-box-shadow-small uk-flex-middle uk-flex-center uk-flex height-49%">
                            <a href="http://15.188.63.156/login" target="_blank">
                                <img src="./assets/img/eproc.png" alt="">
                                <span class="uk-width-1-1@m d-block">E-Procurement</span>
                            </a>
                        </div>
                        <div
                            class="uk-box-shadow-hover-large a-box uk-box-shadow-small uk-flex-middle uk-flex-center uk-flex height-49%">
                            <a href="https://financedm.herokuapp.com/" target="_blank">
                                <img src="./assets/img/debt.png" alt="">
                                <span class="uk-width-1-1@m d-block"> Debt Management portal</span>
                            </a>
                        </div>
                        <div
                            class="uk-box-shadow-hover-large a-box uk-box-shadow-small uk-flex-middle uk-flex-center uk-flex height-49%">
                            <a href="assets/documents/2019/tourism policy completed file.pdf" target="_blank">
                                <img src="./assets/img/tourism.png" alt="">
                                <span class="uk-width-1-1@m d-block">Tourism Policy</span></a></div>
                        <div
                            class="uk-box-shadow-hover-large a-box uk-box-shadow-small uk-flex-middle uk-flex-center uk-flex height-49%">
                            <a href="https://plug-storage.s3.eu-west-3.amazonaws.com/20190828+-+Plateau+State+Strategy+-+Final.pdf">
                                <img src="./assets/img/strt-debt.png" alt="">
                                <span class="uk-width-1-1@m d-block">Strategic Development Plan</span>
                            </a></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="policy">
    <div class="pointIMG uk-width-1-3@m uk-text-center">
        <!-- <img src="./assets/img/fiveStar.png" alt=""> -->
        <div class="padding-small uk-background-secondary uk-light">
            <h3 class="uk-margin-remove">THREE POINT POLICY</h3>
        </div>
    </div>
    <div class="uk-grid-collapse policy---cards uk-child-width-1-3@m" uk-grid
         uk-height-match="target: > div > div">

        <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.peacesecurity') }}">
            <div>
                <img src="./assets/img/pol-2.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                    <h1>1</h1>
                    <p>Peace, Security & Good Governance</p>
                </div>
            </div>
        </a>
        <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.physical') }}">
            <div>
                <img src="./assets/img/pol-3.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                    <h1>2</h1>
                    <p>Physical Infrastructural Development </p>
                </div>
            </div>
        </a>

        <a class="uk-inline" uk-toggle="cls: active; mode: hover;" href="{{ route('fivepoints.entrepreneur') }}">
            <div>
                <img src="./assets/img/pol-4.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-flex uk-flex-middle">
                    <h1>3</h1>
                    <p>Sustainable Economic Rebirth </p>
                </div>
            </div>
        </a>
    </div>
</section>
<section class="news--n--events uk-grid-collapse" uk-grid uk-height-match="target: > div">
    <div class="img--holder uk-width-2-5@m">
        <h3 class="uk-margin-remove uk-padding-small">The Weather in Jos This Week</h3>
        <a class="weatherwidget-io" href="https://forecast7.com/en/9d908d86/jos/" data-label_1="JOS"
           data-label_2="WEATHER" data-theme="original" data-basecolor="#1e7b49" style="">JOS WEATHER</a>
        <script>
            !function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'weatherwidget-io-js');
        </script>
        <h3 class="uk-margin-remove uk-padding-small">Follow our Social Media Feeds</h3>
        <a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/PlateauStateGov?s=09">Tweets
            by Plateau State Government</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <div class="fb-page"
             data-href="https://www.facebook.com/PLStateGovt/"
             data-tabs="timeline"
             data-small-header="yes"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/PLStateGovt/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/pictda/">Plateau State</a>
            </blockquote>
        </div>
        <img class="centeredImg" src="./assets/img/platStet.png" alt="">
    </div>
    <div class="uk-width-3-5@m news uk-padding-small">
        <h2 class="n--title uk-margin-remove">News & Events</h2>
        <p class="title--base uk-margin-remove">Find out what's going on & stay up to date</p>
        @if(count($news) > 0)
            <div class="uk-child-width-1-2@m" uk-grid>
            @foreach($news as $new)
              <div>
                <a href="{{route('news.news1', $new->slug)}}" class="uk-card uk-display-block uk-card-default uk-link-reset">
                  <div class="card-top">
                    <img src="{{$new->news_image}}" alt="{!! str_word_count($new->title) > 20 ? substr($new->title,0,20) : $new->title !!} ...">
                  </div>
                  <div class="card-base-content uk-card-hover uk-text-right">
                    <time datetime="{{ \Carbon\Carbon::parse($new->published_date)->format('j F, Y') }}" class="date uk-text-small uk-text-right">{{ \Carbon\Carbon::parse($new->published_date)->format('j F, Y') }}</time>
                      <div class="uk-text-left">
                          <h4 class="uk-margin-remove card-title uk-text-bold">{!! str_word_count($new->title) > 20 ? substr($new->title,0,20) : $new->title !!} ...</h4>
                      </div>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
        @else
            <h3 class="uk-card-title uk-margin-remove-bottom">No News/Events Posted yet.</h3>
        @endif
        @if(count($news) > 0)
            <a href="{{ route('news.allNews') }}" class="uk-button uk-margin-medium-top uk-button-default">View More</a>
        @endif
    </div>
    <img class="mobile-centered-img" src="./assets/img/platStet.png" alt="">
</section>
@include('layouts.footer')
<script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3'
        key="cab5c6b8-cac8-4844-acdb-03cfce81bb53"></script>

<script src="assets/js/app.js"></script>

</body>
</html>
