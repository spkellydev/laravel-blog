<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
  <!-- Default Bootstrap Navbar -->
  @include('partials._nav')

    <div class="container">

      @yield('content')

      <hr>

      @include('partials._footer')

    </div> <!-- end of container -->

   @include('partials.js._javascript')
  </body>
</html>