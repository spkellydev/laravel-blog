@extends('main')

@section('title', 'View Post')

@section('content')
<div class="row">
	<div class="col-md-8">
		<img class="img-responsive" src="{{ asset('images/' . $post->image) }}">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{!! $post->body !!}</p>
		<hr>
		<div class="tags">
			@foreach ($post->tags as $tag)
				<span class="label label-default">{{ $tag->name }}</span>
			@endforeach
		</div>
		<p>TITLE: {{ $post->meta_title }}</p>
		<hr>
		<div id="backend-comments">
			<h4>Total Comments <small>{{ $post->comments()->count() }}</small></h4>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Comment</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($post->comments as $comment)
						<tr>
							<td>{{ $comment->name }}</td>
							<td>{{ $comment->email }}</td>
							<td>{{ $comment->comment }}</td>
							<td>
							<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>


	</div>
	<div class="col-md-4">
		<div class="well">
		<label>URL:</label>
		<a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a>
			<dl class="dl-horizontal">
				<label>Category:</label>
				<p>{{ $post->category->name }}</p>
			</dl>
			<dl class="dl-horizontal">
				<dt>
					Created At:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($post->created_at)) }}</dd>
				<dt>
					Lasted Updated:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				<hr>
					{{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block']) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection