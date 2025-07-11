<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/appList.css">
  <script src="/js/appList.js" defer></script>
</head>
<header>
  @include('blog.header')
</header>

<body>
  <div class="container">
    @yield('content')
  </div>

</body>
<footer class="footer bg-dark  fixed-bottom">
  @include('blog.footer')
</footer>

</html>