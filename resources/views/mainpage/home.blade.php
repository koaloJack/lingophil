@extends('layouts.app')

@section('content')




<div class="container-flow">
  <div class="row" id="row-main">
    <div class="col-md-2" id="sidebar">
      <p>sidebar</p>
    </div>
    <div class="col-md-10" id="content">

        <div class="jumbotron">
          @include('_parts.collap_left')

          <h1>Lingophil</h1>
          <h3>Sprache spielerisch leicht lernen</h3>
          <button type="button" class="btn btn-default toggle-sidebar">Toggle sidebar</button>

      <button type="button" name="button" class="circle">press me</button>  </div>
    </div>
    <div class="col-md-0" id="sidebarRight">
      <p>sidebar</p>
    </div>
  </div>
</div>


@endsection
