@extends('main')
@section('title', 'Contact')
@section('meta_title', 'SPK.Design | About Me')
@section('meta_description', "Hey! You should check out this page to see what I'm all about. Maybe you can even recommend something!")
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>About Sean</h1>
            <p>Currently I work as an SEO in Asbury Park, NJ. My responsibilites include managing search engine optimization, digital reputations, and front end design.</p>
          </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
      </div> <!-- end of row -->
      <section class="row">
      	<header class="col-md-8"><h2>Some notes about me and this site:</h2></header>
      	<article class="col-md-8">
          <p class="lead">Hey there! I'm a full stack developer who focuses on javascript and PHP. My day-to-day includes Wordpress theme and plugin development.</p>
          <h2>Some of the technologies I work with:</h2>
          <ul>
            <li>React</li>
            <li>Vue</li>
            <li>Wordpress</li>
            <li>Laravel</li>
          </ul>
      	</article>
      	<footer class="col-md-3">Updated December 2017</footer>
      </section>
@endsection