<x-app-layout>
    <div id="myCarousel" class="carousel slide  bg-primary  mb-5" data-bs-ride="carousel">
        {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="{{ asset('seo-agency-website-template/img/IWD-Pull-up-bd.jpg') }}"
                    style="object-fit:fill" alt="">
                {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                {{-- <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div> --}}
            {{-- <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div> --}}
        </div>
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button> --}}
        {{-- <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> --}}
    </div>


    {{-- <div class="container-xxl py-5 bg-primary hero-header mb-5 white-footer">

        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn orange-logo" style="font-size: 100px">
                        DigitAll:
                    </h1>
                    <p class="text-white pb-3 animated zoomIn blue-logo" style="font-size: 28px">Innovation and
                        Technology<br>for Gender Equality</p>
                    <p class="text-white pb-3 animated zoomIn">Empowering Women in the Digital Space</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                        Quote</a>
                    <a href="{{ route('register') }}"
                        class="btn btn-outline-light py-sm-3 px-sm-5 mb-4 rounded-pill animated slideInRight">Register
                        Here</a>
                    <p class="text-white pb-3 animated zoomIn" id="count-down" style="font-size:35px"></p>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{ asset('seo-agency-website-template/img/IWD-Pull-up-0001 PNG.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div> --}}

    </div>
    <!-- Navbar & Hero End -->


    <!-- Full Screen Search Start -->
    @include('layouts.partials.fullscreensearch')
    <!-- Full Screen Search End -->

    <!-- Registeration Start -->

    <div class="container-xxl py-5" id="register">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                            data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Registeration</h6>
                            <h2 class="mt-2">Register for the IWD Event</h2>
                        </div>

                        <form method="POST" action="{{ route('store') }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name">
                                        <label for="name">Name</label>
                                        @error('name')
                                            <small class="error" style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Email</label>
                                        @error('email')
                                            <small class="error" style="color:red">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Phone Number">
                                        <label for="phone">Phone Number</label>
                                        @error('phone')
                                            <small class="error" style="color:red">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="location">
                                        <label for="location">Location</label>
                                        @error('location')
                                            <small class="error" style="color:red">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="form-floating">
                                        <select class="form-select" id="session" name="session">
                                            <option></option>
                                            <option value="Building Supportive Communities for Women in Tech">Building
                                                Supportive Communities for Women in Tech
                                            </option>
                                            <option value="Digital Skills for Female Entrpreneurs">Digital Skills for
                                                Female Entrpreneurs</option>
                                            <option value="Cybersecurity and Artificial Intelligence">Cybersecurity and
                                                Artificial Intelligence</option>
                                            <option value="Breaking the glass Ceiling in Tech Careers">Breaking the
                                                glass Ceiling in Tech Careers</option>
                                        </select>
                                        <label for="session">Select your preferred breakout session</label>
                                        @error('session')
                                            <small class="error" style="color:red">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 blue-footer"
                                        type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration End -->

    <!-- Testimonial Start -->
    @include('layouts.partials.testimonials')
    <!-- Testimonial End -->


    <!-- About Start -->
    @include('layouts.partials.about-us')
    <!-- About End -->

    <!-- Synopsis Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">Synopsis </h6>
                        <h2 class="mt-2">What to expect</h2>
                    </div>
                    <p class="mb-4">The upcoming BIH International Women's Day tech event is set to be an engaging and
                        informative expereince
                        <strong><em>"DigitAll: Innovation and technology for
                                Gender Equality,"</em></strong> and we are delighted to extent an invitation to you to
                        be a part of this transformative event.
                    </p>
                    <div class="section-title position-relative mb-4 pb-2">
                        <h2 class="mt-2">Break-out Session Topics</h2>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-12">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Building Supportive
                                Communities for Women in tech</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Digital Skills for Female
                                Entrepreneurs</h6>
                        </div>
                        <div class="col-sm-12">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Cybersecurity and Artificial
                                Intelligence</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Breaking the Glass Ceiling
                                in Tech Careers</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="{{ route('about-us') }}">Read More</a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://facebook.com/bluespacehubs"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://twitter.com/bluespacehubs"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://instagram.com/bluespacehubs"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                        src="{{ asset('seo-agency-website-template/img/about.jpg') }}">
                </div>

                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">What to Expect </h6>
                    <h2 class="mt-2"></h2>
                </div>
                <p class="mb-4"></p>

            </div>
        </div>
    </div> --}}
    <!-- Synopsis End -->



    <!-- Newsletter Start -->
    {{-- @include('layouts.partials.newsletter') --}}
    <!-- Newsletter End -->


    <!-- Service Start -->
    {{-- @include('layouts.partials.service') --}}
    <!-- Service End -->


    <!-- Portfolio Start -->
    @include('layouts.partials.portfolio')
    <!-- Portfolio End -->


</x-app-layout>
