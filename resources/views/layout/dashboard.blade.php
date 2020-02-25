<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('partials.navbar')

    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content-header')

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('partials.footer')

    @include('partials.right-sidebar')
</div>
<!-- ./wrapper -->

@include('partials.scripts')
</body>
</html>
