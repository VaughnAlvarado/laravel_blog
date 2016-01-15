@extends('layouts.master')
@section('top-script')
<link rel="stylesheet" href="/css/post.css">
@stop
@section('content')
<div class ='post'>
	<div class ='container'>
		{{ Form::open(array('action' => 'AuthController@storeSignUp')) }}
		<h2>Sign Up!</h2>
			{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('first_name', 'First Name') }}
	       	{{ Form::text('first_name', null , array('class' => 'form-control')) }}
	       	<br>
			{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('last_name', 'Last Name') }}
	       	{{ Form::text('last_name', null , array('class' => 'form-control')) }}
	       	<br>
	       	{{ $errors->first('username', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('username', 'User name (Will be displayed)') }}
	       	{{ Form::text('username', null, array('class' => 'form-control')) }}
	       	<br>
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('email', 'Email') }}
	       	{{ Form::text('email', null , array('class' => 'form-control')) }}
	       	<br>
	       	{{ $errors->first('password', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('password', 'Password') }}
	       	{{ Form::password('password', array('class' => 'form-control')) }}
	       	<br>
	       	{{ $errors->first('birthday', '<span class="help-block">:message</span>') }}
	       	{{ Form::label('birthday', 'Birthday') }}
	       	{{ Form::text('birthday', null, array('class' => 'form-control')) }}
	        <div class="checkbox">
	         <label>
	           <input type="checkbox" value="remember-me">Remember me</input>
	         </label>
	        </div>
	        	<button class="btn btn-primary" type='submit'>Submit</button>
         {{ Form::close() }}
	   	<br>
	   	<hr>
 	</div>
</div>
@stop
