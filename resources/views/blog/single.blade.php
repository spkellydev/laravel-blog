@extends('main')
@section('title', " $post->title")
@section('content')

	<section class="row">
		<article class="col-md-8 col-md-offset-2">
			<header><h1>{{ $post->title }}</h1></header>
			<p>{{ $post->body }}</p>
			<hr>
			<p>Posted in: {{ $post->category->name }}</p>
		</article>
	</section>

@endsection