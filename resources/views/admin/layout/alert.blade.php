@if(session()->has('flash_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session()->get('flash_message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@section('script')
    <script>
        setTimeout(function (){
            $('#fade').fadeOut();
        },1000);
    </script>
@endsection
