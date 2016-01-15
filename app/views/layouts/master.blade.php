<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">


    <title>Laravel Blog</title>


    @yield('top-script')
    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
</head>
<body>
<div class="navbar-wrapper">
	<div class="container">
  		<nav class="navbar navbar-inverse navbar-static-top">
   		
     		<div class="navbar-header">
        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand">Blog</a>
     		</div>
      			<div id="navbar" class="navbar-collapse collapse">
        			<ul class="nav navbar-nav">
                <li><a href="{{{ action('PostsController@index') }}}">Home</a></li>
                <li><a href="{{{ action('PostsController@create') }}}" >Create Post</a></li>
                @if (Auth::user() == null) 
                <li><a href=" {{{ action('AuthController@signUp') }}}" >Sign Up</a></li>
                <li class = 'active'><a href=" {{{ action('AuthController@getLogin') }}}">Login</a></li>
                @else
                <li class = 'active'><a href="{{{ action('AuthController@getLogout') }}}">Logout</a></li>
                @endif
        			</ul>
      			</div>
  		</nav>
	</div>
</div>
<div class = navbar-spacer-background>
</div>
    @yield('content')

    <script src ="/js/jquery.min.js"></script>
    <script src ="/js/bootstrap.min.js"></script>
    @yield('bottom-script')
    @yield('stuff')
</body>
<footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
</footer>
</html>