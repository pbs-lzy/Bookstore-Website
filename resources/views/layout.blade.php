<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>My First Laravel Bookstore using Laravel 5.7</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/theme.default.css') }}" rel="stylesheet" type="text/css" />
  <link href="//code.jquery.com/ui/1.8.24/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.tablesorter.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.tablesorter.widgets.js')}}"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

  <header class="container"> 
    <img src="/images/logo.jpg" alt="" width="180"/>
  </header>

  <nav class="container">
    <table id="navTable"> 
      <tr> 
        <td class="value"><a href="/"><img src="/images/home.png" alt="" width="55"></a></td> 
        <td class="value"><a href="/request"><img src="/images/cart.png" alt="" width="55"></a></td> 
        <td class="value"><a href="/login"><img src="/images/login.png" alt="" width="55"></a></td>
        <td class="value"><a href="/register"><img src="/images/register.png" alt="" width="55"></a></td> 
        <td class="value"><a href="/home"><img src="/images/admin.png" alt="" width="55"></a></td> 
      </tr> 
    </table>
  </nav>

  <aside class="container">
    @yield('search')
  </aside>


  <article class="container">
    @yield('content')
  </article>

  <footer>
    Copyright 2019 Online Book Store
  </footer>


</body>
</html>

