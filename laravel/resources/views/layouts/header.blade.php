      <header class="page-head">
        <!-- RD Navbar minimal-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="120px" data-lg-stick-up-offset="120px" class="rd-navbar rd-navbar-minimal rd-navbar-light" data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-top-panel">

                <!--Navbar Brand-->
                  <address class="contact-info reveal-sm-inline-block text-left offset-none">
                    <div class="p unit unit-spacing-xs unit-horizontal">
                      <div class="unit-left">
                      <span class="icon icon-xs icon-circle icon-gray-light mdi mdi-phone text-java"></span>
                      </div>
                      <div class="unit-body">
                        <a href="callto:351239098747" class="text-gray-darker">Penelas +351 239 098747</a>
                        <br/>
                        <a href="callto:+351218454230" class="text-gray-darker">Lisboa +351 218 454230</a>
                        <br/>
                        <a href="callto:+351236027660" class="text-gray-darker">Pombal +351 236 027660</a>
                        <!--
                          Penelas +351 239 098747
                          Lisboa +351 218 454230
                          Pombal +351 236 027660
                        -->
                      </div>
                    </div>
                  </address>

                <div class="rd-navbar-brand veil reveal-md-inline-block"><a href="{{ route('index')}}"><img width='316' height='57' class='img-responsive' src="{{asset('images/logo-dark.jpeg')}}" alt=''/></a>
                </div>
                  <address class="text-rigth">
                    <div class="p unit unit-spacing-xs unit-horizontal">
                      <div class="unit-left">
                      <a target="_blank" href="https://www.facebook.com/medicinapreventiva.pt/?fref=ts" class="icon fa fa-facebook icon-xs icon-circle icon-gray-light-2">
                        
                      </a>
                      </div>
                      <div class="unit-body">
                          @include('complements/idiomaSelect')                 
                      </div>
                    </div>
                  </address>
              </div>
              <style type="text/css">
                .rd-navbar-minimal.rd-navbar-fixed .rd-navbar-top-panel{
                      overflow: initial!important; 
                }
                .rd-navbar-minimal.rd-navbar-fixed .rd-navbar-top-panel{
                  right: 0px !important;
                }
              </style>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand veil-md"><a href="{{ route('index')}}"><img width='316' height='57' class='img-responsive' src='images/logo-dark.png' alt=''/></a></div>
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="{{ route('index')}}"><img width='316' height='57' class='img-responsive' src='images/logo-dark.jpeg' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form action="" method="GET" class="form-search rd-search">
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
                      <li><a href="{{@route('galery')}}" ><span>{!! trans('header.main.menu.galery') !!}</span></a>
                      </li>
                      <li><a href="{{@route('contacts')}}" ><span>{!! trans('header.main.menu.contacts') !!}</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-menu-wrap,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
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