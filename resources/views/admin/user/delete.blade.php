@extends('admin.layout.master')
@section('title') Delete @endsection
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Delete</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="container">

            {!! Form::open([
                            'url'       => route('user.destroy',$user->id),
                            'method'    => 'Delete',
                    ]) !!}
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Delete User</button>
                <a href="{{route('user.index')}}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}

        </div>
@endsection
