<html lang="en">
<head>
  @yield('head-meta')
  <title>
    @yield('title')
  </title>
</head>

<body class="index-page sidebar-collapse">
  
  @yield('nav')

  {{-- @yield('banner') --}}

  @yield('slider')

  @yield('content')

  @yield('footer')

  @yield('jQuery')

</body>

</html>
