<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}">
</head>

  <body>
    <header>
      <h1>Shop</h1>

      <div class="link">
        <a href="/">Accueil</a>
        <a href="/albums">Albums</a>
        <a href="/instruments">Instruments</a>
        <a href="/accessoires">Accessoires</a>
      </div>
    </header>
    <main>
      @yield("main")
    </main>

  </body>
</html>
