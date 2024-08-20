@include('layouts.meta')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')

</body>

</html>