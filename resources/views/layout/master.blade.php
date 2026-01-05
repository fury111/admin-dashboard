<!DOCTYPE html>
<html lang="en">
    @include('layout.head')

    <body>
        @include('layout.header')
        @include('layout.sidebar')

        <main class="container mt-4">
            @yield('content')
        </main>

        @include('layout.footer')
    </body>
</html>
