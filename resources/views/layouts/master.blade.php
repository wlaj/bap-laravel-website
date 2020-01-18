
<!doctype html>
<html>
<head>
    @include('partials.header')
</head>
<body>
<div class="container-large">

    <header class="">
        @include('partials.navbar')
    </header>

    <div id="main" class="">
            @include('partials.jumbo')
                @yield('content')

    </div>

    <footer class="row">
        @include('partials.footer')
    </footer>

</div>
</body>
</html>
