@extends('layouts.master')


@section('content')
<h1>Dice guess game!!!!</h1>
<h2>Pick a guess</h2>
<a href="{{{  action('HomeController@showDice', array(1))  }}}">Guess 1</a>
<a href="{{{  action('HomeController@showDice', array(2))  }}}">Guess 2</a>
<a href="{{{  action('HomeController@showDice', array(3))  }}}">Guess 3</a>
<a href="{{{  action('HomeController@showDice', array(4))  }}}">Guess 4</a>
<a href="{{{  action('HomeController@showDice', array(5))  }}}">Guess 5</a>
<a href="{{{  action('HomeController@showDice', array(6))  }}}">Guess 6</a>

<a href="{{{  action('HomeController@showResume')  }}}">See My Resume Here</a>

@stop