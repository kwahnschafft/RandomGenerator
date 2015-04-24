@extends('_master')

@section('content')
    <form class="form" id="peopleForm" method="post" action="/people">
        Number of Friends:
        <input type="text" name="numberP"/> </br> <br>
        Include Birthday? <input class="check" type="checkbox" name="birthday"/> </br> <br>
        Include Profile? <input class="check" type="checkbox" name="profile"/> <br><br>
        <input type="submit" class="submit" value="Generate Friends!"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
    @if($error)
        {{$error}}
    @endif
@stop