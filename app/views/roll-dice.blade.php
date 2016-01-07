@extends('layouts.master')
	
@section('content')
    <h1>You picked {{{ $guess }}}, The real number was {{{ $dice }}}</h1>
    @if ($guess != $dice) 
	    <h1>You Were Wrong!!!!!</h1>
    @else
        <h1>You Were Right!!!!!</h1>
    @endif
@stop
