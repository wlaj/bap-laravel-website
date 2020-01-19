
<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<body>
<div class="container-large">

    <header class="">
        @include('partials.navbar')
    </header>

    <div id="main" class="">
                @yield('content')

    </div>

    <footer class="">
        @include('partials.footer')
    </footer>

</div>
</body>
</html>
