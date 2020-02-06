@extends('layouts.master')

@section('content')
<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @include('layouts._partials.topbar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        @include('layouts._partials.sidebar')
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                @yield('content-dashboard')

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ env('APP_SITE_YEAR', 2020) == date('Y') ? env('APP_SITE_YEAR', 2020) : env('APP_SITE_YEAR', 2020) . ' - ' . date('Y') }}
                        &copy; {{ config('app.name') }}
                        by <a href="#">Yudi Andela</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

</div>
<!-- END wrapper -->
@endsection
