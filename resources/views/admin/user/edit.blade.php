@extends('admin.layout.master')
@section('title') Home @endsection
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{trans('admin.create',['name'=>trans('admin.get-name')])}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="container">
            {{--  here the form take model except open
                    model here take the $user that variable get all user from DB in first parameter method patch
                    model mean that it bind the form of create user
                    -- model take $user and compare it with the field of form create user
             --}}
            {!! Form::model($user,[
                            'route'       => ['user.update',$user->id],
                            'method'    => 'patch',
                            'role'      => 'form'
                    ]) !!}
            <input type="hidden" name="id" value="{{$user->id}}">
            @include('admin.user.form')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
            </div>
            {!! Form::close() !!}

        </div>
@endsection
