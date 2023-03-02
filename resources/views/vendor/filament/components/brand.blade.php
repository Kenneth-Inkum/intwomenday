@if (filled($brand = config('filament.brand')))
    {{-- <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        {{ $brand }}
    </div> --}}

    <img src="{{ asset('seo-agency-website-template/img/Bluespace Innovation Hub Black-01.png') }}" alt="">
@endif
