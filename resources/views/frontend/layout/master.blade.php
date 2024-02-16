<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    @php
        $about = \App\Models\About::find(1);
        $title = $about ? $about->name : 'Default Title';
    @endphp

    <title>@yield('title') - {{ $title }}</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.layout.inc.style')
</head>

<body class="home-style2">
    <!--Preloader area start here-->
    @include('frontend.layout.inc.preloader')
    <!--Preloader area End here-->
    <!--Full width header Start-->
    @include('frontend.layout.inc.header')
    <!--Full width header End-->
    <!-- Main content Start -->
    <div class="main-content">
        @yield('contect')
    </div>
    <!-- Main content End -->
    <!-- Footer Start -->
    @include('frontend.layout.inc.footer')
    <!-- Footer End -->
    <!-- start scrollUp  -->
    @include('frontend.layout.inc.scrollUp')
    <!-- End scrollUp  -->
    @include('frontend.layout.inc.script')
</body>

</html>
