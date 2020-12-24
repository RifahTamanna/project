@extends('layouts.frontend.app', ['activePage' => 'home', 'titlePage' => __('Home')])

@push('css')

@endpush

@section('content')
<!-- Hero Section Start -->
<div class="hero-area">
  <div class="hero-slider">
    <div class="hero-carousel owl-carousel owl-theme">
      <div class="item">
        <section id="hero-section" class="hero-section">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="hero-content text-center">
                  <button class="btn btn-custom-a mr-4">Hire a Tutor</button>
                  <button class="btn btn-custom-a">Become a Tutor</button>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-footer text-center py-4 mt-4">
            <div class="container">
              <h1 class="">Call 0123456789 For Instant Support</h1>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- Hero Section End -->


<!-- Opinion Section Start -->
<section id="opinion-section" class="opinion-section">
  <div class="container">
    <h2 class="text-center">Tutor`s <span class="opinion-span">Opinion</span></h2>

    <div class="row">
      <div class="col-md-12">
        <div class="tutor-opinion-slider">
          <div class="opinion-carousel owl-carousel owl-theme">
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section> 
<!-- Opinion Section End -->


<!-- How It's Work Start -->
<section id="hiw-section" class="hiw-section">
  <div class="container">
    <h2 class="text-center">How it Works for <span class=""> Parents ?</span></h2>
    <div class="row">
      <div class="col-md-3">
        <div class="hiw-single">
          <div class="hiw-logo">
            <img src="{{asset('assets/frontend/assets/img/hiw1.png')}}" alt="" class="img img-fluid">
          </div>

          <div class="hiw-single-content">
            <div class="hiw-content text-center">
              <h5 class="mb-4">Post Your Tutor Requirements</h5>
              <p class="">Post your Tutor requirements. Our experts will analyze it and live your requirements to our job
                board.Post your Tutor require board.Post your Tutor require</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="hiw-single">
          <div class="hiw-logo">
            <img src="{{asset('assets/frontend/assets/img/hiw1.png')}}" alt="" class="img img-fluid">
          </div>

          <div class="hiw-single-content">
            <div class="hiw-content text-center">
              <h5 class="mb-4">Get the Maximum 5 Best Tutor CVs</h5>
              <p class="">Post your Tutor requirements. Our experts will analyze it and live your requirements to our job
                board.Post your Tutor require board.Post your Tutor require</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="hiw-single">
          <div class="hiw-logo">
            <img src="{{asset('assets/frontend/assets/img/hiw1.png')}}" alt="" class="img img-fluid">
          </div>

          <div class="hiw-single-content">
            <div class="hiw-content text-center">
              <h5 class="mb-4">Select the Best One & Start Learning</h5>
              <p class="">Post your Tutor requirements. Our experts will analyze it and live your requirements to our job
                board.Post your Tutor require board.Post your Tutor require</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="hiw-single">
          <div class="hiw-logo">
            <img src="{{asset('assets/frontend/assets/img/hiw1.png')}}" alt="" class="img img-fluid">
          </div>

          <div class="hiw-single-content">
            <div class="hiw-content text-center">
              <h5 class="mb-4">Post Your Tutor Requirements</h5>
              <p class="">Post your Tutor requirements. Our experts will analyze it and live your requirements to our job
                board.Post your Tutor require board.Post your Tutor require</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="rm-btn">
          <a href="#" class="mrd-btn">More Details<i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How It's Work End -->

    <!----Counter Area Start----->

    <section class="counter-area-strat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Quick & Convenient</h3>
                    </div>
                </div>
            </div>
            <div class="counter-content">
                <div class="row">

                     <div class="col-md-3 col-sm-12">
                        <div class="counters">
                             <img src="#">
                            <h3 style="cursor: pointer"><span class="counter"><b>5000</b></span><br> Registered Tutors </h3>
                            
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-12">
                        <div class="counters">
                             <img src="#" class="counter-icon">
                            <h3 style="cursor: pointer"><span class="counter"><b>
                                        28</b></span><br> Total Applied </h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                             <img src="#" class="counter-icon">
                            <h3><span class="counter"><b> 16</b></span><br> Live Tution Jobs</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                             <img src="#" class="counter-icon">
                            <h3 style="cursor: pointer"><span class="counter"><b>
                            5000</b></span><br> Stake Holders </h3>
                            
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </section>

    <!----Counter Area End----->

<!-- BAT Section Start -->
<section id="bat-section" class="bat-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="bat-text py-5">
          <h4 class="mb-0">Become a tutor and start earning!</h4>
          <p>Easiest way to create tutor profile</p>
        </div>
      </div>
      <div class="col-md-4">
        <a class="btn btn-custom-b text-center bat-btn" href="#">Become A Tutor (It's Free!)</a>
      </div>
    </div>
  </div>
</section>
<!-- BAT Section End -->
<!----Popular Category Area Start----->



    <!----Popular Category Area End----->
<!-- Opinion Section Start -->
<section id="parents_opinion-section" class="opinion-section">
  <div class="container">
    <h2 class="text-center">Parent`s <span class="opinion-span">Opinion</span></h2>

    <div class="row">
      <div class="col-md-12">
        <div class="tutor-opinion-slider">
          <div class="opinion-carousel owl-carousel owl-theme">
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="single-info">
                <div class="single-info-top">
                  <h3 class="text-custom font-weight-bold mb-0">Martin Brain</h3>
                  <p class="lead text-custom-p">UI Designer</p>
                </div>
                <div class="single-info-content">
                  <img class="" src="{{asset('assets/frontend/assets/img/opinion.png')}}" alt="">
                  <div class="single-info-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis vel. Beatae eos quod ipsa
                    cumque tempora! Suscipit aliquam earum necessitatibus quidem aut consequatur repellendus nesciunt vitae,
                    at ex.
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>

<!-- Opinion Section End -->
<!-- Android App Section Start -->
<section id="app-section" class="app-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="app-content">
          <div class="app-content-top">
            <h2>Download Student's care </h2>
            <h2><span class="">Android App</span></h2>
            <p class="text-custom-p w-75 mt-4">With  official app, Make your profile in minutes. Apply
              to your preferred tutoring jobs that match your skills</p>
          </div>
          <div class="app-footer mt-4">
            <a href="#">
              <img src="{{asset('assets/frontend/assets/img/playStore.png')}}" alt="" class="img img-fluid">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img src="{{asset('assets/frontend/assets/img/app.png')}}" alt="" class="img img-fluid">
      </div>
    </div>
  </div>
  <img class="app-bottom-bg" src="{{asset('assets/frontend/assets/img/grass.png')}}" alt="">
</section>
<!-- Android App Section End -->

@endsection

@push('js')
  {{-- expr --}}
@endpush

