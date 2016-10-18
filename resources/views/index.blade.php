@extends('layout.master')

@section('content')
@include('partials.modules.messages')
@if(subscribers_enabled())
<div class="subscribe-button-wrap">
  <a class="btn btn-success btn-outline" href="{{ cachet_route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
</div>
<div class="figshare-intro">
  <h1>the state of fig<strong>share</strong></h1>
  <h4>here you will find real-time information about the status of our services.</h4>
</div>
@endif
@modules
@stop
