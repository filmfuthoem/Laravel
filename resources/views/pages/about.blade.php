@extends('layouts.main')
@section('site_title','About Me')
@section('content')
   <div class="page-header">
      <h1>About Me: {{$first}} {{  $last }}</h1>
   </div>
   <h4>Favorite Quote</h4>
   <blockquote>
       <p>Life is like riding a bicycle. To keep your balance, you must keep moving.</p>         
       <footer>Albert Einstein</footer> 
   </blockquote>

   <div class="panel panel-info"> 
      <div class="panel-heading"> 
         <h3 class="panel-title">My Skills</h3> 
      </div> 
      <div class="panel-body"> 
         <ul class="list-group">         
            @foreach($skills as $skill)        
            <li class="list-group-item">{{ $skill }}</li>    
            @endforeach        
         </ul> 
      </div> 
   </div><!--/.panel-info --> 

   <div class="row">         
      <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">             
         <i class="glyphicon glyphicon-film"></i>             Harry Potter         
      </div>         
      <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">             
         <i class="glyphicon glyphicon-music"></i>             Love Me Like You Do         
      </div>         
      <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">             
         <i class="glyphicon glyphicon-heart"></i>             Laravel 5         
      </div>         
      <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">             
      <i class="glyphicon glyphicon-plane"></i>             Paris, France         
      </div>     
   </div>

   <!--  
   <p>My Skills</p>
   <ul>
   		@foreach ($skills as $skill )
   			<li>{{ $skill }}</li>
   		@endforeach
   </ul> --> 
   <!-- <h1>Articles</h1> -->
   <!-- {!! HTML::link("pages/contact", "Contact", ["class" => "btn"]) !!}  -->
   <!-- {!! HTML::image("images/kitten.png", "alt", ["class" => "img"]) !!}
   <ul>
   <li><a href="{{ action('ArticlesController@show',[1]) }}">Article 1</a></li>
   <li><a href="{{ url('articles',[1,'edit']) }}">Edit Article 1</a></li>   
   </ul> -->
@stop