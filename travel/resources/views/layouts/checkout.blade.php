<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <title>
  @yield('title')
  </title>
  
  
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>

<body>

  @include('includes.navbar-alternate')
  @yield('content')
  @include('includes.footer')

  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>

</html>