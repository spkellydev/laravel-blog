<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
  <!-- Default Bootstrap Navbar -->
  @include('partials._nav')

    <div class="container">
      @include('partials._messages')
    </div>
      @include('partials._hero')
      <div class="container">
      @yield('content')
      </div>
      <hr>

      @include('partials._footer')

    </div> <!-- end of container -->

   @include('partials.js._javascript')
   @yield('scripts')
  </body>
</html>