<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.layouts.head')

  </head>

  <body>

    @include('user.layouts.header')

      @yield('content')
  

    @include('user.layouts.footer')

    @include('user.layouts._script')

  </body>

</html>
