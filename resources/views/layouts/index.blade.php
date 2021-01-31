<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <title>Sporta</title>

    {{-- open sans font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    {{-- animate css --}}
    <link rel="stylesheet" href="/css/animate.css">

    {{-- fancybox css --}}
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    {{-- app css --}}
    <link rel="stylesheet" href="/css/app.css">

    @yield('custom_css')

</head>

<body>
    <div class="preloader"></div>
    <div id="app">
        <header>
            @include('layouts.partials.header')
        </header>


        @yield('content')



        <footer>
            @include('layouts.partials.footer')
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/34eb385340.js" crossorigin="anonymous"></script>
    <script src="/js/core/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap.min.js"></script>
    <script src="/js/plugins/jquery.fancybox.min.js"></script>

    <script src="/js/app.js"></script>

    <script>
        $('.preloader').fadeOut('slow');
    </script>
    @yield('custom_js')
</body>

</html>