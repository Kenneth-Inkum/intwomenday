<x-app-layout>
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn" style="font-size: 100px">
                        DigitAll:
                    </h1>
                    <p class="text-white pb-3 animated zoomIn" style="font-size: 28px">Innovation and Technology<br>for Gender Equality</p>
                    <p class="text-white pb-3 animated zoomIn">Empowering Women in the Digital Space</p>
                    {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                        Quote</a> --}}
                    <a href="{{ route('register') }}" class="btn btn-outline-light py-sm-3 px-sm-5 mb-4 rounded-pill animated slideInRight">Register Here</a>
                    <p class="text-white pb-3 animated zoomIn" id="count-down" style="font-size:35px"></p>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{ asset('seo-agency-website-template/img/undraw_engineering.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Navbar & Hero End -->


    <!-- Full Screen Search Start -->
    @include('layouts.partials.fullscreensearch')
    <!-- Full Screen Search End -->


    <!-- About Start -->
    @include('layouts.partials.about-us')
    <!-- About End -->


    <!-- Newsletter Start -->
    {{-- @include('layouts.partials.newsletter') --}}
    <!-- Newsletter End -->


    <!-- Service Start -->
    {{-- @include('layouts.partials.service') --}}
    <!-- Service End -->


    <!-- Portfolio Start -->
    {{-- @include('layouts.partials.portfolio') --}}
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    {{-- @include('layouts.partials.testimonials') --}}
    <!-- Testimonial End -->
</x-app-layout>
