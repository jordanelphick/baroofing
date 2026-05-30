<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BA Roofing — reliable Newcastle roofer with 15+ years experience. Metal roofing, re-roofing, repairs, guttering, skylights & more.">
    <title>@yield('title', config('site.name') . ' — Newcastle Roofing Specialists')</title>

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --preview-chrome-height: 6.75rem;
            --site-header-height: 4rem;
        }
    </style>
</head>
<body class="text-brand-900">
    @include('partials.elphick-chrome', ['position' => 'top'])

    <div id="preview-site">
        @include('partials.header')
        @include('partials.mobile-menu')
        @include('partials.preview-modal')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @include('partials.elphick-chrome', ['position' => 'bottom'])
</body>
</html>
