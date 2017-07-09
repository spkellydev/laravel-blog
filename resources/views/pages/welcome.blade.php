@extends('main')

@section('title', 'Home')

@section('content')
      <div class="row">
        <h1>Hello, world!</h1>
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to the Blog</h1>
            <p class="lead">Thank you for visiting. This project has been built with Laravel. Please read my popular post</p>
            <p><a href="#" class="btn btn-primary btn-lg">Popular Post</a></p>
          </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h3>Post TItle</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-lg btn-primary">Read More</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post TItle</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-lg btn-primary">Read More</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post TItle</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-lg btn-primary">Read More</a>
          </div>
          <hr>
          <div class="post">
            <h3>Post TItle</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-lg btn-primary">Read More</a>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
      </div>
@endsection