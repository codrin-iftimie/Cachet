@extends('layout.master')

@section('content')
@include('partials.modules.messages')
<div class="figshare-intro">
  <h1>the state of fig<strong>share</strong></h1>
  <h4>here you will find real-time information about the status of our services.</h4>
</div>
@modules
@stop
