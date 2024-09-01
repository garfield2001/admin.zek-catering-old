<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite('resources/css/auth.css')
</head>

<body class="hold-transition @yield('body-class')">
    @yield('content')
    @vite('resources/js/auth.js')
</body>

</html>
