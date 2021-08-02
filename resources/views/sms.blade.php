<!DOCTYPE>
<htm>
    <head></head>
    <body>

    {!! Form::open(['url' => 'foo/bar']) !!}
        {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::close() !!}
        {!! Form::checkbox('name', 'value') !!}
        {{--{{Name()}} this helper method --}}

    </body>
</htm>
