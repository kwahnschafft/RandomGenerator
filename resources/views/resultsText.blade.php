@extends('_master')

@section('content')
    <br>
    <br>
    <div class = "number">Here are your {{$number}} quotes!</div>
    @foreach($paragraphs as $line)
        <div class="people">{{$line}}</div>
    @endforeach
@stop