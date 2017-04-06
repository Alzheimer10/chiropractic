@extends('layouts.master')
@section('css')
@stop

@section('content')
 <main class="page-content section-top-98 section-sm-top-110">
        <!-- Get In Touch-->
        <section>
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-12">
                <div class="range">
                  <div class="cell-lg-8 text-left">
                    <h3>{!! trans('header.main.contacts.title') !!}</h3>
                    <hr class="divider divider-lg bg-java hr-left-0 hr-sm-left-2">
                    <div class="offset-top-66">

                      <p>@choice('header.main.contacts.message',1)</p>
                      <p>@choice('header.main.contacts.message',2)</p>
                     <!--  <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit us personally.</p>
                     <p>We would be happy to answer your questions.</p> -->
                    </div>
                    <div class="offset-top-34">
                      <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate" class="rd-mailform text-left">
                        <div class="range range-xs-center">
                          <div class="cell-sm-6">
                            <div class="form-group form-group-label-outside">
                              <label for="contacts-first-name" class="form-label form-label-outside text-dark rd-input-label">{!! trans('header.main.contacts.form.1') !!}<!-- First name --></label>
                              <input id="contacts-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                            <div class="form-group form-group-label-outside offset-top-20">
                              <label for="contacts-email" class="form-label form-label-outside text-dark rd-input-label">{!! trans('header.main.contacts.form.3') !!}<!-- E-mail --></label>
                              <input id="contacts-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                          </div>
                          <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                            <div class="form-group form-group-label-outside">
                              <label for="contacts-last-name" class="form-label form-label-outside text-dark rd-input-label">{!! trans('header.main.contacts.form.2') !!}<!-- Last name --></label>
                              <input id="contacts-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                            <div class="form-group form-group-label-outside offset-top-20">
                              <label for="contacts-phone" class="form-label form-label-outside text-dark rd-input-label">{!! trans('header.main.contacts.form.4') !!}<!-- Phone --></label>
                              <input id="contacts-phone" type="text" name="last-name" data-constraints="@IsNumeric @Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="contacts-message" class="form-label form-label-outside text-dark rd-input-label">{!! trans('header.main.contacts.form.5') !!}<!-- Message --></label>
                          <textarea id="contacts-message" name="message" data-constraints="@Required" style="max-height: 150px;" class="form-control form-control-last-child"></textarea><span class="form-validation"></span>
                        </div>
                        <div class="offset-top-18 offset-sm-top-24 text-center text-sm-left">
                          <button type="submit" style="min-width: 130px;" class="btn btn-ellipse btn-java">{!! trans('header.main.contacts.form.6') !!}<!-- send message --></button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0">
                    <div class="inset-lg-left-40">
                      <div>
                        <h6>{!! trans('header.main.contacts.labels.1') !!}<!-- Socials --></h6>
                        <hr class="text-subline">
                                <ul class="list-inline">
                                  <li><a href="https://www.facebook.com/medicinapreventiva.pt/?fref=ts" target="_blank" class="icon fa fa-facebook icon-xxs icon-circle icon-gray-light-2"></a></li>
                                </ul>
                      </div>
                      <div class="offset-top-60">
                        <h6>{!! trans('header.main.contacts.labels.2') !!}<!-- address --></h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                            </div>
                            <div class="unit-body">
                              <p class="text-gray-dark">Serra de Santa Maria, 3230-055<br>Espinhal PORTUGAL</p>
                            </div>
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                            </div>
                              <div class="unit-body">
                              <p class="text-gray-dark">Av. Fontes Pereira de Melo, nº31 - 5ºA, 1050-117 <br>Lisboa PORTUGAL</p>
                              </div>
                              <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                            </div>
                            <div class="unit-body">
                              <p class="text-gray-dark">Quinta da Casinha, Lt. 2, Loja A 2 RCA3100-545<br>Pombal PORTUGAL</p>
                            </div>    
                          </div>
                        </div>
                      </div>
      
                      <div class="offset-top-60">
                        <h6>{!! trans('header.main.contacts.labels.4') !!}<!-- Phones --></h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-phone text-primary"></div>
                            </div>
                            <div class="unit-body">
                            <div  class="text-dark reveal-block">Penelas +351 239 098747</div>
                            <div class="text-dark reveal-block"> Lisboa +351 218 454230</div>
                            <div  class="text-dark reveal-block">Pombal  +351 236 027660</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="offset-top-60">
                        <h6>{!! trans('header.main.contacts.labels.5') !!}<!-- e-mail --></h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-email-outline text-primary"></div>
                            </div>
                            <div class="unit-body"><a href="mailto:#" class="text-dark">info@medicinapreventiva.pt </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@stop

@section('js')
@stop