@include('layouts.meta')

<body class="g-sidenav-show  bg-gray-200">

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End Sidebar -->

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <!-- Content -->
            @yield('content')
            <!-- End Content -->

            <!-- footer -->
            @include('layouts.footer')
            <!-- End footer -->