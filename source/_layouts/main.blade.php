<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description')">
        <title>@yield('title') - {{ $page->title }}</title>
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="icon" href="/favicon.png" />
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @if ($page->production)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-27TMTQRXF3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-27TMTQRXF3');
        </script>
        @endif
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            @include('_partials.navigation')
            @yield('body')
            @include('_partials.footer')
        </main>
    </body>
</html>
