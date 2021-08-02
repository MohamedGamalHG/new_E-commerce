@include('admin.layout.header')
@include('admin.layout.menu')
@include('admin.layout.sidebar')

<div class="wrapper">
    <div class="content-wrapper">
        @yield('index')
    </div>
</div>

@include('admin.layout.footer')
