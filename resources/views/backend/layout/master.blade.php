<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    @include('backend.layout.inc.style')

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">

    <div id="main-wrapper">
        @include('backend.layout.inc.nav')

        @include('backend.layout.inc.header')

        @include('backend.layout.inc.sidebar')

        <div class="content-body">
            @yield('content')
        </div>

        @include('backend.layout.inc.footer')
    </div>
    @include('backend.layout.inc.script')
</body>

</html>
