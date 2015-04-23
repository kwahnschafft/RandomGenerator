@section('content')
    <h1>This is working!</h1>
        
        <form method="post" action="/form">
            Max <input type="text" name="max"/>
            <input type="submit" value="This is better"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </form>
<@stop>