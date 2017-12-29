@extends('layouts.app')

@section('content')



<nav class="navbar-primary">
  <ul class="navbar-primary-menu">
    <li>
      <a href="{{ route('lexikon') }}"><span ></span><span class="nav-label">Learning Course</span></a>
      <a href="{{ route('alt') }}"><span ></span><span class="nav-label">Profile</span></a>
      <a href="#"><span ></span><span class="nav-label">Settings</span></a>
      <a href="#"><span ></span><span class="nav-label">Notification</span></a>
      <a href="#"><span ></span><span class="nav-label">Monitor</span></a>
    </li>
  </ul>
</nav>

<nav class="navbar-right">
  <ul class="navbar-primary-menu">
    <li>
      <a href="#"><span ></span><span class="nav-label">Dashboard</span></a>
      <a href="#"><span ></span><span class="nav-label">Profile</span></a>
      <a href="#"><span ></span><span class="nav-label">Settings</span></a>
      <a href="#"><span ></span><span class="nav-label">Notification</span></a>
      <a href="#"><span ></span><span class="nav-label">Monitor</span></a>
    </li>
  </ul>
</nav>


<div class="jumbotron">
  @include('_parts.navigation')
<h1> I am the main content </h1>
<a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
<a href="#" class="btn-expand-rightNav"><span class="glyphicon glyphicon-menu-left"></span></a>

</div>

@endsection
