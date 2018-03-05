@extends('main')
@section('title', " $project->title")
@section('meta_title', " $project->meta_title")
@section('meta_description', "$project->meta_description")
@section('content')

	<section class="row blog">
		<article>
			<header>
				<img class="img-responsive" src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}">
				<h1 class="section-heading">{{ $project->title }}</h1>
			</header>
			<div class="col-md-8 col-md-offset-2">
				<p>{!! $project->body !!}</p>
				<hr>
				<p>projected in: {{ $project->category->name }}</p>
			</div>
		</article>
	</section>

@endsection