<html lang="en">
<head>
    @include('include.head')
</head>
<body>
    @include('include.menu')
    <div style="margin-top: 60px">
        @yield('content')
    </div>
    @include('include.foot')
</body>
</html>