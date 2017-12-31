@extends('index')

@section('title', 'Home')
@section('meta_title', 'SPK.Design | Sean Kelly - Full Stack Web Developer')
@section('meta_description', "Hello! My name is Sean Kelly and I am a full stack developer. My areas of interest are PHP, Node, Vue, React, and Express. Feel free to say hi!")



@section('content')
      <div id="app">
        <example-component></example-component>
      </div>
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
        <div class="col-md-3 col-md-offset-1 feature-project">
            <h2>Featured Project:</h2>
            <img src="./images/feature-project.jpg" class="img-responsive">
            <h4>Jekyll Build, Hosted on Netlify</h4>
            <p>This is the base design for a local storage company located in Monmouth County. The build used Front Matter, YAML, and Bulma powered by Github's static site generator, Jekyll.</p>
            <a href="/blog/jekyll">Read More</a>
        </div>
      </div>
@endsection