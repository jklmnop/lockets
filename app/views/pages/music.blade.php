@extends('layouts.default')

@section('content')
<h2>Music</h2>

@foreach($results as $r)
	<h3>{{ $r->title }}</h3>
	{{ $r->body }}

@endforeach

@stop