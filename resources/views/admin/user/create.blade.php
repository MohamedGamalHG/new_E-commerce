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
            {!! Form::open([
                            'url'       => route('user.store'),
                            'method'    => 'post',
                            'role'      => 'form'
                    ]) !!}
            @include('admin.user.form')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
            </div>
            {!! Form::close() !!}

        </div>
@endsection
