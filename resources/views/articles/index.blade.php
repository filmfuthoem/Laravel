@extends('layouts.main')
@section('content')
@if(session()->has('flash_message'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{{ session()->get('flash_message')}}
	</div>
@endif
<div class="jumbotron">
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-xs-12">
				<h1>Articles</h1>
				<p class="lead">All articles</p>
			</div>
		</div>
	</div>
</div>
@foreach($articles as $article)
<div class="panel panel-default">
	<div class="panel-heading">
		<a href="{{ url('articles', $article->id)}}">{{ $article->title }}</a>
	</div>
	<div class="panel-body">{{ $article->body}}</div>
	<div class="panel-footer">
		By <strong>{{ $article->user->name }}</strong>
		{{ $article->published_at->diffForHumans() }}
	</div>
</div>
@endforeach
@stop