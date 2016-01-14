@extends('layouts.master')
@section('top-script')
<link rel="stylesheet" href="/css/post.css">
@stop
@section('content')
<div class ='post'>
	<div class ='container'>
		<h3>Post: {{{$post->id }}}</h3>
	   	<h4>Subject: {{{ $post->subject }}}</h4>
	   	<p>{{{ $post->body }}}</p> 
		{{ Form::open(array('action' => array('PostsController@destroy', $post->slug_title),'method' => 'DELETE')) }}
	   		<button class = 'btn btn-danger'>Delete this post</button>
	   	{{ Form::close() }}
	   	<br>
	   	<hr>
 	</div>
</div>
@stop
