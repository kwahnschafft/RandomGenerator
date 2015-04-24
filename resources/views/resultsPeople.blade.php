@extends('_master')

@section('content')
        <br>
        <br>
        <div class = "number">@if($number > 1) Here are your {{$number}} people! @endif @if($number == 1) Here is your {{$number}} person! @endif</div>
        @for($i = 0; $i < $number; $i++)
            <div class="people">{{$firstNames[$i]}}<br>
            @if($birthdays)
                {{$birthdays[$i]}}
                <br>
            @endif
            @if($profiles)
                {{$profiles[$i]}}
            @endif
            </div>
        @endfor
@stop