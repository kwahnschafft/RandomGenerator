@extends('_master')

@section('content')
    <form id="textForm" class="form" method="post" action="/text">
        Number of Dr. Seuss Quotes: 
        <input type="text" name="numberT"/> </br> </br>
        <input type="submit" value="Generate Wisdom!" class="submit"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
    @if($error)
        {{$error}}
    @endif
@stop