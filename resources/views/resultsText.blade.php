@extends('_master')

@section('content')
    <br>
    <br>
    <div class = "number"><div class = "number">@if($number > 1) Here are your {{$number}} quotes! @endif @if($number == 1) Here is your {{$number}} quote! @endif</div></div>
    @foreach($paragraphs as $line)
        <div class="people">{{$line}}</div>
    @endforeach
@stop