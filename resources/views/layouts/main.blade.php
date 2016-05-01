<!Doctype html> 
<html> 
<head>  
	<meta charset="utf-8">
	<title>Page: @yield('site_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equive="X-UA-Compatible" content="IE=edge"> 
	{!! HTML::style('bootstrap/css/bootstrap.min.css') !!}	
	{!! HTML::style('custom/css/navbar-fixed-top.css') !!}	
</head> 
<body>
	<div class="navbar navbar-default " role="navigation">     
		<div class="container-fluid">         
			<div class="navbar-header">             
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">             
					<span class="sr-only">Toggle navigation</span>             
					<span class="icon-bar"></span>             
					<span class="icon-bar"></span>             
					<span class="icon-bar"></span>             
				</button> <a class="navbar-brand" href="{{ url('articles') }}">Home</a>
			</div> 
			<div class="navbar-collapse collapse">             
				<ul class="nav navbar-nav">                 
					<li>                     
						<a href="{{ url('pages/about') }}">About</a>                 
					</li>           
				</ul>  
   				<ul class="nav navbar-nav navbar-right>">       
   					<li>       
   						<a href="{{ url('articles/create') }}">New Article</a>        
   					</li>
   				</ul>         
   			</div><!--/.nav-collapse -->     
   		</div> 
   	</div>  	
	<!-- <ul>
		<li><a href="{{ url('pages/contact') }}">Contact</a></li>
		<li><a href="{{ url('pages/about') }}">About</a></li>
	</ul> -->

	<div class="container">         
		@yield('content') 
	</div>  

	<div class="footer container-fluid">  
		Copyright &copy; 2015 
	</div> 
	{!! HTML::script('js/jquery.min.js') !!}
	{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
</body> 
</html>