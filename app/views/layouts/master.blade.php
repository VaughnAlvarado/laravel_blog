<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
<!-- <link rel="stylesheet" hef="css/bootstrap.min.css">
 -->

    <title>Laravel Blog</title>


    @yield('top-script')
</head>
<body>
<div class="navbar-wrapper">
	<div class="container">
  		<nav class="navbar navbar-inverse navbar-static-top">
   		<div class="container">
     		<div class="navbar-header">
        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#">Resume</a>
     		</div>
      			<div id="navbar" class="navbar-collapse collapse">
        			<ul class="nav navbar-nav">
				        <li class="active"><a href="#">Home</a></li>
				        <li><a href="#about">Portfolio</a></li>
				        <li><a href="#contact">Projects</a></li>
				        <li class="dropdown">
            			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
           			<ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li class="dropdown-header">Nav header</li>
			            <li><a href="#">Separated link</a></li>
			            <li><a href="#">One more separated link</a></li>
           	 		</ul>
          			</li>
        			</ul>
      			</div>
    	</div>
  		</nav>
	</div>
</div>
    @yield('content')

    @yield('bottom-script')
</body>
<footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
</footer>
</html>