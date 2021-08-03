@extends('admin.layout.master')
@section('title') Home @endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{trans('admin.setting')}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="container">
        {!! Form::open([
                        'url'       => route('setting.update'),
                        'method'    => 'post',
                        'role'      => 'form'
                ]) !!}
            @foreach($setting as $set)
                    <div class="form-group">
                       {{--<input type="hidden" name="{{$set->id}}">--}}
                        <label for="{{$set->name}}">{{$set->title}}</label>
                        @if($set->type == 'text')
                            {!! Form::text($set->name,$set->value,[
                                    'class'         =>"form-control",
                                    'placeholder'   =>$set->title
                                ]) !!}
                            @elseif($set->type == 'textarea')
                            {!! Form::textarea($set->name,$set->value,[
                                    'class'         =>"form-control",
                                    'placeholder'   =>$set->title
                                ]) !!}
                            @else
                            {!! Form::select($set->name,$set->options,$set->value,[
                                    'class'         =>"form-control",

                                ]) !!}
                        @endif
                    </div>

                @endforeach
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.submit')}}</button>
        </div

        {!! Form::close() !!}
        </div>
       {{-- <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>--}}
    </div>
@endsection
