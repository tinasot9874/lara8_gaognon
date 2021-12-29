@include('admin._header');

<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="blur-up lazyloaded"
                                src="{{ asset('images/dashboard/multikart-logo.png') }}" alt=""></a></div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>


            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">


            @include('admin._sidebar')

            @yield('content')


        </div>

        @include('admin._footer');
</body>

</html>