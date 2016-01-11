@extends('layouts.master')

@section('content')
<form action="{{{ action('PostsController@store') }}}" method="post" id ="signup" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label class='sign_up' name='register'>Register</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" id='title' name="title" placeholder="First Name" type="text"
                                value = '{{{ Input::old('title') }}}' required autofocus><br>
                        </div>
                        <br>
                        <div class="col-xs-6 col-md-6">
                            <textarea class="form-control" id='body' name="body" placeholder="Last Name" type="text" value = '{{{ Input::old('body') }}}' ><br>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                </form>

@stop