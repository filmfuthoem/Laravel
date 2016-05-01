@extends('layouts.main')
@section('content')
	<h1 class="page-title">Edit: {{ $article->title }}</h1>
	{!! Form::model($article, ['method' => 'PATCH',
		'action' => ['ArticlesController@update',$article->id]]) !!}
	@include('articles._form',['submitButtonText' => 'update Article']) 
	{!! Form::close() !!}
	@include('errors.list') 
@stop