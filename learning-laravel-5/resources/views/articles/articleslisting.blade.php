@extends('app')

@section('content')
		@foreach($atcs as $atc)
			<!-- <h1> <a href="/articleDetails/{{ $atc->id }}" >{{$atc->title}}</a></h1> -->
			<!-- <h1> <a href="{{ action('ArticleController@details',[$atc->id]) }}" >{{$atc->title}}</a></h1> -->
			<h1> <a href="{{ url('/articleDetails', $atc->id) }}" >{{$atc->title}}</a></h1>
			<div>{{$atc->body}}</div>
		@endforeach
    	
@stop
