@extends('layouts.master')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
	<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          	<img class="first-slide" src="/img/Resume.jpg" alt="First slide">
        	<div class="container">
            	<div class="carousel-caption">
             		<h1>Vaughn Alvarado.</h1>
            	</div>
          	</div>
        </div>

        <div class="item">
          	<img class="second-slide" src="/img/Resume.jpg" alt="Second slide">
         	<div class="container">
            	<div class="carousel-caption">
              		<h1>Web Developer</h1>
            	</div>
          	</div>
        </div>

        <div class="item">
          	<img class="third-slide" src="/img/Resume.jpg" alt="Third slide">
          	<div class="container">
            	<div class="carousel-caption">
              		<h1>Web Designer</h1>  
            	</div>
          	</div>
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<div class="row">
	<div class="col-md-8">
    <img class="img-circle" src="/img/Resume.jpg" alt="Generic placeholder image" width="140" height="140">
         <table class="table table-striped table-bordered">   
            <tbody>
              	<tr>
               		<th scope="row">Experience:</th>
               			<td> 1. Full Stack BootCamp @ Code Up<br>
                 			2. Volunteer Web Design/Web Development
              			</td>   
            	</tr>      
           	</tbody>
         </table>
   	</div>
</div>

<div class="row">
   	<div class="col-md-8">
    <img class="img-circle" src="/img/Resume.jpg" alt="Generic placeholder image" width="140" height="140">
    	<table class="table table-striped table-bordered">   
      		<tbody>
      			<tr>
         		<th scope="row">Languages: </th>
			        <td> 1. Javascript <br> 2. PHP</td>  
			        <td> 3. MySQL <br> 4. JQuery</td>
			        <td> 5. HTML <br> 6. CSS</td>                  
       			</tr>      
    		</tbody>
   		</table>
 	</div>
</div>

<main>
   <h1>Skills</h1>
<div class="row">
    <div class="col-md-5">
        <h3><em>HTML</em></h3>
        <div class="progress">
          	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
            90%
          	</div>
        </div>
     </div>
</div>
 <div class="row">
  	<div class="col-md-5">
    	<h3><em>CSS</em></h3>
    	<div class="progress">
  			<div class="progress-bar progress-bar-striped active" 
		     role="progressbar"
		     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
		     80%
			</div>
  		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-5">
 		<h3><em>Javascript</em></h3>
  		<div class="progress">
    		<div class="progress-bar progress-bar-striped active" 
			    role="progressbar"
			    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
			    65%
  			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-5">
  		<h3><em>PHP</em></h3>
  		<div class="progress">
		    <div class="progress-bar progress-bar-striped active" role="progressbar"
		    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
		    90%
			</div>
		</div>
	</div>
</div> 
<div class="row">
    <div class="col-md-5">
      <h3><em>JQuery</em></h3>
      	<div class="progress">
	        <div class="progress-bar progress-bar-striped active" 
	        role="progressbar"
	        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
	        70%
      		</div>
    	</div>
   </div>
</div>
<div class="row">
    <div class="col-md-5">
      	<h3><em>MySQL</em></h3>
	      	<div class="progress">
				<div class="progress-bar progress-bar-striped active" 
				role="progressbar"
				aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
				60%
     			</div>
   	 		</div>
   	</div>
</div>
</main>

</section>


<!-- START THE FEATURETTES -->
<hr class="featurette-divider">
	<div class="row featurette">
  		<div class="col-md-7">
    		<h2 class="featurette-heading"><span class="text-muted">It'll blow your mind.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  		</div>
	</div>
<hr class="featurette-divider">
	<div class="row featurette">
  		<div class="col-md-7 col-md-push-5">
    		<h2 class="featurette-heading"><span class="text-muted">See for yourself.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  		</div>
	</div>

<h1 class="text-center"><a href="#myModal" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Me</a></h1>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        		<h3 id="myModalLabel">I'd Love to Hear From You</h3>
      		</div>
      		<div class="modal-body">
        		<form class="form-horizontal col-sm-12">
          			<div class="form-group">
          				<label>Name</label>
          				<input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
         	 		<div class="form-group">
         	 			<label>Message</label>
         	 			<textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
          			<div class="form-group">
          				<label>E-Mail</label>
          				<input class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
          			<div class="form-group">
          				<label>Phone</label>
          				<input class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
          			<div class="form-group">
          				<button type="submit" class="btn btn-success pull-right">Send It!</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
        		</form>
      		</div>
      		<div class="modal-footer">
        		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      		</div>
    	</div>
  	</div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</section>

@stop

