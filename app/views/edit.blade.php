@extends('layouts.master')
@section('top-script')
<link rel="stylesheet" href="/css/post.css">
@stop
@section('content')
{{ Form::model($post, array('action' => array('PostsController@update', $post->slug_title),'method' => 'PUT')) }}
<div class ='post'>
    <div class='container'>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <label class = 'edit'>Edit Post</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                {{ $errors->first('subject', '<span class="help-block">:message</span>') }}
                <div class = "{{ $errors->has('subject')  ? 'form-group has-error': '' }} ">
                    {{ Form::label('subject', 'Subject') }}
                    {{ Form::text('subject',null, ['class' => 'form-control']) }}
        	    </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6">
            	 {{ $errors->first('body', '<span class="help-block">:message</span>') }}
            	 <div class = "{{ $errors->has('body')  ? 'form-group has-error': '' }} ">
                	{{ Form::label('body', 'Blog') }}
                    {{ Form::textarea('body',null , ['class' => 'form-control', 'rows' => 5, 'cols' => 50]) }}
            	</div>
            </div>
        </div>
        <input name = "user_id" type='hidden' value ="1">
        <br>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-md-6">
        		<button class="btn btn-lg btn-primary btn-block" id='margin-button' type="submit">Submit</button>
          	</div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop
