@include('admin.layout.header')
@include('admin.layout.menu')
@include('admin.layout.sidebar')

<div class="wrapper">
    <div class="content-wrapper">
        @include('admin.layout.alert')
        @yield('content')
    </div>
</div>

@include('admin.layout.footer')
