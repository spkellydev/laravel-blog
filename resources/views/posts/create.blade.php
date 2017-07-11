@extends('main')

@section('title', 'Create New Post')

@section('stylesheets')
	{!! Html::style('./css/parsley.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offest-2">
			<h1>Create New Post</h1>
			<hr>
			{{-- Using laravel form helper from Laravel Collective --}}
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
			    {{ Form::label('title', 'Title:') }}
			    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Your Title', 'required', 'maxlength'=>'255') )}}

			    {{ Form::label('body', "Post Body:" ) }}
			    {{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Happy Blogging!', 'required') ) }}
			    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block') ) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')
	{!! Html::script('./js/parsley.min.js') !!}
@endsection