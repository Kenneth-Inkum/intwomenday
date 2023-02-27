<div>
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Register for the IWD Event</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('dashboard') }}">Home</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Full Screen Search Start -->
@include('layouts.partials.fullscreensearch')
<!-- Full Screen Search End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Register for the IWD Event</h6>
                    {{-- <h2 class="mt-2">Contact For Any Query</h2> --}}
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Location</label>
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example">
                                        <option></option>
                                        <option value="1">Building Supportive Communities for Women in Tech</option>
                                        <option value="2">Digital Skills for Female Entrpreneurs</option>
                                        <option value="3">Cybersecurity and Artificial Intelligence</option>
                                        <option value="">Breaking the glass Ceiling in Tech Careers</option>
                                    </select>
                                    <label for="message">Select your preferred breakout session</label>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

</div>
