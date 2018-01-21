@extends('layouts.lex_app')

@section('content')


<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home')}}">logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Unterricht</a></li>
      <li><a href="#"> Nachschlagewerk</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">







  <div class="row lexikon">
    <div class="col-md-2 navileiste">
      <div class="vertical-menu">
        <a href="#" class="active">Übersicht</a>
        <a href="#">Lektion 1</a>
        <a href="#">Lektion 2</a>
        <a href="#">Lektion 3</a>
        <a href="#">Lektion 4</a>
      </div>
    </div>
<div class="col-md-9">
    <div class="learncontent">
      @include('lex_html.trennuntrennUbung')

    </div>
</div>


    </div>
</div>


  @endsection
