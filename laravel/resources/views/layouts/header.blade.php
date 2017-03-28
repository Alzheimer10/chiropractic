      <header class="page-head">
        <!-- RD Navbar minimal-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="120px" data-lg-stick-up-offset="120px" class="rd-navbar rd-navbar-minimal rd-navbar-light" data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-top-panel">

                <!--Navbar Brand-->
                <div class="rd-navbar-brand veil reveal-md-inline-block"><a href="{{ route('index')}}"><img width='316' height='57' class='img-responsive' src="{{asset('images/logo-dark.png')}}" alt=''/></a></div>
                <div>
                  <address class="contact-info reveal-sm-inline-block text-left offset-none">
                    <div class="p unit unit-spacing-xs unit-horizontal">
                      <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light mdi mdi-phone text-java"></span></div>
                      <div class="unit-body"><a href="callto:#" class="text-gray-darker">1-800-1234-567</a><br/><a href="callto:#" class="text-gray-darker">1-800-3214-654</a></div>
                    </div>
                  </address>

                  <address class="contact-info reveal-sm-inline-block text-left">
                    <div class="p unit unit-horizontal unit-spacing-xs">
                      <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light mdi mdi-map-marker text-java"></span></div>
                      <div class="unit-body"><a href="#" class="text-gray-darker">2130 Fulton Street San Diego<br/>CA 94117-1080 USA</a></div>
                    </div>
                  </address>
                </div>
              </div>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand veil-md"><a href="index.html"><img width='316' height='57' class='img-responsive' src='images/logo-dark.png' alt=''/></a></div>
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="{{ route('index')}}"><img width='316' height='57' class='img-responsive' src='images/logo-dark.png' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form action="search-results.html" method="GET" class="form-search rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-form-search-widget" class="form-label form-search-label form-label-sm">Search</label>
                          <input id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input form-control form-control-gray-lightest input-sm"/>
                        </div>
                        <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{@route('index')}}"><span>{!! trans('header.main.menu.home') !!}</span></a>
                      </li>
                      <li><a ><span>{!! trans('header.main.menu.about') !!}</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="{{@route('about.weare')}}"><span class="text-middle">{!! trans('header.main.submenu.about.1') !!}</span></a>
                          <li><a href="{{@route('about.history')}}"><span class="text-middle">{!! trans('header.main.submenu.about.2') !!}</span></a>
                          </li>
                          <li><a href="{{@route('about.governance')}}"><span class="text-middle">{!! trans('header.main.submenu.about.3') !!}</span></a>
                          </li>
                        </ul>
                      </li>
<!--                       <li><a href="{{@route('services')}}"><span></span></a>
                      </li> -->
                      <li><a><span>{!! trans('header.main.menu.services') !!}</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="{{ route('services.medica')}}"><span class="text-middle">{!! trans('header.main.submenu.services.1') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.psychology')}}"><span class="text-middle">{!! trans('header.main.submenu.services.2') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.dental')}}"><span class="text-middle">{!! trans('header.main.submenu.services.3') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.newStart')}}"><span class="text-middle">{!! trans('header.main.submenu.services.4') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.depresion')}}"><span class="text-middle">{!! trans('header.main.submenu.services.5') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.internment')}}"><span class="text-middle">{!! trans('header.main.submenu.services.6') !!}</span></a>
                          </li> 
                          <li><a href="{{ route('services.healthy')}}"><span class="text-middle">{!! trans('header.main.submenu.services.7') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.formation')}}"><span class="text-middle">{!! trans('header.main.submenu.services.8') !!}</span></a>
                          </li>
                          <li><a href="{{ route('services.healthexpo')}}"><span class="text-middle">{!! trans('header.main.submenu.services.9') !!}</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="{{@route('contacts')}}" ><span>{!! trans('header.main.menu.contacts') !!}</span></a>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-menu-wrap,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label">{!! trans('header.main.search') !!}</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                    </div>
                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!--Swiper-->
        @includeIf($swiper)
      </header>