@extends('admin.layout.master')
@section('title') Home @endsection
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{trans('admin.user')}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>{{trans('admin.id')}}</th>
                    <th>{{trans('admin.username')}}</th>
                    <th>{{trans('admin.email')}}</th>
                    <th>{{trans('admin.action')}}</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th>{{trans('admin.id')}}</th>
                    <th>{{trans('admin.username')}}</th>
                    <th>{{trans('admin.email')}}</th>
                    <th>{{trans('admin.action')}}</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            // processing to make like load when page open for first one to load data from DB
            'ajax':'{{route('admin.user.loadData')}}',
            'columns':[
            {"data":'id','name':'id'},
            {"data":'username','name':'name'},
            {"data":'email','name':'email'},
            {"data":'action','name':''},
            ]

            });
       });
    </script>
@endsection
