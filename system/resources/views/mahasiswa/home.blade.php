<!DOCTYPE html>
<html lang="en">

@include('template.layout.head')

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('template.layout.navbar')
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('template.layout.sidebar_mhs')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <!-- content -->
            @include('template.layout.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('template.layout.script')

</body>

</html>
