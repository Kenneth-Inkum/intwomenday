<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        {{-- <h1 class="m-0"><i class="fa fa-female me-2"></i>IWD<span class="fs-5">Celebration</span></h1> --}}
        {{-- <img src="{{ asset('seo-agency-website-template/img/Bluespace Innovation Hub Black-01.png') }}" class="me-3" alt="Logo">
        <img src="{{ asset('seo-agency-website-template/img/logo-bcc.png') }}" class="me-3" alt="Logo">
        <img src="{{ asset('seo-agency-website-template/img/innovations-spark.png') }}" class="me-3" alt="Logo"> --}}

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('dashboard') }}"
                class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            {{-- <a href="{{ route('register') }}"
                class="nav-item nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
            <a href="{{ route('about-us') }}"
                class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About Event</a> --}}

            {{-- <a href="project.html" class="nav-item nav-link">Project</a> --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
        </div>
        <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
            <i class="fa fa-search"></i>
        </button>
        {{-- <a href="https://htmlcodex.com/startup-company-website-template"
            class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">
            Pro Version
        </a> --}}
    </div>
</nav>
