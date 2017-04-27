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
                <div class="service"><img src="images/pages/home-02-320x3200.jpg" width="320" height="320" alt="" class="img-responsive"/><a href="{{ route('services.newStart')}}" class="service-desc h6">{!! trans('header.main.submenu.services.4') !!}<!-- Massage Therapy --></a>
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
                        <q>O Centro  VitaSalus® é o local ideal para devolver a vida e a esperança a quem já nada espera desta vida, a quem pensa já ter perdido tudo ou a quem está a pensar em desistir. Tratam o corpo, a mente e o espírito!”</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/pages/testimonios/testimonio1.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Familiar de participante no programa Ajuda na Recuperação da Depressão e Ansiedade.</cite>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>A experiência no Centro VitaSalus® foi extraordinária. Contribuiu para uma renovação dos meus hábitos de vida – alimentação, exercício físico, entre outros. Sinto-me mais feliz, menos ansioso, com mais esperança na vida.
                        </q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/pages/testimonios/testimonio2.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Tiago, 28 anos, programa NEWSTART<sup>&reg;</sup></cite>
                          </h5>
                          <!-- <p class="quote-desc text-capitalize text-gray text-italic">Paciente</p> -->
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>É indescritível a sensação de estar neste local e conviver com aqueles que aqui trabalham para nos ensinar a viver um estilo de vida saudável. Anseio por poder desfrutar dos vossos maravilhosos programas.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/pages/blankphoto.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Bryan Green</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">José Luís Dine Falcão Sincer E Sepúlveda</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote quote-classic">
                    <div class="quote-body">
                      <p class="h4 text-italic text-gray-dark">
                        <q>Lo que más me ha gustado de la Clinica en Penela es la sonrisa de la gente cuando uno llega y las palabras de bienvenida. Si vas con una patología, el camino a la cura ya está medio ganado. Despues está esa sensació de paz que proporciona la naturaleza que rodea el lugar. El levantarte por la mañana para participar del programa del día ( incluido el jardinaje:) te sienta muy bien, y cuando llega la hora de volver a casa, salimos con la seguridad de Isaias 46:3-4 entre otros.</q>
                      </p>
                      <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                        <div class="unit-left unit-item-narrow"><img width="60" height="60" src="images/pages/blankphoto.jpg" alt="" class="img-circle quote-img"/></div>
                        <div class="unit-body unit-item-wide">
                          <h5 class="quote-author text-capitalize text-bold">
                            <cite class="text-normal">Neria Bento</cite>
                          </h5>
                          <p class="quote-desc text-capitalize text-gray text-italic">Paciente</p>
                        </div>
                      </div>
                    </div>
                  </blockquote>
                </div> -->
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
            <figure height="200" class="thumbnail-josip thumbnail-big odd"><a ><img width="384" height="410" src="images/pages/ourteam/ourteam-01.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Viriato Ferreira</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Medico<br>Presidente da direcção</p>
              </div>
              <figcaption><a  class="btn btn-block btn-rect text-md-left btn-java">ler mais</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a><img width="384" height="410" src="images/pages/ourteam/ourteam-12.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">J. Marianne Ferreira</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Medica <br> Directora Clinica</p>
              </div>
              <figcaption><a class="btn btn-block btn-rect text-md-left btn-java">ler mais</a></figcaption>
            </figure>
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a ><img width="384" height="410" src="images/pages/ourteam/ourteam-07.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Raquel E. Cioc</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Enfermeira<br>Directora de Capelania</p>
              </div>
              <figcaption><a  class="btn btn-block btn-rect text-md-left btn-java">ler mais</a></figcaption>
            </figure>
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a><img width="384" height="410" src="images/pages/ourteam/ourteam-13.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Adela Rotaru</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0"><br>Coordenadora de Programas</p>
              </div>
              <figcaption><a  class="btn btn-block btn-rect text-md-left btn-java">ler mais</a></figcaption>
            </figure>
            <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a ><img width="384" height="410" src="images/pages/ourteam/ourteam-14.jpg" alt=""/></a>
              <div class="thumbnail-desc">
                <h5 class="thumbnail-josip-title text-bold text-white">Eduardo Gouveia</h5>
                <p class="veil reveal-md-block text-italic text-white offset-top-0">Odontologista<br>Coordenador de Programas</p>
              </div>
              <figcaption><a class="btn btn-block btn-rect text-md-left btn-java">ler mais</a></figcaption>
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