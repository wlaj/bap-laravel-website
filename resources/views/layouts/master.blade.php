<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Laravel</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="/css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600,700,800&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <h2>
    @section('header')
    WEBSHOP
    @show
  </h2>
    </header>
    <nav>
      NAVIGATION
    </nav>
    <section>
      @yield('products')
    </section>
    <main>
      @yield('content')
      </main>
      <footer>
      </footer>
</body>
</html>
