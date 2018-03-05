@extends('main')

@section('title', '404! Zoinks, man.')

{{--  @section('stylesheets')
	{!! Html::style('./css/parsley.css') !!}
@endsection  --}}

@section('content')
    @include('partials._messages')

    <h2>{{ $exception->getMessage() }}</h2>

@endsection
{{--  
@section('scripts')
	{!! Html::script('./js/parsley.min.js') !!}
@endsection  --}}