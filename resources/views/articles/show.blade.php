@extends('layouts.main')
@section('content')
	<div class="page-header" id="banner">
		<h1>{{ $article->title}}</h1>
		<a class="btn btn-primary" href="{{ url("articles/{$article->id}/edit")}}">Edit</a>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">{{ $article->body}}</div>
	</div>
@unless($article->tags->isEmpty())
<div>Tags:
	<ul>
		@foreach($article->tags as $tag)
		<li>{{ $tag->name }}</li>
		@endforeach
	</ul>
</div>
@stop