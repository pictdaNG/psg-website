<footer>
    <div class="footer-nav">
        <img src="{{ URL::asset('./assets/img/map.jpg') }}" alt="">
    </div>
    <div class="footer-nav">
      <h5 class="footer-title">Jos City</h5>
      <p>
        Jos is a city in the Middle Belt of Nigeria. The city has a population of about 900,000 residents based on the 2006 census. Popularly called "J-town"
      </p>
    </div>
    <div class="footer-nav">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="uk-list">
            <li><a href="{{ route('governor') }}">The Governor</a></li>
            <li><a href="{{ route('executive') }}">The Executive</a></li>
            <li><a href="#">Ministries, Departments & Agencies</a></li>
            <li><a href="#">Local Government Areas</a></li>
            <li><a href="{{ route('investment') }}">Trade and Investments</a></li>
            <li><a href="#">Citizen Services</a></li>
            <li><a href="http://webmail.plateaustate.gov.ng/login.php" target="_blank">Webmail</a></li>
        </ul>
    </div>
    <div class="subfooter">
        <div class="wrapper">
            <span>Developed & maintained by the Plateau State ICT Development Agency. © 2019</span>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-iconnav uk-light">
                    {{-- <li><a href="#" uk-icon="icon: google-plus"></a></li> --}}
                    <li><a href="https://www.facebook.com/PLStateGovt/" uk-icon="icon: facebook"></a></li>
                    <li><a href="https://twitter.com/PlateauStateGov?s=08" uk-icon="icon: twitter"></a></li>
                    <li><a href="https://instagram.com/plsgovt?igshid=4wrlu56jik9z" uk-icon="icon: instagram"></a></li>
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
                    <li><a href="{{ route('past-admins') }}">Past Administrators</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Government</a>
                <ul class="uk-nav-sub uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li class="uk-active"><a href="{{ route('governor') }}">The Governor</a></li>
                    <li><a href="{{ route('deputy-governor') }}">The Deputy Governor</a></li>
                    <li><a href="{{ route('executive') }}">The Executive</a></li>
                    <li><a href="{{ route('secretary')}}">Sec. to the State Gov.</a></li>
                    <li><a href="#">Head of Service</a></li>
                    <li class="uk-parent">
                        <a href="#">LGA's</a>
                        <ul class="uk-nav-sub">
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
            <li class="uk-parent">
                <a href="#">MDAs</a>
                <ul class="uk-nav-sub uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li class="uk-parent">
                        <a href="#">Ministries</a>
                        <ul class="uk-nav-sub">
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
                    <li class="uk-parent">
                        <a href="#">Departments</a>
                        <ul class="uk-nav-sub">
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
                    <li class="uk-parent">
                        <a href="#">Agencies</a>
                        <ul class="uk-nav-sub">
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
                    <li class="uk-parent">
                        <a href="#">Boards</a>
                        <ul class="uk-nav-sub">
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
                    <li class="uk-parent">
                        <a href="#">Commission</a>
                        <ul class="uk-nav-sub">
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
                    <li class="uk-parent">
                        <a href="#">Others</a>
                        <ul class="uk-nav-sub">
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
            <li class="uk-parent">
                <a href="#">Projects</a>
                <ul class="uk-nav-sub">
                    <li class="uk-active"><a href="{{ route('planned.project') }}">Planned</a></li>
                    <li><a href="{{ route('ongoing.project') }}">On Going</a></li>
                    <li><a href="{{ route('completed.project') }}">Completed</a></li>
                    <li><a href="{{ route('donor.project') }}">Donor Projects</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Commerce</a>
                <ul class="uk-nav-sub">
                    <li class="uk-active"><a href="{{ route('investment') }}">Investment Oppurtunities</a></li>
                    <li><a href="{{ route('business') }}">Doing Business in Plateau</a></li>
                    <li><a href="{{ route('taxation') }}">Tax and Taxation</a></li>
                    <li><a href="{{ route('resources') }}">Natural Resources</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
    </div>
</div>