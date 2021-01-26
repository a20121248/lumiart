@extends('app.layouts.main')
@section('head-title', $head_title)
@section('description', $description)

@section('content')
  <!-- Start Hero Area -->
  <section class="hero-area">
    <!-- Single Slider -->
    <div class="hero-inner">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 co-12">
            <div class="home-slider">
              <div class="hero-text">
                <h1 class="wow fadeInUp" data-wow-delay=".3">Take your business to next level.</h1>
                <p class="wow fadeInUp" data-wow-delay=".5s">Lorem Ipsum is simply dummy text of the
                  printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard
                  <br>dummy text ever since.</p>
                <div class="button wow fadeInUp" data-wow-delay=".7s">
                  <a href="about-us.html" class="btn">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Single Slider -->
  </section>
  <!--/ End Hero Area -->

  <!-- Start Service Area -->
  <section class="services section">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-title align-left">
                      <span class="wow fadeInDown" data-wow-delay=".2s">Core Features</span>
                      <h2 class="wow fadeInUp" data-wow-delay=".4s">Provide Awesome Service With Our Tools</h2>
                      <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                          Ipsum available, but the majority have suffered alteration in some form.</p>
                  </div>
              </div>
          </div>
          <div class="single-head">
              <img class="service-patern wow fadeInLeft" data-wow-delay=".5s"
                  src="{{ asset('storage/images/service/service-patern.png') }}" alt="#">
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                          <h3><a href="service-single.html">Discover, Explore the Product</a></h3>
                          <div class="icon">
                              <i class="lni lni-microscope"></i>
                          </div>
                          <p>Discover, Explore & Understanding The Product</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                          <h3><a href="service-single.html">Art Direction & Brand Strategy</a></h3>
                          <div class="icon">
                              <i class="lni lni-blackboard"></i>
                          </div>
                          <p>Art Direction & Brand Communication</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                          <h3><a href="service-single.html">Product UX, Design & Development‎‎</a></h3>
                          <div class="icon">
                              <i class="lni lni-ux"></i>
                          </div>
                          <p>Digital Product UX, Design & Development</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="single-service wow fadeInUp" data-wow-delay=".8s">
                          <h3><a href="service-single.html">Marketing Strategy & SEO Campaigns</a></h3>
                          <div class="icon">
                              <i class="lni lni-graph"></i>
                          </div>
                          <p>Marketing Strategy & SEO Campaigns</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /End Services Area -->

  <!-- Start About Us Area -->
  <section class="about-us section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-12">
                  <div class="about-left">
                      <div class="section-title align-left">
                          <span class="wow fadeInDown" data-wow-delay=".2s">What we do</span>
                          <h2 class="wow fadeInUp" data-wow-delay=".4s">Websites that tell your brand's story</h2>
                          <p class="wow fadeInUp" data-wow-delay=".6s">We're a digital product and UX agency Strategy,
                              design
                              and development across all platforms.</p>
                      </div>
                      <div class="about-tab wow fadeInUp" data-wow-delay=".4s">
                          <!-- Nav Tab  -->
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#t-tab1"
                                      role="tab">Content</a></li>
                              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab2"
                                      role="tab">Strategy</a></li>
                              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab3"
                                      role="tab">Development</a></li>
                          </ul>
                          <!--/ End Nav Tab -->
                          <div class="tab-content" id="myTabContent">
                              <!-- Tab 1 -->
                              <div class="tab-pane fade show active" id="t-tab1" role="tabpanel">
                                  <div class="tab-content">
                                      <p>Duis aute irure dolor in reprehenderit in voluptate
                                          velit esse cillum dolore eu fugiat nulla .Nemo en
                                          ipsam voluptatem quia voluptas sit asper.</p>
                                      <ul>
                                          <li><i class="lni lni-checkmark-circle"></i> Commitment to excelence</li>
                                          <li><i class="lni lni-checkmark-circle"></i> Clients are our partners</li>
                                          <li><i class="lni lni-checkmark-circle"></i> Fun is an absolute must</li>
                                      </ul>
                                  </div>
                              </div>
                              <!--/ End Tab 1 -->
                              <!-- Tab 2 -->
                              <div class="tab-pane fade" id="t-tab2" role="tabpanel">
                                  <div class="tab-content">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing ,
                                          sed do eiusmod tempor incididunt ut labore et dolore.
                                          Ut enim ad minim veniam, quis nostrud exercitation
                                          ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat.</p>
                                      <p>Duis aute irure dolor in reprehenderit in voluptate
                                          velit esse cillum dolore eu fugiat nulla .Nemo en
                                          ipsam voluptatem quia voluptas sit asper.</p>

                                  </div>
                              </div>
                              <!--/ End Tab 2 -->
                              <!-- Tab 3 -->
                              <div class="tab-pane fade" id="t-tab3" role="tabpanel">
                                  <div class="tab-content">
                                      <p>Duis aute irure dolor in reprehenderit in voluptate
                                          velit esse cillum dolore eu fugiat nulla .Nemo en
                                          ipsam voluptatem quia voluptas sit asper.</p>
                                      <ul>
                                          <li><i class="lni lni-checkmark-circle"></i> Commitment to excelence</li>
                                          <li><i class="lni lni-checkmark-circle"></i> Clients are our partners</li>
                                          <li><i class="lni lni-checkmark-circle"></i> Fun is an absolute must</li>
                                      </ul>
                                  </div>
                              </div>
                              <!--/ End Tab 3 -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-12">
                  <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                      <img src="{{ asset('storage/images/about/about-img.png') }}" alt="#">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /End About Us Area -->
@stop
