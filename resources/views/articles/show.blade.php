@extends('layouts.main')
@section('content')
	<div class="page-header" id="banner">
		<h1>{{ $article->title}}</h1>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">{{ $article->body}}</div>
	</div>
@stop