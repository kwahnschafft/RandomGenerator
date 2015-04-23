@extends('_master')

@section('title')
	Random Generator Form
@stop

@section('head')
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
@stop

@section('content')
	<div id = "container">
		<a href="/text"><div id = "text"><div class="layover">Random Text Generator</div></div></a>
		<a href="/people"><div id = "person"><div class="layover">Random Person Generator</div></div></a>
	</div>
@stop
