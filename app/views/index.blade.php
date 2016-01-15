@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/post.css">
@stop

@section('content')
<div class = 'index-background'>
	<div class ='blog-wrapper'>
		<div class ='post'>
		@foreach($posts as $post)
			<div class ='container'>
				<div class ='blog-meat'>
					<h3><a href="{{{ action('PostsController@show', $post->slug_title) }}}">User: {{{ $post->user->username }}}</a></h3>
					<h4>Subject: {{{ $post->subject }}}</h4>
					<p>Post: {{{ $post->body }}}</p>
					<br>
					<hr>
					<p>Created: {{{ $post->created_at->diffForHumans() }}}</h4>
					@if (Auth::check() && Auth::user()->id == $post->user_id)
					<h4 class='edit-post'><a href="{{{ action('PostsController@edit', $post->slug_title) }}}">Edit this post</a></h4>
					@endif
				</div>
			</div>
		@endforeach
		</div>
		{{ $posts->links() }}
	</div>
</div>
@stop
