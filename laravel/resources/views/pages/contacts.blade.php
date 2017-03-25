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
                    <h3>get in touch</h3>
                    <hr class="divider divider-lg bg-java hr-left-0 hr-sm-left-2">
                    <div class="offset-top-66">
                      <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit us personally.</p>
                      <p>We would be happy to answer your questions.</p>
                    </div>
                    <div class="offset-top-34">
                      <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate" class="rd-mailform text-left">
                        <div class="range range-xs-center">
                          <div class="cell-sm-6">
                            <div class="form-group form-group-label-outside">
                              <label for="contacts-first-name" class="form-label form-label-outside text-dark rd-input-label">First name</label>
                              <input id="contacts-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                            <div class="form-group form-group-label-outside offset-top-20">
                              <label for="contacts-email" class="form-label form-label-outside text-dark rd-input-label">E-mail</label>
                              <input id="contacts-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                          </div>
                          <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                            <div class="form-group form-group-label-outside">
                              <label for="contacts-last-name" class="form-label form-label-outside text-dark rd-input-label">Last name</label>
                              <input id="contacts-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                            <div class="form-group form-group-label-outside offset-top-20">
                              <label for="contacts-phone" class="form-label form-label-outside text-dark rd-input-label">Phone</label>
                              <input id="contacts-phone" type="text" name="last-name" data-constraints="@IsNumeric @Required" class="form-control form-control-last-child"><span class="form-validation"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group form-group-label-outside offset-top-20">
                          <label for="contacts-message" class="form-label form-label-outside text-dark rd-input-label">Message</label>
                          <textarea id="contacts-message" name="message" data-constraints="@Required" style="max-height: 150px;" class="form-control form-control-last-child"></textarea><span class="form-validation"></span>
                        </div>
                        <div class="offset-top-18 offset-sm-top-24 text-center text-sm-left">
                          <button type="submit" style="min-width: 130px;" class="btn btn-ellipse btn-java">send message</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0">
                    <div class="inset-lg-left-40">
                      <div>
                        <h6>Socials</h6>
                        <hr class="text-subline">
                                <ul class="list-inline">
                                  <li><a href="#" class="icon fa fa-facebook icon-xxs icon-circle icon-gray-light"></a></li>
                                  <li><a href="#" class="icon fa fa-twitter icon-xxs icon-circle icon-gray-light"></a></li>
                                  <li><a href="#" class="icon fa fa-google-plus icon-xxs icon-circle icon-gray-light"></a></li>
                                  <li><a href="#" class="icon fa fa-rss icon-xxs icon-circle icon-gray-light"></a></li>
                                </ul>
                      </div>
                      <div class="offset-top-60">
                        <h6>address</h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-map-marker text-primary"></div>
                            </div>
                            <div class="unit-body">
                              <p><a href="#" class="text-gray-dark">2130 Fulton Street San Diego,<br>CA 94117-1080 USA</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="offset-top-60">
                        <h6>OPENING hours</h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-calendar-clock text-primary"></div>
                            </div>
                            <div class="unit-body">
                              <div>Mon–Fri: 8:00am–6:00pm</div>
                              <div>Sat: 9:00am–3:00pm</div>
                              <div>Sun: 10:00am–2:00pm</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="offset-top-60">
                        <h6>Phones</h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-phone text-primary"></div>
                            </div>
                            <div class="unit-body"><a href="callto:#" class="text-dark reveal-block">1-800-1234-567</a><a href="callto:#" class="text-dark reveal-block">1-800-7654-876</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="offset-top-60">
                        <h6>e-mail</h6>
                        <hr class="text-subline">
                        <div class="offset-top-20">
                          <div class="unit unit-horizontal unit-spacing-xxs p">
                            <div class="unit-left">
                              <div class="icon icon-xxs text-middle mdi mdi-email-outline text-primary"></div>
                            </div>
                            <div class="unit-body"><a href="mailto:#" class="text-dark">info@demolink.org</a></div>
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