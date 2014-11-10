<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Tradicion Chagoya</title>
    @include('layouts/css')
    @yield('css')
</head>

<body>
    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')
@yield('js')
</body>
</html>