@foreach($errors->all() as $error)
    <strong style="color:red;">{{$error}}</strong>
@endforeach
<div class="form-group">
    <label>User Name</label>
    {!! Form::text('username',null,
        ['class' =>"form-control",'required']
        )
    !!}
    <label>Email</label>
    {!! Form::email('email',null,
        ['class' =>"form-control",'required']
        )
    !!}
    <label>Role</label>
    {!! Form::select('role',getRole(),null,
        ['class' =>"form-control",'required']
        )
    !!}
    <label>Password</label>
    {!! Form::password('password',
        ['class' =>"form-control",'required']
        )
    !!}

</div>

