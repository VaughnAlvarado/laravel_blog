@extends('layouts.master')
@section('top-script')
<link rel="stylesheet" href="/css/post.css">
@stop
@section('content')
<div class ='post'>
	<div class ='container'>
		{{ Form::open(array('action' => 'AuthController@postLogin')) }}
		<h2>Log in</h2>
		{{ $errors->first('email', '<span class="help-block">:message</span>') }}
	       {{ Form::label('email', 'Email') }}
	       {{ Form::text('email', null , array('class' => 'form-control')) }}
	       <br>
	       {{ $errors->first('password', '<span class="help-block">:message</span>') }}
	       {{ Form::label('password', 'Password') }}
	       {{ Form::password('password', array('class' => 'form-control')) }}
	        <div class="checkbox">
	         <label>
	           <input type="checkbox" value="remember-me"> Remember me
	         </label>
	        </div>
	        	<button class="largebtn" type='submit'>Submit</button>
	        	<h3 class="signup-link"><a href="{{{ action('AuthController@signUp') }}}">Not a user? Sign up now!</a></h3>
         {{ Form::close() }}
	   	<br>
	   	<hr>
 	</div>
</div>
@stop
