<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','TUTORIAL')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
    </ul>

    @yield('content')

</body>
</html>