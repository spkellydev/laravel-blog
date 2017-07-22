@extends('main')
@section('title', " $post->title")
@section('content')

	<section class="row">
		<article class="col-md-8 col-md-offset-2">
			<header><h1>{{ $post->title }}</h1></header>
			<p>{!! $post->body !!}</p>
			<hr>
			<p>Posted in: {{ $post->category->name }}</p>
		</article>
	</section>

	<aside class="row" style="padding: 20px">
		<div class="well col-md-8 col-md-offset-2">
			<h4><span class="glyphicon glyphicon-comment"></span> Comments</h4>
			<small>{{ $post->comments()->count() }} Conversations <a href="#comment-submisson" class="btn btn-xs btn-default">Leave Comment</a></small>
			<hr>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">
						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=retro" }}" class="author-image">
						<div class="author-name">
						<h6>{{ $comment->name }}</h6>
						<small class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at))  }}</small>
						</div>
					</div>
					<p class="comment-content">{{ $comment->comment }}</p>
				</div>
			@endforeach
		</div>
	</aside>

	<section class="row">
		<h3 class="text-center" id="comment-submisson">Leave a Comment</h3>
		<div id="comment_form" class="col-md-8 col-md-offset-2">
		{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])}}
			<div class="row">
				<div class="col-md-6">
					{{ Form::label('name', 'Name: ') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
				</div>
				<div class="col-md-6">
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email', null, ['class' => 'form-control']) }}
				</div>
				<div class="col-md-12">
					{{ Form::label('comment', 'Comment:') }}
					{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

					{{ Form::submit('Add comment!', ['class' => 'btn btn-success btn-block'])}}
				</div>
			</div>
		</div>
	</section>

@endsection