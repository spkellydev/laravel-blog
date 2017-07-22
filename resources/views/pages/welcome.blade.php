@extends('main')

@section('title', 'Home')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to my site!</h1>
            <p class="lead">This site was built on Laravel, and is my first attempt at creating a fully operational blog. The design will be changing any day now... Please feel free to look around, but I'm afraid there's not much to see!<br><small>Bootstrap CSS framework has been used, it is my intention to switch to Bulma.</small></p>
            </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-md-8">
        {{-- loop through the posts to display on homepage --}}
        <h2>Blog Posts</h2>
        @foreach($posts as $post)

          <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-lg btn-primary">Read More</a>
          </div>
          <hr>

        @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Featured Project</h2>
        </div>
      </div>
@endsection