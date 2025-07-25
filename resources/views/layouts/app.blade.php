<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    @include('partials.header')
    <div class="content">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>