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
        {{-- loop through the posts to display on homepage --}}
        @foreach($posts as $post)

          <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-lg btn-primary">Read More</a>
          </div>
          <hr>

        @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
      </div>
@endsection