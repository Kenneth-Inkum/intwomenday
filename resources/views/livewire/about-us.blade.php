<div>
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">About Event</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('dashboard') }}">Home</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">About Event</li>
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


<!-- About Start -->
@include('layouts.partials.synopsis')
<!-- About End -->

<!-- Team Start -->
@include('layouts.partials.team')
<!-- Team End -->

</div>
