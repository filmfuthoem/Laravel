@extends('layouts.main')
@section('content')

<!-- @if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif -->

	<h1 class="page-title">Write A New Article</h1>
	{!! Form::open(['url'=>'articles']) !!}
	@include('articles._form', ['submitButtonText' => 'Add Article']) 
<!-- <div class="form-group">
	{!! Form::label('title','Article Title: ') !!}
	{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('body','Body : ') !!}
	{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('pubished_at','Publish on: ') !!}
	{!! Form::input('date','published_at',\Carbon\Carbon::now()->format('Y-m-d'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div> -->
	{!! Form::close() !!}
	@include('errors.list') 
@stop