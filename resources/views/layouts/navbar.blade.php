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
                                      <!-- <li><a href="{{ route('min.environment') }}">Environment</a></li> -->
                                      <!-- <li class="uk-active"><a href="{{ route('commerce.industry') }}">Commerce &amp; Industries</a></li> -->
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
            <a href="{{ route('contact') }}">Contact Us <span>How to reach us</span></a>
          </li>
          <li>
            <a href="{{ route('contact') }}">Webmail</a>
          </li>
        </ul>
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary" href="#"></a>
      </div>
    </div>
  </nav>
</div>