<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>International Women's Day</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('seo-agency-website-template/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('seo-agency-website-template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('seo-agency-website-template/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('seo-agency-website-template/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('seo-agency-website-template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('seo-agency-website-template/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="bg-white">
        <!-- Spinner Start -->
        @include('layouts.partials.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0 ">

            {{-- @include('layouts.partials.navbar') --}}

            {{ $slot }}


            <!-- Footer Start -->
            @include('layouts.partials.footer')
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('seo-agency-website-template/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('seo-agency-website-template/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('seo-agency-website-template/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('seo-agency-website-template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('seo-agency-website-template/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('seo-agency-website-template/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('seo-agency-website-template/js/main.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        {{-- <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Mar 25, 2023 09:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in an element with id="demo"
                document.getElementById("count-down").innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script> --}}

        <script>
            @if (Session::has('message'))
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.success("{{ session('message') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.warning("{{ session('warning') }}");
            @endif
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAtuDkEFeKKAFAeX9bRG0n3KK2HCf-3ga0">
        </script>
        <script>
            var searchInput = 'search_input';
            $(document).ready(function() {
                var autocomplete;
                autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                    types: ['geocode']
                });
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var near_place = autocomplete.getplace();
                    document.getElementById('latitude_input').value = near_place.geometry.location.lat();
                    document.getElementById('longitude_input').value = near_place.geometry.location.lng();

                    document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                    document.getElementById('lontitude_view').innerHTML = near_place.geometry.location.lng();
                });
            });
            $(document).on('change', '#' + searchInput, function() {
                document.getElementById('latitude_input').value = '';
                document.getElementById('longitude_input').value = '';
                document.getElementById('latitude_view').innerHTML = '';
                document.getElementById('longitude_view').innerHTML = '';
            });
        </script>
</body>

</html>
