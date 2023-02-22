<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('admin.includes.head')

<body>

    {{-- navbar --}}
    @include('admin.includes.navbar')

    {{-- sidebar --}}
    @include('admin.includes.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->

    {{-- footer --}}
    @include('admin.includes.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    {{-- script --}}
    @include('admin.includes.script')

</body>

</html>
