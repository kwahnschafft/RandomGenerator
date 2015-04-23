@extends('_master')

@section('content')
        <br>
        <br>
        <div class = "number">Here are your {{$number}} people!</div>
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