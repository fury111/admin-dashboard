<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body id="page-top">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar / Header (optional) -->
                @include('layout.header')

                <!-- Main Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            
        </div>
    </div>
    @include('layout.footer')

    <!-- Bootstrap core JS (already in footer.blade.php, but ensure it's there) -->
</body>
</html>