@extends('app.layouts.main')
@section('head-title', $head_title)
@section('description', $description)

@section('content')
  @include('app.layouts.partials.breadcrumbs',['title'=>$title,'breadcrumbs_description'=>$breadcrumbs_description])

<!-- Start Contact Area -->
<section id="contact-us" class="contact-us section">
  <div class="container">
    <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
      <div class="row">
        <div class="col-lg-5 col-12">
          <div class="single-head">
            <div class="contant-inner-title">
              <h4>Información de contacto</h4>
              <p>Business consulting excepteur sint occaecat cupidatat consulting non proident.</p>
            </div>
            <div class="single-info">
              <i class="nav-icon fas fa-phone"></i>
              <ul>
                <li>+51 999 999 999</li>
              </ul>
            </div>
            <div class="single-info">
              <i class="nav-icon far fa-envelope"></i>
              <ul>
                <li><a href="mailto:contactanos@lumiartperu.com">contactanos@lumiartperu.com</a></li>
              </ul>
            </div>
            <div class="single-info">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <ul>
                <li>Av. Juan de Arona 868, Miraflores, Lima.</li>
              </ul>
            </div>
            <div class="contact-social">
              <h5>Síguenos en</h5>
              <ul>
                <li>
                  <a href="#">
                    <span class="icon-1"><i class="fab fa-facebook"></i></span>
                    <span class="icon-2"><i class="fab fa-facebook"></i></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-1"><i class="fab fa-twitter"></i></span>
                    <span class="icon-2"><i class="fab fa-twitter"></i></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-1"><i class="fab fa-linkedin"></i></span>
                    <span class="icon-2"><i class="fab fa-linkedin"></i></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-1"><i class="fab fa-instagram"></i></span>
                    <span class="icon-2"><i class="fab fa-instagram"></i></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-1"><i class="fab fa-behance"></i></span>
                    <span class="icon-2"><i class="fab fa-behance"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-12">
          <div class="form-main">
            <form class="form" method="post" action="assets/mail/mail.php">
              <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input name="name" type="text" placeholder="Nombre" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input name="subject" type="text" placeholder="Asunto" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input name="email" type="email" placeholder="Email" required="required">
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input name="phone" type="text" placeholder="Teléfono" required="required">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group message">
                      <textarea name="message" placeholder="Mensaje"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group button">
                      <button type="submit" class="btn ">Enviar mensaje</button>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ End Contact Area -->

<!-- Start Google-map Area -->
<div class="map-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-container">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=bangladesh%20lakshmipur&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://embedgooglemap.net/129/"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Google-map Area -->

<!-- Start Newsletter Area -->
<section class="newsletter-area section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text wow fadeInLeft" data-wow-delay=".2s">
                    <h6>Sign up for Newsletter</h6>
                    <p class="">Sign Up and start using a free account <br> to see what it's all about.</p>
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                            required="" type="email">
                        <div class="button">
                            <button class="btn">Subscribe Now!</button>
                        </div>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-4 col-12">
                <div class="mini-call-action wow fadeInRight" data-wow-delay=".4s">
                    <h4>Do you want to grow your online business with Massive?</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="button">
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Newsletter Area -->
@stop
