@extends('layouts.master')
@section('css')
@stop

@section('content')
        <!-- Main services-->
        <section class="section-98 section-sm-20">
          <div class="shell">
            <div class="range offset-top-60 text-md-left">
              <div class="cell-sm-6 cell-md-4">
                <div class="service"><img src="images/pages/home-01-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.medica')}}" class="service-desc h6">{!! trans('header.main.submenu.services.1')!!}<!-- Chiropractic Care --></a>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                <div class="service"><img src="images/pages/home-02-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.newStart')}}" class="service-desc h6">{!! trans('header.main.submenu.services.4') !!}<!-- Massage Therapy --></a>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="service"><img src="images/pages/home-03-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.depresion')}}" class="service-desc h6">{!! trans('header.main.submenu.services.5') !!}<!-- Lifestyle Advice --></a>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50">
                <div class="service"><img src="images/pages/home-04-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.internment')}}" class="service-desc h6">{!! trans('header.main.submenu.services.6')!!}<!-- Nutrition Counseling --></a>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50">
                <div class="service"><img src="images/pages/home-05-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.healthy')}}" class="service-desc h6">{!! trans('header.main.submenu.services.7') !!}<!-- Corrective Exercises --></a>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50">
                <div class="service"><img src="images/pages/home-06-320x320.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.formation')}}" class="service-desc h6">{!! trans('header.main.submenu.services.8') !!}<!-- Spinal Screenings --></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonials-->
        <section class="section-98 section-sm-20">
          <div class="shell">
            <h3>{!! trans('header.main.welcome.testimonials') !!}<!-- Testimonials --></h3>
            <hr class="divider divider-lg bg-primary">
            <div class="offset-top-66">
              <div data-loop="false" data-items="1" data-dots="true" data-mouse-drag="false" data-md-items="2" data-nav="false" class="owl-carousel owl-carousel-default owl-carousel-class-light">
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>The costs of treatments are very reasonable at Chiropractic and I have always been impressed with the results. The fully qualified team at the clinic are professional and friendly.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Betty Wade</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>Dr. Snyder is a wonderful Doctor, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Bryan Green</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>Dr. Snyder is a wonderful Doctor, who makes you feel important and who takes time to listen, which most doctors don’t do. Loved him from the first visit! Very professional assistance.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/users/user-bryan-green-60x60.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Bryan Green</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>The costs of treatments are very reasonable at Chiropractic and I have always been impressed with the results. The fully qualified team at the clinic are professional and friendly.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/users/user-betty-wade-60x60.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Betty Wade</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Our Team-->
        <section class="section-60 section-sm-20" style="padding-bottom: 60px !important;">
        <h3>{!! trans('header.main.welcome.staff') !!}<!-- Testimonials --></h3>
            <hr class="divider divider-lg bg-primary">
          <div class="reveal-md-flex range-xs-center">
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-01.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Scott Riley</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            </div>
            <div class="reveal-md-flex range-xs-center">
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-02.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Johnny Fowler</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chiropractor</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-03.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Eric Snyder</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Clinical Chiropractic Assistant</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-04.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Martha Schmidt</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Licensed Massage Therapist</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-05.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Katherine Wong</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Front Desk Coordinator</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
          </div>
          <div class="reveal-md-flex range-xs-center">
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-06.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Scott Riley</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-07.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Johnny Fowler</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chiropractor</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-08.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Eric Snyder</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Clinical Chiropractic Assistant</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-09.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Martha Schmidt</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Licensed Massage Therapist</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
          </div>
          <div class="reveal-md-flex range-xs-center">
            
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-10.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Scott Riley</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img class="thumbnail zoom" width="384" height="410" src="images/pages/ourteam/ourteam-11.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Scott Riley</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-12.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Eric Snyder</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Clinical Chiropractic Assistant</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img width="384" height="410" src="images/pages/ourteam/ourteam-13.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Martha Schmidt</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Licensed Massage Therapist</p>
              </div>
              <figcaption><a href="team-member.html" class="btn btn-block btn-rect text-md-left btn-java">view full profile</a></figcaption>
            </figure>
          </div>
        </section>
        <!-- Contacts-->
        <section class="section-98 section-sm-110 text-center" style="display: none">
          <div class="shell">
            <div class="range">
              <div class="cell-md-4">
                <div class="icon icon-lg-1 icon-circle icon-blue-gray-filled mdi mdi-phone"></div>
                <h5><a href="callto:#" class="text-darker">1-800-1234-567</a></h5>
              </div>
              <div class="cell-md-4 offset-top-50 offset-md-top-0">
                <div class="icon icon-lg-1 icon-circle icon-blue-gray-filled mdi mdi-map-marker"></div>
                <h5><a href="#" class="text-darker">2130 Fulton Street San Diego,<br class="veil reveal-md-block"> CA 94117-1080 USA</a></h5>
              </div>
              <div class="cell-md-4 offset-top-50 offset-md-top-0">
                <div class="icon icon-lg-1 icon-circle icon-blue-gray-filled mdi mdi-email-outline"></div>
                <h5><a href="mailto:#" class="text-darker">info@demolink.org</a></h5>
              </div>
            </div>
          </div>
        </section>
@stop

@section('js')
@stop